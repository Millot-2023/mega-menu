<?php include 'includes/header.php'; ?>

<style>
/* ==========================================================================
   CONFIGURATION FINALE : GRILLE CONTINUE DENSIFIÉE (4 - 3 - 2)
   ========================================================================== */

.masonry-gallery {
    display: block;
    column-count: 4;
    column-gap: 12px;
    width: 100%;
    margin-bottom: 40px;
}

.studio-item {
    background: #ffffff;
    margin-bottom: 12px;
    break-inside: avoid;
    border-radius: 2px;
    overflow: hidden;
    border: 1px solid #e2e8f0;
    display: inline-block;
    width: 100%;
    transition: transform 0.3s ease;
}

.studio-item:hover { transform: scale(1.02); }

.studio-item img { 
    width: 100%; 
    height: auto; 
    display: block; 
}

.studio-info { padding: 8px; background: #fff; border-top: 1px solid #f1f5f9; }
.studio-info h4 { margin: 0; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1px; color: #0f172a; }
.studio-info span { font-size: 0.55rem; color: #94a3b8; font-family: monospace; }

/* --- RESPONSIVE PROGRESSIF --- */

@media (max-width: 1100px) {
    .masonry-gallery { column-count: 3; }
}

@media (max-width: 650px) {
    .masonry-gallery { column-count: 2; column-gap: 10px; }
    .studio-item { margin-bottom: 10px; }
}
</style>

<!-- HERO : INTACT -->
<section class="hero">
    <div class="hero-inner">
        <h1>Massonery Studio</h1>
        <p>Une galerie dynamique s'affranchissant des grilles classiques pour laisser respirer le grain et la lumière.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Portfolio Expert</span>
                <h2>01 - La Texture & Le Grain</h2>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    
                    <div class="masonry-gallery">
                        <!-- BLOC 1 -->
                        <div class="studio-item">
                            <img src="images/masonery-portrait-standard-900x1200.png">
                            <div class="studio-info"><h4>Classic</h4><span>900x1200</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-format-carre-1000x1000.png"></div>
                        <div class="studio-item">
                            <img src="images/masonery-portrait-sallonge-800x1200.png">
                            <div class="studio-info"><h4>Vertical</h4><span>800x1200</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-paysage-1200x900.png"></div>

                        <!-- BLOC 2 -->
                        <div class="studio-item"><img src="images/masonery-cinematique-1280x720.png"></div>
                        <div class="studio-item">
                            <img src="images/masonery-portrait-standard-900x1200.png">
                            <div class="studio-info"><h4>Focus</h4><span>900x1200</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-format-carre-1000x1000.png"></div>
                        <div class="studio-item">
                            <img src="images/masonery-portrait-sallonge-800x1200.png">
                            <div class="studio-info"><h4>Deep</h4><span>800x1200</span></div>
                        </div>

                        <!-- BLOC 3 -->
                        <div class="studio-item">
                            <img src="images/masonery-paysage-1200x900.png">
                            <div class="studio-info"><h4>Wide View</h4><span>1200x900</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-portrait-standard-900x1200.png"></div>
                        <div class="studio-item">
                            <img src="images/masonery-cinematique-1280x720.png">
                            <div class="studio-info"><h4>Scope</h4><span>1280x720</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-format-carre-1000x1000.png"></div>

                        <!-- BLOC 4 -->
                        <div class="studio-item">
                            <img src="images/masonery-portrait-sallonge-800x1200.png">
                            <div class="studio-info"><h4>Texture</h4><span>800x1200</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-portrait-standard-900x1200.png"></div>
                        <div class="studio-item">
                            <img src="images/masonery-paysage-1200x900.png">
                            <div class="studio-info"><h4>Studio Perspective</h4><span>1200x900</span></div>
                        </div>
                        <div class="studio-item"><img src="images/masonery-format-carre-1000x1000.png"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.html'; ?>