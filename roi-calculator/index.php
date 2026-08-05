<?php
$page_title = "BPO ROI Calculator | EmpireOneCX";
$meta_description = "Estimate potential annual savings from outsourcing customer support, back-office, and BPO operations with the EmpireOneCX ROI calculator.";
$metaKeywords = "BPO ROI calculator, outsourcing savings calculator, customer support outsourcing cost, CX outsourcing ROI, offshore BPO calculator";
include(__DIR__ . "/../inc/header.php");
?>

<style>
.roi-page {
    background: #ffffff;
}
.roi-hero {
    min-height: 620px;
    padding: 220px 16px 130px;
    background: #030306;
    isolation: isolate;
}
.roi-gradient-text {
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 52%, #FE881C 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.roi-shell {
    margin-top: -74px;
    position: relative;
    z-index: 4;
}
.roi-panel {
    border: 1px solid rgba(122, 118, 255, 0.16);
    border-radius: 16px;
    background: rgba(255,255,255,0.98);
    box-shadow: 0 24px 80px rgba(15, 15, 30, 0.14);
    overflow: hidden;
}
.roi-panel-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.02fr) minmax(340px, 0.78fr);
}
.roi-form-zone {
    padding: 34px;
}
.roi-results-zone {
    padding: 34px;
    background: linear-gradient(160deg, #080812 0%, #171226 54%, #281007 100%);
    color: #fff;
}
.roi-field-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}
.roi-field {
    display: flex;
    flex-direction: column;
    gap: 7px;
}
.roi-label {
    font-family: "helveticalight", sans-serif;
    color: #1d1c25;
    font-size: 15px;
    line-height: 21px;
    font-weight: 700;
}
.roi-help {
    color: #6a6875;
    font-size: 13px;
    line-height: 18px;
}
.roi-input,
.roi-select {
    width: 100%;
    border: 1px solid rgba(122, 118, 255, 0.22);
    border-radius: 8px;
    background: #f7f7fb;
    color: #16141f;
    font-size: 16px;
    line-height: 24px;
    padding: 13px 14px;
    outline: none;
    transition: border-color 180ms ease, box-shadow 180ms ease, background 180ms ease;
}
.roi-input:focus,
.roi-select:focus {
    border-color: #7A76FF;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(122, 118, 255, 0.13);
}
.roi-range {
    accent-color: #7A76FF;
    width: 100%;
}
.roi-result-card {
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 12px;
    padding: 18px;
    background: rgba(255,255,255,0.08);
    margin-bottom: 14px;
}
.roi-result-label {
    color: rgba(255,255,255,0.72);
    font-size: 13px;
    line-height: 18px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}
