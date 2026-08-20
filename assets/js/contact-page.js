// Contact page behavior extracted to reduce rendered HTML weight.
document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let form = this;
    let formData = new FormData(form);
    let submitBtn = form.querySelector("button[type='submit']");

    // Disable button
    submitBtn.disabled = true;
    submitBtn.innerText = "Sending...";

    // Show Loading SweetAlert
    Swal.fire({
        title: "Sending Message...",
        text: "Please wait while we submit your request.",
        allowOutsideClick: false,
        showConfirmButton: false,
        background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
        color: "#fff",
        didOpen: () => {
            Swal.showLoading();
        }
    });

    fetch("send-mail.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        Swal.close();

        if (data.status === "success") {

            Swal.fire({
                icon: "success",
                title: "Message Sent Successfully!",
                text: data.message,
                background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
                color: "#ffffff",
                confirmButtonColor: "#ffffff",
                confirmButtonText: "OK",
                customClass: {
                    confirmButton: "custom-confirm-btn"
                }
            });

            form.reset();

        } else {

            Swal.fire({
                icon: "error",
                title: "Something Went Wrong",
                text: data.message,
                background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
                color: "#ffffff",
                confirmButtonColor: "#ffffff",
                confirmButtonText: "Try Again"
            });
        }

        // Enable button again
        submitBtn.disabled = false;
        submitBtn.innerText = "Send Message";

    })
    .catch(error => {

        Swal.close();

        Swal.fire({
            icon: "error",
            title: "Server Error",
            text: "Please try again later.",
            background: "linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%)",
            color: "#ffffff",
            confirmButtonColor: "#ffffff"
        });

        submitBtn.disabled = false;
        submitBtn.innerText = "Send Message";
    });
});

$(document).ready(function () {

    $(".country-item").on("click", function () {
        let code = $(this).data("code");
        $("#country_code").val(code);
    });
});

const swiper = new Swiper('.global-presence-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
    },
    speed: 1000,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        600: { slidesPerView: 1 },
        1024: { slidesPerView: 2 },
        1280: { slidesPerView: 4 },
    },
});
