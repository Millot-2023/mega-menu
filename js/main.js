document.addEventListener('DOMContentLoaded', () => {
    const burgerOpen = document.getElementById('burgerOpen');
    const menuClose = document.getElementById('menuClose');
    const megaMenu = document.getElementById('megaMenu');
    const mainPanel = document.getElementById('main-panel');
    const subLinks = document.querySelectorAll('.has-submenu');
    const backBtns = document.querySelectorAll('.back-btn');
    const body = document.body;

    // Ouverture Menu
    burgerOpen.addEventListener('click', () => {
        megaMenu.classList.add('is-open');
        body.classList.add('no-scroll'); // Bloque le scroll du navigateur
    });

    // Fermeture Menu
    menuClose.addEventListener('click', () => {
        megaMenu.classList.remove('is-open');
        body.classList.remove('no-scroll'); // Libère le scroll du navigateur
        setTimeout(resetPanels, 400); 
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

    // Fermeture auto lors du clic sur un lien projet (important pour le flow)
    document.querySelectorAll('.mega-menu a:not(.has-submenu)').forEach(link => {
        link.addEventListener('click', () => {
            megaMenu.classList.remove('is-open');
            body.classList.remove('no-scroll');
            setTimeout(resetPanels, 400);
        });
    });

    function resetPanels() {
        document.querySelectorAll('.menu-panel').forEach(p => {
            p.classList.remove('active', 'is-out');
        });
        mainPanel.classList.add('active');
    }
});