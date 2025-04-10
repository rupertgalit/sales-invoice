// scroll-animation.js

document.addEventListener('DOMContentLoaded', function() {
    const fadeInElements = document.querySelectorAll('.fade-in');

    function checkVisibility() {
        const windowHeight = window.innerHeight;
        const scrollTop = window.scrollY;

        fadeInElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementTop = rect.top + scrollTop;
            const elementBottom = rect.bottom + scrollTop;

            if (elementBottom > scrollTop && elementTop < scrollTop + windowHeight) {
                el.classList.add('visible');
            } else {
                el.classList.remove('visible');
            }
        });
    }

    // Initial check
    checkVisibility();

    // Check visibility on scroll and resize
    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);
});
