document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add('js-enabled');
    const reveals = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {
        const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) { entry.target.classList.add('active'); }
                else { entry.target.classList.remove('active'); }
            });
        }, observerOptions);
        reveals.forEach(el => revealObserver.observe(el));
    } else {
        reveals.forEach(el => el.classList.add('active'));
    }
});