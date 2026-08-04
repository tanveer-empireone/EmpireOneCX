<?php
/**
 * inc/contact-form.php
 * ---------------------
 * Reusable EmpireOne CX contact form.
 * Drop-in include for any page:
 *
 *   <?php include("inc/contact-form.php"); ?>          (from root-level pages)
 *   <?php include("../inc/contact-form.php"); ?>       (from sub-folder pages)
 *
 * Requires on the parent page (already in header/footer):
 *   - SweetAlert2  (sweetalert2.all.min.js / CDN)
 *   - jQuery       (assets/js/jquery.js)
 *   - Tailwind CSS
 *
 * The form POSTs to /send-mail.php and expects a JSON response:
 *   { "status": "success"|"error", "message": "..." }
 */
?>

<style>
@media (max-width: 1024px) {
    .cx-hero-grid { grid-template-columns: 1fr !important; }
    .cx-hero-grid .cx-hero-form { display: none; } /* or show below copy */
}
/* ─── Contact Form Embed — scoped to .ecx-form-wrap ─── */
.ecx-form-wrap {
    width: 100%;
    text-align: left;
}
.ecx-form-wrap .ecx-label {
    display: block;
    font-size: 18px;
    line-height: 24px;
    color: #000;
    margin-bottom: 6px;
    text-align: left;
}
.ecx-form-wrap .ecx-input,
.ecx-form-wrap .ecx-select {
    width: 100%;
    padding: 12px 16px;
    border-radius: 6px;
    background: rgba(229,229,229,1);
    border: 1px solid #E5E5E5;
    font-size: 16px;
    line-height: 24px;
    color: #000;
    text-align: left;
    transition: box-shadow 0.2s ease, border-color 0.2s ease;
    outline: none;
    appearance: none;
    -webkit-appearance: none;
}
.ecx-form-wrap .ecx-input:focus,
.ecx-form-wrap .ecx-select:focus {
    border-color: #CB46FA;
    box-shadow: 0 0 0 3px rgba(203,70,250,0.15);
}
.ecx-form-wrap .ecx-input::placeholder {
    color: #999;
}

/* Phone wrapper */
.ecx-phone-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(229,229,229,1);
    border: 1px solid #E5E5E5;
    border-radius: 6px;
    padding: 12px 16px;
    transition: box-shadow 0.2s ease, border-color 0.2s ease;
}
.ecx-phone-wrapper:focus-within {
    border-color: #CB46FA;
    box-shadow: 0 0 0 3px rgba(203,70,250,0.15);
}
.ecx-phone-wrapper input[type="tel"] {
    background: transparent;
    border: none;
    outline: none;
    font-size: 16px;
    width: 100%;
    color: #000;
}
.ecx-phone-wrapper input[type="tel"]::placeholder {
    color: #999;
}
.ecx-country-toggle {
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
    user-select: none;
    flex-shrink: 0;
}
.ecx-country-toggle img {
    width: 20px;
    height: 14px;
}
.ecx-country-toggle span.ecx-code {
    font-size: 15px;
    white-space: nowrap;
}
.ecx-divider {
    color: #bbb;
    height: 22px;
    line-height: 22px;
    flex-shrink: 0;
}

/* Dropdown */
.ecx-country-dropdown {
    position: absolute;
    left: 0;
    top: calc(100% + 4px);
    width: 280px;
    max-height: 300px;
    overflow-y: auto;
    background: #fff;
    border-radius: 10px;
    border: 1px solid #e5e5e5;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    z-index: 999;
    display: none;
}
.ecx-country-dropdown.open {
    display: block;
}
.ecx-country-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 9px 16px;
    cursor: pointer;
    font-size: 14px;
    color: #222;
    text-align: left;
    transition: background 0.15s;
}
.ecx-country-item:hover {
    background: #f5f0ff;
}
.ecx-country-item img {
    width: 20px;
    height: 14px;
    flex-shrink: 0;
}
.ecx-country-item .ecx-cname {
    flex: 1;
}
.ecx-country-item .ecx-ccode {
    color: #888;
}

