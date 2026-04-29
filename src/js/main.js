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

    // --- GESTION DES REVEALS (Scroll Animations) ---
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.05 });

    reveals.forEach(el => revealObserver.observe(el));

    // --- GESTION DES CLICS GLOBALE ---
    document.addEventListener('click', (e) => {
        
        // 1. LE CHEVRON (HERO)
        const chevron = e.target.closest('.hero-chevron');
        if (chevron) {
            e.preventDefault();
            console.log("DEBUG: 1. Clic sur le chevron détecté");
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.classList.add('hero-up');
                body.classList.remove('no-scroll');
                // On active les reveals pour que le contenu soit déjà là
                document.querySelectorAll('.reveal').forEach(r => r.classList.add('active'));
                
                setTimeout(() => {
                    hero.style.display = 'none';
                    window.scrollTo(0, 0);
                }, 800);
            }
            return; // On arrête ici pour ce clic
        }

        // 2. FERMETURE MENU
        if (e.target.closest('.close-btn')) {
            closeAllMenu();
        }

        // 3. OUVERTURE SOUS-PANNEAU
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

        // 4. BOUTON RETOUR
        const backBtn = e.target.closest('.back-btn');
        if (backBtn) {
            const currentPanel = backBtn.closest('.menu-panel');
            if (currentPanel) currentPanel.classList.remove('active');
            mainPanel.classList.remove('is-out');
            mainPanel.classList.add('active');
        }

        // 5. LIENS DIRECTS (Fermer le menu après clic)
        if (e.target.closest('.direct-link') || e.target.closest('.mega-grid a')) {
            if (!e.target.closest('.submenu-trigger')) {
                closeAllMenu();
            }
        }
    });
});