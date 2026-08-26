(function () {
    document.querySelectorAll(".industry-detail-faq-toggle").forEach(function (button) {
        button.addEventListener("click", function () {
            var item = button.closest(".industry-detail-faq-item");
            var wasOpen = item.classList.contains("is-open");

            document.querySelectorAll(".industry-detail-faq-item").forEach(function (faq) {
                faq.classList.remove("is-open");
                faq.querySelector(".industry-detail-faq-toggle").setAttribute("aria-expanded", "false");
            });

            if (!wasOpen) {
                item.classList.add("is-open");
                button.setAttribute("aria-expanded", "true");
            }
        });
    });
})();
