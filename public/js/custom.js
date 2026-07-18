document.addEventListener("DOMContentLoaded", function () {
    const heroBg = document.getElementById("hero-bg");

    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY;

        if (scrollY > 300) {
            // after 300px scroll, change background
            heroBg.style.backgroundImage =
                "url('/assets/images/hero-banner-2.png')";
            heroBg.classList.add("scale-105"); // optional animation
        } else {
            // revert back when scrolling up
            heroBg.style.backgroundImage =
                "url('/assets/images/hero-banner.png')";
            heroBg.classList.remove("scale-105");
        }

        // Button style change on scroll
        const btn = document.querySelector(".btn-custom");
        if (window.scrollY > 200) {
            // Change after 200px scroll (adjust as needed)
            btn.classList.add("scrolled");
        } else {
            btn.classList.remove("scrolled");
        }
    });
});
