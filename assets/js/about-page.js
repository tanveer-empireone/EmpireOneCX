(function () {
    var track = document.getElementById("sliderTrack");
    var slides = document.querySelectorAll(".slide");
    var index = 0;

    function getSlidesToShow() {
        if (window.innerWidth >= 1024) return 4;
        if (window.innerWidth >= 768) return 3;
        return 2;
    }

    function moveSlide() {
        if (!track || !slides.length) return;

        var slidesToShow = getSlidesToShow();
        var slideWidth = slides[0].offsetWidth;
        index += 1;

        if (index > slides.length - slidesToShow) {
            index = 0;
        }

        track.style.transform = "translateX(-" + (index * slideWidth) + "px)";
        track.style.transition = "transform 0.7s ease-in-out";
    }

    if (track && slides.length) {
        setInterval(moveSlide, 2500);
    }

    var sliderItems = document.querySelectorAll(".slider-item");
    var dots = document.querySelectorAll(".dot");
    var container = document.getElementById("slider-container");
    var currentIndex = 0;
    var startX = 0;
    var isDragging = false;

    function setActive(nextIndex) {
        if (!sliderItems.length) return;

        nextIndex = (nextIndex + sliderItems.length) % sliderItems.length;
        currentIndex = nextIndex;

        sliderItems.forEach(function (item, itemIndex) {
            item.classList.toggle("active", itemIndex === nextIndex);
        });

        dots.forEach(function (dot, dotIndex) {
            dot.classList.toggle("active", dotIndex === nextIndex);
        });
    }

    function handleStart(event) {
        startX = event.type.indexOf("mouse") !== -1 ? event.pageX : event.touches[0].clientX;
        isDragging = true;
    }

    function handleEnd(event) {
        if (!isDragging) return;

        var endX = event.type.indexOf("mouse") !== -1 ? event.pageX : event.changedTouches[0].clientX;
        var diff = startX - endX;

        if (Math.abs(diff) > 50) {
            setActive(diff > 0 ? currentIndex + 1 : currentIndex - 1);
        }

        isDragging = false;
    }

    dots.forEach(function (dot) {
        dot.addEventListener("click", function () {
            setActive(parseInt(dot.getAttribute("data-index"), 10));
        });
    });

    if (container) {
        container.addEventListener("touchstart", handleStart, { passive: true });
        container.addEventListener("touchend", handleEnd, { passive: true });
        container.addEventListener("mousedown", handleStart);
        container.addEventListener("dragstart", function (event) {
            event.preventDefault();
        });
        window.addEventListener("mouseup", handleEnd);
    }
})();
