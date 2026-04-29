document.addEventListener('DOMContentLoaded', () => {
    if ('scrollRestoration' in history) { history.scrollRestoration = 'manual'; }
    window.scrollTo(0, 0);

    const body = document.body;
    const hero = document.querySelector('.hero');
    const reveals = document.querySelectorAll('.reveal');

    console.log("Interface Perles et Pixels : Séquençage Actif.");
    body.classList.add('js-enabled');

    // --- 1. OBSERVER (REVEAL AU SCROLL) ---
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // On n'active le reveal que si on n'est pas en train de lever le rideau
            if (entry.isIntersecting && !body.classList.contains('is-revealing')) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.15 });

    reveals.forEach(el => revealObserver.observe(el));

    // --- 2. GESTION DU DÉVOILEMENT (CLIC CHEVRON) ---
    document.addEventListener('click', (e) => {
        const chevron = e.target.closest('.hero-chevron');
        if (chevron) {
            e.preventDefault();
            if (hero) {
                // Étape A : On bloque les animations de reveal du haut
                body.classList.add('is-revealing');
                
                // Étape B : Le rideau monte
                hero.classList.add('hero-up');

                // Étape C : Fin de transition (1.2s)
                setTimeout(() => {
                    hero.style.display = 'none';
                    // On libère le body pour que le scroll puisse animer les blocs suivants
                    body.classList.remove('is-revealing');
                    window.scrollTo(0, 0);
                }, 1200);
            }
        }

        // --- GESTION MENU ---
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