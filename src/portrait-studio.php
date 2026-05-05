<?php include 'includes/header.php'; ?>

<style>
/* ==========================================================================
   PORTRAIT STUDIO : MISE EN PAGE TYPE MAGAZINE (AÉRÉE & ÉLÉGANTE)
   ========================================================================== */

/* Conteneur principal de la grille */
.portrait-magazine-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 colonnes pour maximiser l'impact */
    gap: 60px 40px; /* Espace vertical important (60px) pour le luxe */
    align-items: start;
    margin-bottom: 80px;
}

.portrait-item {
    background: transparent;
    position: relative;
    overflow: hidden;
}

/* Image occupant toute la largeur de la grille (Focus Session) */
.portrait-item.feature-wide {
    grid-column: span 2;
    margin: 20px 0;
}

.portrait-item img { 
    width: 100%; 
    height: auto; 
    display: block;
    transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.portrait-item:hover img {
    transform: scale(1.02);
}

/* Typographie éditoriale épurée */
.portrait-meta { 
    padding: 15px 0; 
    border-top: 1px solid #000; /* Ligne de séparation élégante */
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;
}

.portrait-meta h4 { 
    margin: 0; 
    font-size: 1.2rem; 
    font-weight: 500;
    text-transform: uppercase; 
    letter-spacing: 2px; 
    color: #0f172a;
}

.portrait-meta .session-date { 
    font-size: 0.85rem; 
    color: #64748b; 
    font-family: serif; 
    font-style: italic;
}

/* --- RESPONSIVE --- */

@media (max-width: 1024px) {
    .portrait-magazine-grid { 
        gap: 40px 30px;
    }
}

@media (max-width: 768px) {
    .portrait-magazine-grid { 
        grid-template-columns: 1fr; /* Une seule colonne sur mobile */
        gap: 50px;
    }
    .portrait-item.feature-wide { 
        grid-column: span 1; 
    }
    .portrait-meta h4 { font-size: 1.1rem; }
}
</style>

<!-- HERO : ÉMOTIONNEL & SOBRE -->
<section class="hero">
    <div class="hero-inner">
        <h1>L'Âme du Studio</h1>
        <p>Une approche intimiste du portrait où chaque ombre raconte une histoire unique.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Série Limitée</span>
                <h2>Saison Automne 2026</h2>
                <p class="desc-text">Travail sur le clair-obscur et la profondeur du regard.</p>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    
                    <div class="portrait-magazine-grid">
                        
                        <!-- 01. PORTRAIT MAJEUR (Full Width Grid) -->
                        <div class="portrait-item feature-wide">
                            <img src="images/masonery-cinematique-1280x720.png" alt="Hero Portrait">
                            <div class="portrait-meta">
                                <h4>L'Instant Suspendu</h4>
                                <span class="session-date">Mai 2026</span>
                            </div>
                        </div>

                        <!-- 02. DUO : Portrait Gauche -->
                        <div class="portrait-item">
                            <img src="images/masonery-portrait-standard-900x1200.png" alt="Portrait">
                            <div class="portrait-meta">
                                <h4>Regard d'Acier</h4>
                                <span class="session-date">Session #42</span>
                            </div>
                        </div>

                        <!-- 03. DUO : Portrait Droit avec décalage artistique -->
                        <div class="portrait-item" style="margin-top: 80px;"> 
                            <img src="images/masonery-portrait-sallonge-800x1200.png" alt="Portrait">
                            <div class="portrait-meta">
                                <h4>Texture & Ombre</h4>
                                <span class="session-date">Session #43</span>
                            </div>
                        </div>

                        <!-- 04. IMAGE SEULE RESPIRATION (Full Width Grid) -->
                        <div class="portrait-item feature-wide" style="margin: 60px 0;">
                            <img src="images/masonery-paysage-1200x900.png" alt="Atmosphère">
                        </div>

                        <!-- 05. DUO : Portrait Gauche -->
                        <div class="portrait-item">
                            <img src="images/masonery-format-carre-1000x1000.png" alt="Carré">
                            <div class="portrait-meta">
                                <h4>Géométrie Humaine</h4>
                                <span class="session-date">Studio Pro</span>
                            </div>
                        </div>

                        <!-- 06. DUO : Portrait Droit -->
                        <div class="portrait-item">
                            <img src="images/masonery-portrait-standard-900x1200.png" alt="Portrait">
                            <div class="portrait-meta">
                                <h4>Éclat Final</h4>
                                <span class="session-date">Collection 26</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.html'; ?>