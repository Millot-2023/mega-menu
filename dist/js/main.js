document.addEventListener('DOMContentLoaded', () => {
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }
    window.scrollTo(0, 0);

    console.log("Correction Perles et Pixels : Mode Stable.");
    document.body.classList.add('js-enabled');

    const body = document.body;
    const hero = document.querySelector('.hero');
    const content = document.querySelector('#content');

    // --- REVEAL AU SCROLL ---
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.15 });

    reveals.forEach(el => revealObserver.observe(el));

    // --- GESTION DU CLIC ---
    document.addEventListener('click', (e) => {
        const chevron = e.target.closest('.hero-chevron');
        if (chevron) {
            e.preventDefault();
            if (hero) {
                // On déclenche la transition CSS (1.2s de douceur)
                hero.classList.add('hero-up');

                // On force le premier reveal du titre un peu après le début
                setTimeout(() => {
                    const firstReveal = document.querySelector('.timeline-header-block .reveal');
                    if (firstReveal) firstReveal.classList.add('active');
                }, 600);

                // Une fois remonté, on l'enlève pour libérer le scroll
                setTimeout(() => {
                    hero.style.display = 'none';
                    window.scrollTo(0, 0);
                }, 1200);
            }
        }

        // --- MENU ---
        if (e.target.closest('#burgerOpen')) {
            document.getElementById('megaMenu').classList.add('is-open');
            body.classList.add('no-scroll');
        }
        if (e.target.closest('.close-btn')) {
            document.getElementById('megaMenu').classList.remove('is-open');
            body.classList.remove('no-scroll');
        }
    });
});