/* Checkbox row */
.ecx-privacy-row {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 20px;
}
.ecx-privacy-row input[type="checkbox"] {
    accent-color: #CB46FA;
    width: 16px;
    height: 16px;
    flex-shrink: 0;
    cursor: pointer;
}
.ecx-privacy-row p {
    font-size: 16px;
    line-height: 24px;
    color: #000;
    margin: 0;
}
.ecx-privacy-link {
    background: linear-gradient(90deg, #CB46FA, #FE881C);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-decoration: underline;
    cursor: pointer;
}

/* Submit button */
.ecx-submit-btn {
    display: inline-block;
    margin-top: 24px;
    padding: 14px 32px;
    border-radius: 10px;
    background: linear-gradient(90deg, #CB46FA 0%, #FE881C 100%);
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    border: none;
    cursor: pointer;
    transition: opacity 0.2s ease, transform 0.2s ease;
    width: 100%;
}
.ecx-submit-btn:hover {
    opacity: 0.92;
    transform: translateY(-1px);
}
.ecx-submit-btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none;
}

/* SweetAlert confirm button override */
.ecx-swal-confirm {
    background: #ffffff !important;
    color: #000 !important;
    font-weight: 600;
    border-radius: 8px !important;
    padding: 10px 24px !important;
}

/* Grid helpers */
.ecx-grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
}
.ecx-field {
    position: relative;
}
.ecx-mt {
    margin-top: 20px;
}
@media (max-width: 640px) {
    .ecx-grid-2 {
        grid-template-columns: 1fr;
    }
}
</style>

