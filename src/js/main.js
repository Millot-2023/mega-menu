document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('js-enabled');

    const burgerOpen = document.getElementById('burgerOpen');
    const megaMenu = document.getElementById('megaMenu');
    const mainPanel = document.getElementById('main-panel');
    const body = document.body;

    if (!burgerOpen || !megaMenu || !mainPanel) return;

    // --- FONCTIONS MENU ---
    const resetPanels = () => {
        document.querySelectorAll('.menu-panel').forEach(p => p.classList.remove('active', 'is-out'));
        document.querySelectorAll('.submenu-trigger').forEach(l => l.setAttribute('aria-expanded', 'false'));
        mainPanel.classList.add('active');
    };

    const closeAllMenu = () => {
        megaMenu.classList.remove('is-open');
        body.classList.remove('no-scroll');
        setTimeout(resetPanels, 400);
    };

    burgerOpen.addEventListener('click', () => {
        megaMenu.classList.add('is-open');
        body.classList.add('no-scroll');
    });

    // --- GESTION DES REVEALS (OBSERVER UNIQUE) ---
    const reveals = document.querySelectorAll('.reveal');
    const observerOptions = { threshold: 0.15 };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    reveals.forEach(el => revealObserver.observe(el));

    // --- GESTION DES CLICS ---
    document.addEventListener('click', (e) => {
        const chevron = e.target.closest('.hero-chevron');

        if (chevron) {
            e.preventDefault();
            const hero = document.querySelector('.hero');
            const content = document.querySelector('#content');

            if (hero) {
                // On pré-active les reveals du haut pour éviter le bug visuel
                const topReveals = document.querySelectorAll('.timeline-header-block .reveal');
                topReveals.forEach(r => r.classList.add('active'));

                hero.classList.add('hero-up');

                setTimeout(() => {
                    hero.style.display = 'none';
                    if (content) {
                        content.style.marginTop = '0';
                        window.scrollTo(0, 0);
                    }
                }, 800);
            }
            return;
        }

        if (e.target.closest('.close-btn')) closeAllMenu();

        const trigger = e.target.closest('.submenu-trigger');
        if (trigger) {
            const targetPanel = document.getElementById(trigger.getAttribute('data-target'));
            if (targetPanel) {
                trigger.setAttribute('aria-expanded', 'true');
                mainPanel.classList.add('is-out');
                mainPanel.classList.remove('active');
                targetPanel.classList.add('active');
            }
        }

        const backBtn = e.target.closest('.back-btn');
        if (backBtn) {
            const currentPanel = backBtn.closest('.menu-panel');
            currentPanel.classList.remove('active');
            mainPanel.classList.remove('is-out');
            mainPanel.classList.add('active');
        }

        if (e.target.closest('.direct-link') || e.target.closest('.mega-grid a')) {
            if (!e.target.closest('.submenu-trigger')) closeAllMenu();
        }
    });
});