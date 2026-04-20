document.addEventListener('DOMContentLoaded', () => {
    const burgerOpen = document.getElementById('burgerOpen');
    const megaMenu = document.getElementById('megaMenu');
    const mainPanel = document.getElementById('main-panel');
    const subLinks = document.querySelectorAll('.has-submenu');
    const backBtns = document.querySelectorAll('.back-btn');
    const body = document.body;

    // --- FERMETURE DU MENU (Fonction réutilisable) ---
    const closeAllMenu = () => {
        megaMenu.classList.remove('is-open');
        body.classList.remove('no-scroll');
        // On attend la fin de l'animation pour reset les panneaux
        setTimeout(resetPanels, 400); 
    };

    // Ouverture Menu
    burgerOpen.addEventListener('click', () => {
        megaMenu.classList.add('is-open');
        body.classList.add('no-scroll');
    });

    // --- LA CORRECTION : Cibler TOUTES les croix ---
    document.querySelectorAll('.close-btn').forEach(btn => {
        btn.addEventListener('click', closeAllMenu);
    });

    // Aller au sous-menu
    subLinks.forEach(link => {
        link.addEventListener('click', () => {
            const targetId = link.getAttribute('data-target');
            const targetPanel = document.getElementById(targetId);
            
            mainPanel.classList.add('is-out');
            mainPanel.classList.remove('active');
            targetPanel.classList.add('active');
        });
    });

    // Retour
    backBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const currentPanel = btn.closest('.menu-panel');
            currentPanel.classList.remove('active');
            mainPanel.classList.remove('is-out');
            mainPanel.classList.add('active');
        });
    });

    // Fermeture auto lors du clic sur un lien projet
    document.querySelectorAll('.mega-menu a:not(.has-submenu)').forEach(link => {
        link.addEventListener('click', closeAllMenu);
    });

    function resetPanels() {
        document.querySelectorAll('.menu-panel').forEach(p => {
            p.classList.remove('active', 'is-out');
        });
        mainPanel.classList.add('active');
    }
});