.roi-result-value {
    display: block;
    margin-top: 6px;
    font-size: 32px;
    line-height: 38px;
    font-weight: 800;
}
.roi-result-value--accent {
    background: linear-gradient(90deg, #a9a6ff 0%, #df5dfb 48%, #ff9b39 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.roi-breakdown {
    margin-top: 22px;
    border-top: 1px solid rgba(255,255,255,0.12);
    padding-top: 18px;
}
.roi-breakdown-row {
    display: flex;
    justify-content: space-between;
    gap: 18px;
    color: rgba(255,255,255,0.8);
    font-size: 14px;
    line-height: 22px;
    margin-bottom: 10px;
}
.roi-breakdown-row strong {
    color: #fff;
    white-space: nowrap;
}
.roi-disclaimer {
    color: rgba(255,255,255,0.68);
    font-size: 13px;
    line-height: 20px;
    margin-top: 18px;
}
.roi-cost-breakdown {
    margin-top: 26px;
    border: 1px solid rgba(122, 118, 255, 0.14);
    border-radius: 16px;
    background: #ffffff;
    box-shadow: 0 18px 54px rgba(15, 15, 30, 0.08);
    overflow: hidden;
}
.roi-cost-breakdown__head {
    display: flex;
    justify-content: space-between;
    gap: 18px;
    align-items: center;
    padding: 24px 26px;
    border-bottom: 1px solid rgba(122, 118, 255, 0.12);
}
.roi-cost-breakdown__head p {
    max-width: 680px;
}
.roi-cost-table-wrap {
    overflow-x: auto;
}
.roi-cost-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 760px;
}
.roi-cost-table th,
.roi-cost-table td {
    padding: 16px 26px;
    border-bottom: 1px solid rgba(122, 118, 255, 0.1);
    text-align: left;
    vertical-align: top;
}
.roi-cost-table th {
    color: #15141d;
    font-size: 13px;
    line-height: 18px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    background: #f8f8fb;
}
.roi-cost-table td {
    color: #343240;
    font-size: 15px;
    line-height: 22px;
}
.roi-cost-table td:nth-child(2),
.roi-cost-table td:nth-child(3),
.roi-cost-table th:nth-child(2),
.roi-cost-table th:nth-child(3) {
    text-align: right;
    white-space: nowrap;
}
.roi-cost-table .roi-cost-group td {
    background: linear-gradient(90deg, rgba(122, 118, 255, 0.08), rgba(254, 136, 28, 0.06));
    color: #15141d;
    font-weight: 800;
}
.roi-cost-table .roi-cost-total td {
    background: #090812;
    color: #ffffff;
    font-weight: 800;
    border-bottom: 0;
}
.roi-cost-table .roi-included {
    color: #7A76FF;
    font-weight: 800;
}
.roi-assumptions {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
    margin-top: 26px;
    margin-bottom: 26px;
}
.roi-assumption {
    border: 1px solid rgba(122, 118, 255, 0.14);
    border-radius: 12px;
    padding: 18px;
    background: linear-gradient(135deg, rgba(122,118,255,0.06), rgba(254,136,28,0.05));
}
.roi-lead-section {
    margin-bottom: 26px;
}
.roi-lead-card {
    border-radius: 16px;
    padding: 34px;
    background: #f8f8fb;
    border: 1px solid rgba(122, 118, 255, 0.14);
}
.roi-lead-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}
.roi-submit {
    border-radius: 8px;
    background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);
    color: #fff;
    padding: 14px 26px;
    font-weight: 700;
    transition: transform 180ms ease, box-shadow 180ms ease;
}
.roi-submit:hover {
    transform: translateY(-1px);
    box-shadow: 0 12px 24px rgba(203, 70, 250, 0.22);
}
.roi-submit:disabled {
    opacity: 0.72;
    cursor: not-allowed;
    transform: none;
}
@media (max-width: 1024px) {
    .roi-panel-grid,
    .roi-assumptions {
        grid-template-columns: 1fr;
    }
    .roi-cost-breakdown__head {
        align-items: flex-start;
        flex-direction: column;
    }
}
@media (max-width: 700px) {
    .roi-hero {
        min-height: 560px;
        padding-top: 170px;
        padding-bottom: 110px;
    }
    .roi-form-zone,
    .roi-results-zone,
    .roi-lead-card {
        padding: 24px;
    }
    .roi-field-grid,
    .roi-lead-grid {
        grid-template-columns: 1fr;
    }
    .roi-result-value {
        font-size: 28px;
        line-height: 34px;
    }
    .roi-cost-breakdown__head,
    .roi-cost-table th,
    .roi-cost-table td {
        padding-left: 18px;
        padding-right: 18px;
    }
    .roi-assumptions {
        margin-bottom: 26px;
    }
}
</style>

