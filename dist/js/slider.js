/**
 * SLIDER.JS - Gestion de la navigation du carrousel horizontal
 */
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.getElementById('slider');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    if (!slider || !prevBtn || !nextBtn) return;

    // Calcul de la largeur d'une slide (100% de la fenêtre)
    const getSlideWidth = () => window.innerWidth;

    // Navigation vers la droite
    nextBtn.addEventListener('click', () => {
        slider.scrollBy({
            left: getSlideWidth(),
            behavior: 'smooth'
        });
    });

    // Navigation vers la gauche
    prevBtn.addEventListener('click', () => {
        slider.scrollBy({
            left: -getSlideWidth(),
            behavior: 'smooth'
        });
    });

    // Optionnel : Gestion du redimensionnement de la fenêtre
    window.addEventListener('resize', () => {
        // Recalage automatique sur la slide active en cas de resize
        const currentIndex = Math.round(slider.scrollLeft / getSlideWidth());
        slider.scrollTo({
            left: currentIndex * getSlideWidth(),
            behavior: 'auto'
        });
    });
});