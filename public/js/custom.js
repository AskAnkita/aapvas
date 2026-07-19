if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
}
window.scrollTo(0, 0);

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

// Custom cursor + hover micro-interactions (desktop, fine-pointer only)
(function () {
    if (window.matchMedia("(pointer: coarse)").matches) return;
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    const dot = document.createElement("div");
    dot.className = "cursor-dot";
    const ring = document.createElement("div");
    ring.className = "cursor-ring";
    document.body.appendChild(dot);
    document.body.appendChild(ring);
    document.body.classList.add("custom-cursor-active");

    let mouseX = 0, mouseY = 0, ringX = 0, ringY = 0;

    window.addEventListener("mousemove", function (e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.style.opacity = "1";
        ring.style.opacity = "1";
        dot.style.transform = "translate(" + mouseX + "px," + mouseY + "px)";
    });

    document.addEventListener("mouseleave", function () {
        dot.style.opacity = "0";
        ring.style.opacity = "0";
    });

    (function animateRing() {
        ringX += (mouseX - ringX) * 0.18;
        ringY += (mouseY - ringY) * 0.18;
        ring.style.transform = "translate(" + ringX + "px," + ringY + "px)";
        requestAnimationFrame(animateRing);
    })();

    const hoverSelector = "a, button, .btn, .card, .service, .navbar-brand";
    document.addEventListener("mouseover", function (e) {
        if (e.target.closest && e.target.closest(hoverSelector)) {
            document.body.classList.add("cursor-hover");
        }
    });
    document.addEventListener("mouseout", function (e) {
        if (e.target.closest && e.target.closest(hoverSelector)) {
            document.body.classList.remove("cursor-hover");
        }
    });
})();