<main class="roi-page relative">
    <section class="roi-hero relative flex items-center text-center overflow-hidden">
        <video class="absolute inset-0 w-full h-full object-cover z-0" autoplay muted loop playsinline preload="metadata">
            <source src="/assets/images/roi-background.mp4" type="video/mp4" />
        </video>
        <div class="absolute inset-0 bg-black/50 z-0"></div>
        <div class="container mx-auto w-full relative z-10 px-4">
            <p class="herosubtitle text-[20px] leading-[28px] mb-4 animate-reveal delay-1">
                <span class="spanfont roi-gradient-text">ROI Calculator</span>
            </p>
            <h1 class="solutions-hero-heading herocheck animate-reveal delay-2 text-[48px] font-medium leading-[54px] sm:leading-[1.1] mb-4 text-white mx-auto" style="max-width: 920px;">
                Estimate the Cost Impact of Outsourcing Your CX & BPO Team
            </h1>
            <p class="subpara font-normal animate-reveal delay-3 text-gray-300 text-sm sm:text-base lg:text-lg mx-auto mb-0" style="max-width: 850px !important;">
                Compare in-house staffing costs against a dedicated outsourcing model and see a directional estimate of annual savings.
            </p>
        </div>
    </section>

    <section class="roi-shell pb-20">
        <div class="container mx-auto px-4">
            <div class="roi-panel">
                <div class="roi-panel-grid">
                    <div class="roi-form-zone">
                        <div class="mb-7">
                            <p class="roi-gradient-text text-[15px] leading-[22px] font-bold mb-2">Build your estimate</p>
                            <h2 class="text-[32px] leading-[38px] font-medium text-black mb-3">Enter your current team assumptions.</h2>
                            <p class="text-[#3C3B47] text-[16px] leading-[24px]">Use your best current numbers. You can adjust the outsourcing model to compare offshore, nearshore, or hybrid delivery.</p>
                        </div>

                        <form id="roiCalculatorForm" class="roi-field-grid">
                            <div class="roi-field">
                                <label class="roi-label" for="roiAgents">Number of agents</label>
                                <input class="roi-input" id="roiAgents" type="number" min="1" value="25" inputmode="numeric">
                                <span class="roi-help">Current or planned full-time seats.</span>
                            </div>

                            <div class="roi-field">
                                <label class="roi-label" for="roiWage">Agent hourly rate ($)</label>
                                <input class="roi-input" id="roiWage" type="number" min="0" step="0.5" value="22" inputmode="decimal">
                                <span class="roi-help">In-house agent hourly cost.</span>
                            </div>

                            <div class="roi-field">
                                <label class="roi-label" for="roiTeamLeadRate">Team Lead hourly rate ($)</label>
                                <input class="roi-input" id="roiTeamLeadRate" type="number" min="0" step="0.5" value="34" inputmode="decimal">
                                <span class="roi-help">Calculated at 1 team lead per 15 agents.</span>
                            </div>

                            <div class="roi-field">
                                <label class="roi-label" for="roiAccountManagerRate">Account Manager hourly rate ($)</label>
                                <input class="roi-input" id="roiAccountManagerRate" type="number" min="0" step="0.5" value="45" inputmode="decimal">
                                <span class="roi-help">Calculated at 1 account manager per account.</span>
                            </div>

                            <div class="roi-field">
                                <label class="roi-label" for="roiModel">Outsourcing model</label>
                                <select class="roi-select" id="roiModel">
                                    <option value="9">Offshore delivery</option>
                                    <option value="14">Nearshore delivery</option>
                                    <option value="12">Hybrid delivery</option>
                                </select>
                                <span class="roi-help">Team lead and account management are treated as included in the outsourced model.</span>
                            </div>
                        </form>
                    </div>

                    <aside class="roi-results-zone" aria-live="polite">
                        <p class="text-[15px] leading-[22px] font-bold mb-2 text-white/80">Estimated results</p>
                        <h2 class="text-[30px] leading-[36px] font-medium mb-6">Your potential savings snapshot.</h2>

                        <div class="roi-result-card">
                            <span class="roi-result-label">Estimated annual savings</span>
                            <strong class="roi-result-value roi-result-value--accent" id="roiAnnualSavings">$0</strong>
                        </div>

                        <div class="roi-result-card">
                            <span class="roi-result-label">Lower operating cost</span>
                            <strong class="roi-result-value" id="roiSavingsPercent">0%</strong>
                        </div>

                        <div class="roi-breakdown">
                            <div class="roi-breakdown-row"><span>Annual in-house cost</span><strong id="roiInHouse">$0</strong></div>
                            <div class="roi-breakdown-row"><span>Annual outsourced cost</span><strong id="roiOutsourced">$0</strong></div>
                            <div class="roi-breakdown-row"><span>Monthly savings estimate</span><strong id="roiMonthlySavings">$0</strong></div>
                        </div>

                        <p class="roi-disclaimer">
                            These results are directional estimates and not financial guarantees. Actual savings depend on scope, location, staffing model, service levels, technology, training, and operational requirements.
                        </p>
                    </aside>
                </div>
            </div>

            
            <div class="roi-cost-breakdown">
                <div class="roi-cost-breakdown__head">
                    <div>
                        <p class="roi-gradient-text text-[15px] leading-[22px] font-bold mb-2">Cost breakdown</p>
                        <h2 class="text-[28px] leading-[34px] font-medium text-black">See how the estimate is calculated.</h2>
                    </div>
                    <p class="text-[#3C3B47] text-[15px] leading-[23px]">This table separates direct staffing, management, training, and overhead so the in-house and outsourced models are easier to compare.</p>
                </div>
                <div class="roi-cost-table-wrap">
                    <table class="roi-cost-table">
                        <thead>
                            <tr>
                                <th>Cost category</th>
                                <th>In-house yearly</th>
                                <th>Outsourced yearly</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Agent labor</td>
                                <td id="roiTableAgentIn">$0</td>
                                <td id="roiTableAgentOut">$0</td>
                            </tr>
                            <tr>
                                <td>Team Lead <span class="text-[#6a6875]">(1:15 ratio)</span></td>
                                <td id="roiTableTeamLeadIn">$0</td>
                                <td class="roi-included" id="roiTableTeamLeadOut">Included</td>
                            </tr>
                            <tr>
                                <td>Account Manager <span class="text-[#6a6875]">(1 per account)</span></td>
                                <td id="roiTableManagerIn">$0</td>
                                <td class="roi-included" id="roiTableManagerOut">Included</td>
                            </tr>
                            <tr>
                                <td>Training <span class="text-[#6a6875]">(yearly average based on number of agents)</span></td>
                                <td id="roiTableTrainingIn">$0</td>
                                <td id="roiTableTrainingOut">$0</td>
                            </tr>
                            <tr class="roi-cost-total">
                                <td>Total direct salary cost</td>
                                <td id="roiTableTotalIn">$0</td>
                                <td id="roiTableTotalOut">$0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="roi-assumptions">
                <div class="roi-assumption">
                    <h3 class="text-[20px] leading-[26px] font-semibold text-black mb-2">What is included</h3>
                    <p class="text-[#3C3B47] text-[15px] leading-[23px]">The in-house estimate includes agent labor, team lead labor, account manager labor, and average yearly training cost.</p>
                </div>
                <div class="roi-assumption">
                    <h3 class="text-[20px] leading-[26px] font-semibold text-black mb-2">Outsourced model</h3>
                    <p class="text-[#3C3B47] text-[15px] leading-[23px]">The outsourced estimate assumes dedicated agents, with team lead and account management included in the selected outsourcing model.</p>
                </div>
                <div class="roi-assumption">
                    <h3 class="text-[20px] leading-[26px] font-semibold text-black mb-2">Best next step</h3>
                    <p class="text-[#3C3B47] text-[15px] leading-[23px]">Use this as a planning baseline, then request a custom analysis based on your channels, volume, hours, language needs, and compliance requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="roi-lead-section pb-24">
        <div class="container mx-auto px-4">
            <div class="roi-lead-card">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-5">
                        <p class="roi-gradient-text text-[15px] leading-[22px] font-bold mb-2">Custom ROI analysis</p>
                        <h2 class="text-[32px] leading-[38px] font-medium text-black mb-3">Want a more precise cost model?</h2>
                        <p class="text-[#3C3B47] text-[16px] leading-[24px]">Send your estimate to EmpireOneCX and we will help validate the right delivery model, staffing structure, and launch path.</p>
                    </div>
                    <form id="roiLeadForm" class="lg:col-span-7" novalidate>
                        <input type="hidden" name="country_code" value="+1">
                        <input type="hidden" name="inquiry_type" id="roiInquiryType" value="ROI Calculator Request">
                        <div class="roi-lead-grid">
                            <div class="roi-field">
                                <label class="roi-label" for="roiFullName">Full Name</label>
                                <input class="roi-input" id="roiFullName" name="full_name" type="text" placeholder="Your name" required>
                            </div>
                            <div class="roi-field">
                                <label class="roi-label" for="roiCompanyName">Company Name</label>
                                <input class="roi-input" id="roiCompanyName" name="company_name" type="text" placeholder="Company name">
                            </div>
                            <div class="roi-field">
                                <label class="roi-label" for="roiEmail">Email Address</label>
                                <input class="roi-input" id="roiEmail" name="email" type="email" placeholder="name@company.com" required>
                            </div>
                            <div class="roi-field">
                                <label class="roi-label" for="roiPhone">Phone Number</label>
                                <input class="roi-input" id="roiPhone" name="phone" type="tel" placeholder="800-233-1234">
                            </div>
                            <div class="roi-field">
                                <label class="roi-label" for="roiLeadAgents">Number of Agents</label>
                                <input class="roi-input" id="roiLeadAgents" name="number_of_agents" type="number" min="1" placeholder="25" inputmode="numeric">
                            </div>
                            <div class="roi-field">
                                <label class="roi-label" for="roiServiceType">Service Type</label>
                                <select class="roi-select" id="roiServiceType" name="service_type" required>
                                    <option value="Customer Support Outsourcing">Customer Support Outsourcing</option>
                                    <option value="Technical Support / Help Desk">Technical Support / Help Desk</option>
                                    <option value="Back Office Support">Back Office Support</option>
                                    <option value="Finance & Accounting BPO">Finance &amp; Accounting BPO</option>
                                    <option value="Multilingual Customer Support">Multilingual Customer Support</option>
                                    <option value="Sales Support">Sales Support</option>
                                    <option value="Custom BPO Solution">Custom BPO Solution</option>
                                </select>
                            </div>
                        </div>
                        <label class="flex items-start gap-3 mt-5 text-[#3C3B47] text-[14px] leading-[21px]">
                            <input type="checkbox" name="privacy" required class="mt-1 accent-purple-500">
                            <span>By ticking this box I agree that I have read the <a href="/privacy-policy" class="underline roi-gradient-text">privacy policy</a>.</span>
                        </label>
                        <button id="roiSubmit" type="submit" class="roi-submit mt-5">Get My Custom ROI Analysis</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
