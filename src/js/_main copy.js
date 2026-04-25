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

    // 2. Gestion des clics (Délégation d'événement pour plus de fiabilité)
    document.addEventListener('click', (e) => {

        // Bouton Fermer
        if (e.target.closest('.close-btn')) {
            closeAllMenu();
        }

        // Déclencheur sous-menu
        const trigger = e.target.closest('.submenu-trigger');
        if (trigger) {
            console.log("Clic sous-menu détecté");
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

        // Liens directs (fermeture auto)
        if (e.target.closest('.direct-link') || (e.target.closest('.mega-grid a'))) {
            if (!e.target.closest('.submenu-trigger')) {
                closeAllMenu();
            }
        }

        // 3. Gestion du Chevron Hero (Disparition)
        const chevron = e.target.closest('.hero-chevron');
        if (chevron) {
            e.preventDefault();
            const heroSection = document.querySelector('.hero');
            if (heroSection) {
                // Lance l'animation CSS vers le haut
                heroSection.classList.add('hero-up');

                // Après l'animation (0.8s), on le cache et on s'assure d'être en haut
                setTimeout(() => {
                    heroSection.classList.add('hidden');
                    window.scrollTo(0, 0);
                }, 800);
            }
        }
    });
});