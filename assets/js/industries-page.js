(function () {
    var progress = document.getElementById("scroll-progress");
    var mainFlex = document.querySelector(".mainflextag");

    if (progress && mainFlex) {
        window.addEventListener("scroll", function () {
            var rect = mainFlex.getBoundingClientRect();
            var viewportCenter = window.innerHeight / 2;
            var distance = viewportCenter - rect.top;
            var total = rect.height;
            var percent = (distance / total) * 100;

            percent = Math.max(6, Math.min(100, percent));
            progress.style.height = percent + "%";
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        var industryPages = {
            retail: ["/industries/retail-bpo", "Explore Retail BPO Services"],
            automotive: ["/industries/automotive-bpo", "Explore Automotive BPO Services"],
            travel: ["/industries/travel-hospitality-bpo", "Explore Travel BPO Services"],
            technical: ["/industries/telecommunications-bpo", "Explore Telecom BPO Services"],
            energy: ["/industries/energy-bpo", "Explore Energy BPO Services"],
            utility: ["/industries/utility-bpo", "Explore Utility BPO Services"],
            technology: ["/industries/technology-bpo", "Explore Technology BPO Services"],
            government: ["/industries/government-bpo", "Explore Government BPO Services"],
            legal: ["/industries/legal-process-outsourcing", "Explore Legal Outsourcing Services"],
            financeservices: ["/industries/financial-services-bpo", "Explore Financial Services BPO"],
            ecommerce: ["/industries/ecommerce-bpo", "Explore eCommerce BPO Services"],
            realestate: ["/industries/real-estate-bpo", "Explore Real Estate BPO Services"],
            gaming: ["/industries/gaming-bpo", "Explore Gaming BPO Services"],
            homeservices: ["/industries/home-services-bpo", "Explore Home Services BPO"],
            homewarranty: ["/industries/home-warranty-bpo", "Explore Home Warranty BPO"],
            transportationlogistics: ["/industries/transportation-logistics-bpo", "Explore Logistics BPO Services"]
        };

        Object.entries(industryPages).forEach(function (entry) {
            var section = document.getElementById(entry[0]);
            var offer = section ? section.querySelector(".mytextoffer") : null;

            if (!offer || offer.querySelector(".industry-explore-btn")) return;

            var wrapper = document.createElement("div");
            wrapper.className = "mt-6";
            wrapper.innerHTML = '<a class="industry-explore-btn" href="' + entry[1][0] + '">' +
                entry[1][1] + ' <i class="fa fa-arrow-right" aria-hidden="true"></i></a>';
            offer.appendChild(wrapper);
        });

        document.querySelectorAll(".line-btn").forEach(function (button) {
            button.addEventListener("click", function () {
                document.querySelectorAll(".line-btn").forEach(function (item) {
                    item.classList.remove("btn-active");
                });
                button.classList.add("btn-active");
            });
        });
    });
})();