(function () {
    const fields = {
        agents: document.getElementById("roiAgents"),
        wage: document.getElementById("roiWage"),
        teamLeadRate: document.getElementById("roiTeamLeadRate"),
        accountManagerRate: document.getElementById("roiAccountManagerRate"),
        model: document.getElementById("roiModel")
    };

    const output = {
        annualSavings: document.getElementById("roiAnnualSavings"),
        savingsPercent: document.getElementById("roiSavingsPercent"),
        inHouse: document.getElementById("roiInHouse"),
        outsourced: document.getElementById("roiOutsourced"),
        monthlySavings: document.getElementById("roiMonthlySavings"),
        inquiry: document.getElementById("roiInquiryType"),
        table: {
            agentIn: document.getElementById("roiTableAgentIn"),
            agentOut: document.getElementById("roiTableAgentOut"),
            teamLeadIn: document.getElementById("roiTableTeamLeadIn"),
            managerIn: document.getElementById("roiTableManagerIn"),
            trainingIn: document.getElementById("roiTableTrainingIn"),
            trainingOut: document.getElementById("roiTableTrainingOut"),
            totalIn: document.getElementById("roiTableTotalIn"),
            totalOut: document.getElementById("roiTableTotalOut")
        }
    };

    const money = new Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "USD",
        maximumFractionDigits: 0
    });

    function numeric(field) {
        return Math.max(Number(field.value || 0), 0);
    }

    function calculate() {
        const agents = Math.max(numeric(fields.agents), 1);
        const annualHours = 1800;
        const accountManagerAnnualHours = 900;
        const wage = numeric(fields.wage);
        const teamLeadRate = numeric(fields.teamLeadRate);
        const accountManagerRate = numeric(fields.accountManagerRate);
        const outsourcedRate = Number(fields.model.value);

        const inHouseLabor = agents * wage * annualHours;
        const teamLeads = Math.ceil(agents / 15) * teamLeadRate * annualHours;
        const accountManagers = accountManagerRate * accountManagerAnnualHours;
        const trainingInHouse = agents * 2500;
        const trainingOutsourced = agents * 750;
        const inHouseTotal = inHouseLabor + teamLeads + accountManagers + trainingInHouse;

        const outsourcedTotal = (agents * outsourcedRate * annualHours) + trainingOutsourced;
        const annualSavings = Math.max(inHouseTotal - outsourcedTotal, 0);
        const monthlySavings = annualSavings / 12;
        const savingsPercent = inHouseTotal > 0 ? Math.round((annualSavings / inHouseTotal) * 100) : 0;

        output.annualSavings.textContent = money.format(annualSavings);
        output.savingsPercent.textContent = savingsPercent + "%";
        output.inHouse.textContent = money.format(inHouseTotal);
        output.outsourced.textContent = money.format(outsourcedTotal);
        output.monthlySavings.textContent = money.format(monthlySavings);
        output.table.agentIn.textContent = money.format(inHouseLabor);
        output.table.agentOut.textContent = money.format(agents * outsourcedRate * annualHours);
        output.table.teamLeadIn.textContent = money.format(teamLeads);
        output.table.managerIn.textContent = money.format(accountManagers);
        output.table.trainingIn.textContent = money.format(trainingInHouse);
        output.table.trainingOut.textContent = money.format(trainingOutsourced);
        output.table.totalIn.textContent = money.format(inHouseTotal);
        output.table.totalOut.textContent = money.format(outsourcedTotal);

        const serviceType = document.getElementById("roiServiceType")?.value || "ROI Calculator Request";
        const leadAgents = document.getElementById("roiLeadAgents");
        if (leadAgents && (!leadAgents.matches(":focus") || leadAgents.value === "")) {
            leadAgents.value = String(agents);
        }
        output.inquiry.value = "ROI Calculator Request - " + serviceType + " - " + agents + " agents, " + output.annualSavings.textContent + " estimated annual savings, " + savingsPercent + "% lower operating cost";
    }

    Object.values(fields).forEach(function (field) {
        field.addEventListener("input", calculate);
        field.addEventListener("change", calculate);
    });

    document.getElementById("roiServiceType")?.addEventListener("change", calculate);

    calculate();

    const leadForm = document.getElementById("roiLeadForm");
    const submitButton = document.getElementById("roiSubmit");

    leadForm.addEventListener("submit", function (event) {
        event.preventDefault();

        if (!leadForm.checkValidity()) {
            leadForm.reportValidity();
            return;
        }

        const formData = new FormData(leadForm);
        submitButton.disabled = true;
        submitButton.textContent = "Sending...";

        if (window.Swal) {
            Swal.fire({
                title: "Sending Request...",
                text: "Please wait while we submit your ROI analysis request.",
                allowOutsideClick: false,
                showConfirmButton: false,
                background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
                color: "#fff",
                didOpen: function () { Swal.showLoading(); }
            });
        }

        fetch("/send-mail.php", {
            method: "POST",
            body: formData
        })
        .then(function (response) { return response.json(); })
        .then(function (data) {
            if (window.Swal) {
                Swal.close();
                Swal.fire({
                    icon: data.status === "success" ? "success" : "error",
                    title: data.status === "success" ? "Request Sent Successfully!" : "Something Went Wrong",
                    text: data.message || "Please try again later.",
                    background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
                    color: "#ffffff",
                    confirmButtonColor: "#ffffff"
                });
            } else {
                alert(data.message || (data.status === "success" ? "Request sent." : "Please try again later."));
            }

            if (data.status === "success") {
                leadForm.reset();
                calculate();
            }
        })
        .catch(function () {
            if (window.Swal) {
                Swal.close();
                Swal.fire({
                    icon: "error",
                    title: "Server Error",
                    text: "Please try again later.",
                    background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
                    color: "#ffffff",
                    confirmButtonColor: "#ffffff"
                });
            } else {
                alert("Please try again later.");
            }
        })
        .finally(function () {
            submitButton.disabled = false;
            submitButton.textContent = "Get My Custom ROI Analysis";
        });
    });
})();
</script>

<?php include(__DIR__ . "/../inc/footer.php"); ?>
