// Global footprint page behavior extracted to reduce rendered HTML weight.
function initLocationArchive() {
    const locationProgress = document.getElementById('location-scroll-progress');
    const locationsMainFlex = document.querySelector('.locations-mainflextag');

    if (locationProgress && locationsMainFlex) {
        window.addEventListener('scroll', () => {
            const rect = locationsMainFlex.getBoundingClientRect();
            const viewportCenter = window.innerHeight / 2;
            const distance = viewportCenter - rect.top;
            const total = rect.height;
            let percent = (distance / total) * 100;
            percent = Math.max(6, Math.min(100, percent));
            locationProgress.style.height = percent + '%';
        });
    }

    window.scrollToLocationTarget = function (targetId) {
        const target = document.getElementById(targetId);

        if (!target) {
            return;
        }

        const header = document.querySelector("header");
        const headerOffset = header ? header.offsetHeight + 24 : 110;
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerOffset;

        window.scrollTo({
            top: targetPosition,
            behavior: "auto"
        });
    };

    document.querySelectorAll(".location-scroll-trigger").forEach(btn => {
        btn.addEventListener("click", function (event) {
            const targetId = this.getAttribute("data-location-target");

            if (!targetId) {
                return;
            }

            if (this.classList.contains("line-btn")) {
                document.querySelectorAll(".line-btn").forEach(item => item.classList.remove("btn-active"));
                this.classList.add("btn-active");
            }

            event.preventDefault();
            window.setTimeout(() => window.scrollToLocationTarget(targetId), 40);
        });
    });
}

initLocationArchive();