<form id="ecxContactForm" class="ecx-form-wrap" novalidate>

    <div class="ecx-grid-2">

        <div class="ecx-field">
            <label class="ecx-label">Full Name</label>
            <input type="text" name="full_name" placeholder="Your Name" class="ecx-input" required>
        </div>

        <div class="ecx-field">
            <label class="ecx-label">Company Name</label>
            <input type="text" name="company_name" placeholder="Enter company name" class="ecx-input">
        </div>

    </div>

    <div class="ecx-grid-2 ecx-mt">

        <div class="ecx-field">
            <label class="ecx-label">Email Address</label>
            <input type="email" name="email" placeholder="name@company.com" class="ecx-input" required>
        </div>

        <div class="ecx-field">
            <label class="ecx-label">Contact Number</label>
            <div class="ecx-phone-wrapper">
                <div class="ecx-country-toggle" id="ecxCountryToggle">
                    <img id="ecxSelectedFlag" src="https://flagcdn.com/w20/us.webp" alt="">
                    <span class="ecx-code" id="ecxSelectedCode">+1</span>
                    <svg width="12" height="12" viewBox="0 0 20 20" fill="currentColor" style="color:#666;">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <span class="ecx-divider">|</span>
                <input type="hidden" name="country_code" id="ecxCountryCode" value="+1">
                <input type="tel" name="phone" placeholder="800-233-1234">
            </div>
            <!-- Dropdown -->
            <div class="ecx-country-dropdown" id="ecxCountryDropdown">
                <?php
                $countries = [
                    ["Afghanistan","+93","af"],["Albania","+355","al"],["Algeria","+213","dz"],
                    ["Andorra","+376","ad"],["Angola","+244","ao"],["Argentina","+54","ar"],
                    ["Armenia","+374","am"],["Australia","+61","au"],["Austria","+43","at"],
                    ["Azerbaijan","+994","az"],["Bahamas","+1242","bs"],["Bahrain","+973","bh"],
                    ["Bangladesh","+880","bd"],["Belarus","+375","by"],["Belgium","+32","be"],
                    ["Belize","+501","bz"],["Benin","+229","bj"],["Bhutan","+975","bt"],
                    ["Bolivia","+591","bo"],["Bosnia and Herzegovina","+387","ba"],
                    ["Botswana","+267","bw"],["Brazil","+55","br"],["Brunei","+673","bn"],
                    ["Bulgaria","+359","bg"],["Burkina Faso","+226","bf"],["Burundi","+257","bi"],
                    ["Cambodia","+855","kh"],["Cameroon","+237","cm"],["Canada","+1","ca"],
                    ["Cape Verde","+238","cv"],["Central African Republic","+236","cf"],
                    ["Chad","+235","td"],["Chile","+56","cl"],["China","+86","cn"],
                    ["Colombia","+57","co"],["Comoros","+269","km"],["Congo","+242","cg"],
                    ["Costa Rica","+506","cr"],["Croatia","+385","hr"],["Cuba","+53","cu"],
                    ["Cyprus","+357","cy"],["Czech Republic","+420","cz"],["Denmark","+45","dk"],
                    ["Djibouti","+253","dj"],["Dominican Republic","+1809","do"],
                    ["Ecuador","+593","ec"],["Egypt","+20","eg"],["El Salvador","+503","sv"],
                    ["Equatorial Guinea","+240","gq"],["Eritrea","+291","er"],["Estonia","+372","ee"],
                    ["Ethiopia","+251","et"],["Fiji","+679","fj"],["Finland","+358","fi"],
                    ["France","+33","fr"],["Gabon","+241","ga"],["Gambia","+220","gm"],
                    ["Georgia","+995","ge"],["Germany","+49","de"],["Ghana","+233","gh"],
                    ["Greece","+30","gr"],["Guatemala","+502","gt"],["Guinea","+224","gn"],
                    ["Guinea-Bissau","+245","gw"],["Guyana","+592","gy"],["Haiti","+509","ht"],
                    ["Honduras","+504","hn"],["Hungary","+36","hu"],["Iceland","+354","is"],
                    ["India","+91","in"],["Indonesia","+62","id"],["Iran","+98","ir"],
                    ["Iraq","+964","iq"],["Ireland","+353","ie"],["Israel","+972","il"],
                    ["Italy","+39","it"],["Jamaica","+1876","jm"],["Japan","+81","jp"],
                    ["Jordan","+962","jo"],["Kazakhstan","+7","kz"],["Kenya","+254","ke"],
                    ["Kuwait","+965","kw"],["Kyrgyzstan","+996","kg"],["Laos","+856","la"],
                    ["Latvia","+371","lv"],["Lebanon","+961","lb"],["Lesotho","+266","ls"],
                    ["Liberia","+231","lr"],["Libya","+218","ly"],["Liechtenstein","+423","li"],
                    ["Lithuania","+370","lt"],["Luxembourg","+352","lu"],["Madagascar","+261","mg"],
                    ["Malawi","+265","mw"],["Malaysia","+60","my"],["Maldives","+960","mv"],
                    ["Mali","+223","ml"],["Malta","+356","mt"],["Mauritania","+222","mr"],
                    ["Mauritius","+230","mu"],["Mexico","+52","mx"],["Moldova","+373","md"],
                    ["Monaco","+377","mc"],["Mongolia","+976","mn"],["Montenegro","+382","me"],
                    ["Morocco","+212","ma"],["Mozambique","+258","mz"],["Myanmar","+95","mm"],
                    ["Namibia","+264","na"],["Nepal","+977","np"],["Netherlands","+31","nl"],
                    ["New Zealand","+64","nz"],["Nicaragua","+505","ni"],["Niger","+227","ne"],
                    ["Nigeria","+234","ng"],["North Korea","+850","kp"],["North Macedonia","+389","mk"],
                    ["Norway","+47","no"],["Oman","+968","om"],["Pakistan","+92","pk"],
                    ["Palestine","+970","ps"],["Panama","+507","pa"],["Papua New Guinea","+675","pg"],
                    ["Paraguay","+595","py"],["Peru","+51","pe"],["Philippines","+63","ph"],
                    ["Poland","+48","pl"],["Portugal","+351","pt"],["Qatar","+974","qa"],
                    ["Romania","+40","ro"],["Russia","+7","ru"],["Rwanda","+250","rw"],
                    ["Saudi Arabia","+966","sa"],["Senegal","+221","sn"],["Serbia","+381","rs"],
                    ["Sierra Leone","+232","sl"],["Singapore","+65","sg"],["Slovakia","+421","sk"],
                    ["Slovenia","+386","si"],["Somalia","+252","so"],["South Africa","+27","za"],
                    ["South Korea","+82","kr"],["South Sudan","+211","ss"],["Spain","+34","es"],
                    ["Sri Lanka","+94","lk"],["Sudan","+249","sd"],["Suriname","+597","sr"],
                    ["Sweden","+46","se"],["Switzerland","+41","ch"],["Syria","+963","sy"],
                    ["Taiwan","+886","tw"],["Tajikistan","+992","tj"],["Tanzania","+255","tz"],
                    ["Thailand","+66","th"],["Timor-Leste","+670","tl"],["Togo","+228","tg"],
                    ["Trinidad and Tobago","+1868","tt"],["Tunisia","+216","tn"],["Turkey","+90","tr"],
                    ["Turkmenistan","+993","tm"],["Uganda","+256","ug"],["Ukraine","+380","ua"],
                    ["United Arab Emirates","+971","ae"],["United Kingdom","+44","gb"],
                    ["United States","+1","us"],["Uruguay","+598","uy"],["Uzbekistan","+998","uz"],
                    ["Venezuela","+58","ve"],["Vietnam","+84","vn"],["Yemen","+967","ye"],
                    ["Zambia","+260","zm"],["Zimbabwe","+263","zw"],
                ];
                foreach ($countries as $c): ?>
                <div class="ecx-country-item"
                     data-code="<?= htmlspecialchars($c[1]) ?>"
                     data-flag="<?= htmlspecialchars($c[2]) ?>">
                    <img src="https://flagcdn.com/w20/<?= htmlspecialchars($c[2]) ?>.webp" alt="">
                    <span class="ecx-cname"><?= htmlspecialchars($c[0]) ?></span>
                    <span class="ecx-ccode"><?= htmlspecialchars($c[1]) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <div class="ecx-field ecx-mt">
        <label class="ecx-label">What are you looking to build?</label>
        <select name="inquiry_type" class="ecx-select">
            <option value="Dedicated Support Team">Dedicated Support Team</option>
            <option value="AI + Automation">AI + Automation</option>
            <option value="Recruitment & Workforce">Recruitment &amp; Workforce</option>
            <option value="Customer Experience Optimization">Customer Experience Optimization</option>
            <option value="Custom Solution">Custom Solution</option>
            <option value="Partnership">Partnership</option>
        </select>
    </div>

    <div class="ecx-privacy-row">
        <input type="checkbox" name="privacy" id="ecxPrivacy" required>
        <p>
            By ticking this box I agree that I have read the
            <a href="/privacy-policy" class="ecx-privacy-link">privacy policy</a>
        </p>
    </div>

    <button type="submit" class="ecx-submit-btn" id="ecxSubmitBtn">
        Get My Custom Growth Plan
    </button>

