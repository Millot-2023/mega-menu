document.addEventListener('DOMContentLoaded', () => {
    console.log("Menu JS chargé et prêt.");

    const burgerOpen = document.getElementById('burgerOpen');
    const megaMenu = document.getElementById('megaMenu');
    const mainPanel = document.getElementById('main-panel');
    const body = document.body;

    if (!burgerOpen || !megaMenu || !mainPanel) {
        console.error("Erreur : Éléments du menu manquants dans le DOM.");
        return;
    }

    // --- FONCTIONS ---
    const resetPanels = () => {
        document.querySelectorAll('.menu-panel').forEach(p => {
            p.classList.remove('active', 'is-out');
        });
        document.querySelectorAll('.submenu-trigger').forEach(l => {
            l.setAttribute('aria-expanded', 'false');
        });
        mainPanel.classList.add('active');
    };

    const closeAllMenu = () => {
        megaMenu.classList.remove('is-open');
        body.classList.remove('no-scroll');
        setTimeout(resetPanels, 400);
    };

    // --- ÉVÉNEMENTS ---

    // 1. Ouverture
    burgerOpen.addEventListener('click', () => {
        console.log("Ouverture du menu");
        megaMenu.classList.add('is-open');
        body.classList.add('no-scroll');
    });

    // 2. Gestion des clics
    document.addEventListener('click', (e) => {

        // Bouton Fermer
        if (e.target.closest('.close-btn')) {
            closeAllMenu();
        }

        // Déclencheur sous-menu
        const trigger = e.target.closest('.submenu-trigger');
        if (trigger) {
            const targetId = trigger.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);

            if (targetPanel) {
                trigger.setAttribute('aria-expanded', 'true');
                mainPanel.classList.add('is-out');
                mainPanel.classList.remove('active');
                targetPanel.classList.add('active');
            }
        }

        // Bouton Retour
        const backBtn = e.target.closest('.back-btn');
        if (backBtn) {
            const currentPanel = backBtn.closest('.menu-panel');
            if (currentPanel) {
                currentPanel.classList.remove('active');
                mainPanel.classList.remove('is-out');
                mainPanel.classList.add('active');
                document.querySelectorAll('.submenu-trigger').forEach(l => {
                    l.setAttribute('aria-expanded', 'false');
                });
            }
        }

        // Liens directs
        if (e.target.closest('.direct-link') || (e.target.closest('.mega-grid a'))) {
            if (!e.target.closest('.submenu-trigger')) {
                closeAllMenu();
            }
        }

        // 3. Gestion du Chevron Hero (Dévoilement)
        const chevron = e.target.closest('.hero-chevron');
        if (chevron) {
            e.preventDefault();
            const heroSection = document.querySelector('.hero');
            if (heroSection) {
                // Le Hero remonte et laisse voir le contenu dessous
                heroSection.classList.add('hero-up');

                // On attend la fin de l'animation pour nettoyer le DOM
                setTimeout(() => {
                    heroSection.classList.add('hidden');
                }, 800);
            }
        }
    });
});