document.addEventListener('DOMContentLoaded', () => {
    const burgerOpen = document.getElementById('burgerOpen');
    const menuClose = document.getElementById('menuClose');
    const megaMenu = document.getElementById('megaMenu');
    const mainPanel = document.getElementById('main-panel');
    const subLinks = document.querySelectorAll('.has-submenu');
    const backBtns = document.querySelectorAll('.back-btn');

    // Ouverture Menu
    burgerOpen.addEventListener('click', () => {
        megaMenu.classList.add('is-open');
    });

    // Fermeture Menu
    menuClose.addEventListener('click', () => {
        megaMenu.classList.remove('is-open');
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

    function resetPanels() {
        document.querySelectorAll('.menu-panel').forEach(p => {
            p.classList.remove('active', 'is-out');
        });
        mainPanel.classList.add('active');
    }
});