</form>

<script>
(function () {

    /* ── Country picker ── */
    var toggle   = document.getElementById('ecxCountryToggle');
    var dropdown = document.getElementById('ecxCountryDropdown');
    var flagImg  = document.getElementById('ecxSelectedFlag');
    var codeSpan = document.getElementById('ecxSelectedCode');
    var codeHid  = document.getElementById('ecxCountryCode');

    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        dropdown.classList.toggle('open');
    });

    document.addEventListener('click', function () {
        dropdown.classList.remove('open');
    });

    dropdown.addEventListener('click', function (e) {
        var item = e.target.closest('.ecx-country-item');
        if (!item) return;
        var code = item.dataset.code;
        var flag = item.dataset.flag;
        flagImg.src      = 'https://flagcdn.com/w20/' + flag + '.webp';
        codeSpan.textContent = code;
        codeHid.value    = code;
        dropdown.classList.remove('open');
    });

    /* ── Form submission ── */
    var form      = document.getElementById('ecxContactForm');
    var submitBtn = document.getElementById('ecxSubmitBtn');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(form);

        submitBtn.disabled  = true;
        submitBtn.innerText = 'Sending...';

        Swal.fire({
            title: 'Sending Message...',
            text: 'Please wait while we submit your request.',
            allowOutsideClick: false,
            showConfirmButton: false,
            background: 'linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)',
            color: '#fff',
            didOpen: function () { Swal.showLoading(); }
        });

        fetch('/send-mail.php', {
            method: 'POST',
            body: formData
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            Swal.close();

            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent Successfully!',
                    text: data.message,
                    background: 'linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)',
                    color: '#ffffff',
                    confirmButtonColor: '#ffffff',
                    confirmButtonText: 'OK',
                    customClass: { confirmButton: 'ecx-swal-confirm' }
                });
                form.reset();
                flagImg.src          = 'https://flagcdn.com/w20/us.webp';
                codeSpan.textContent = '+1';
                codeHid.value        = '+1';
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Something Went Wrong',
                    text: data.message,
                    background: 'linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)',
                    color: '#ffffff',
                    confirmButtonColor: '#ffffff',
                    confirmButtonText: 'Try Again',
                    customClass: { confirmButton: 'ecx-swal-confirm' }
                });
            }

            submitBtn.disabled  = false;
            submitBtn.innerText = 'Get My Custom Growth Plan';
        })
        .catch(function () {
            Swal.close();
            Swal.fire({
                icon: 'error',
                title: 'Server Error',
                text: 'Please try again later.',
                background: 'linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)',
                color: '#ffffff',
                confirmButtonColor: '#ffffff',
                customClass: { confirmButton: 'ecx-swal-confirm' }
            });
            submitBtn.disabled  = false;
            submitBtn.innerText = 'Get My Custom Growth Plan';
        });
    });

})();
</script>
