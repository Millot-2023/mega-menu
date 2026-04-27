document.addEventListener("DOMContentLoaded", function() {
    // Indique au CSS que le moteur d'animation est prêt
    document.body.classList.add('js-enabled');
    
    const reveals = document.querySelectorAll('.reveal');
    const boxes = document.querySelectorAll('.box');

    function handleScrollAnimations() {
        const viewportHeight = window.innerHeight;
        const threshold = viewportHeight * 0.2; // Zone de fondu (20% haut/bas)

        reveals.forEach(el => {
            const rect = el.getBoundingClientRect();
            
            // 1. Logique de Fade-In / Fade-Out (Opacité)
            let opacity = 1;
            if (rect.top < threshold) {
                // Sortie par le haut
                opacity = rect.bottom / (threshold * 2);
            } else if (rect.bottom > viewportHeight - threshold) {
                // Entrée par le bas
                opacity = (viewportHeight - rect.top) / (threshold * 2);
            }
            
            // On bride l'opacité entre 0 et 1
            el.style.opacity = Math.max(0, Math.min(1, opacity));

            // 2. Logique de Reveal (Translation)
            if (rect.top < viewportHeight - 50) {
                el.classList.add('active');
            } else {
                el.classList.remove('active');
            }
        });

        // 3. Parallaxe léger sur les boîtes
        boxes.forEach(box => {
            const rect = box.getBoundingClientRect();
            if (rect.top < viewportHeight && rect.bottom > 0) {
                const shift = (rect.top - viewportHeight / 2) * 0.05;
                box.style.transform = `translateY(${shift}px)`;
            }
        });
    }

    // Écouteur de scroll
    window.addEventListener('scroll', handleScrollAnimations);
    // Premier calcul au chargement
    handleScrollAnimations();
});