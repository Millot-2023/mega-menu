<?php include 'includes/header.php'; ?>

<style>
/* ==========================================================================
   STYLES SPÉCIFIQUES : PIXEL ART & GÉNÉRATEUR
   ========================================================================== */

/* Style du Générateur de Pixel Art */
.pixel-maker-container {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: start;
    background: #f8fafc;
    padding: 30px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
}

.pixel-grid-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #ffffff;
    padding: 20px;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
}

#pixelGrid {
    display: grid;
    grid-template-columns: repeat(16, 25px);
    grid-template-rows: repeat(16, 25px);
    gap: 1px;
    background: #cbd5e1;
    border: 1px solid #cbd5e1;
    width: fit-content;
}

.pixel-cell {
    background: #ffffff;
    width: 25px;
    height: 25px;
    cursor: pointer;
    transition: background-color 0.05s ease;
}

.pixel-maker-ui {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.color-palette {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
}

.palette-color {
    aspect-ratio: 1;
    border-radius: 4px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: transform 0.1s ease, border-color 0.1s ease;
}

.palette-color.active {
    border-color: #0f172a;
    transform: scale(1.1);
}

.custom-picker-wrapper {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #ffffff;
    padding: 12px;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
}

.custom-picker-wrapper input[type="color"] {
    border: none;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    cursor: pointer;
    background: none;
}

.pixel-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.action-btn {
    flex: 1;
    min-width: 100px;
    padding: 12px;
    border: none;
    border-radius: 4px;
    font-weight: 700;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.1s ease;
}

.btn-clear {
    background: #e2e8f0;
    color: #0f172a;
}

.btn-clear:hover {
    background: #cbd5e1;
}

.btn-fill {
    background: #64748b;
    color: #ffffff;
}

.btn-fill:hover {
    background: #475569;
}

.btn-export {
    background: #0f172a;
    color: #ffffff;
}

.btn-export:hover {
    background: #1e293b;
}

/* Grille Asymétrique 1/3 - 2/3 */
.col-asymmetric {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
    align-items: stretch;
}

.col-asymmetric .text-col-content picture,
.col-asymmetric .text-col-content .responsive-picture,
.col-offset-duo .col-left picture,
.col-offset-duo .col-left .responsive-picture {
    display: block;
    width: 100%;
    height: 100%;
}

.col-asymmetric .img-standard,
.col-offset-duo .col-left .img-standard {
    width: 100%;
    height: 100%;
    min-height: 350px;
    object-fit: cover;
    object-position: center;
}

/* 1. Bloc Plein Écran Immersion */
.content-block-full {
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    margin-top: 40px;
    margin-bottom: 60px;
}
.full-image-wrapper {
    position: relative;
    height: 60vh;
    min-height: 400px;
    background: #000000;
}
.full-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.full-image-caption {
    position: absolute;
    bottom: 40px;
    left: 8%;
    color: #ffffff;
    z-index: 2;
}
.caption-tag {
    background: var(--accent-color, #e63946);
    color: #ffffff;
    padding: 4px 8px;
    font-size: 0.8rem;
    font-weight: 700;
    border-radius: 3px;
    display: inline-block;
    margin-bottom: 10px;
}

/* 2. Diptyque Décalé Corrigé */
.col-offset-duo {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 60px;
    align-items: stretch;
}
.col-offset-duo .col-right {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-top: 20px;
}
.secondary-img {
    margin-top: 20px;
    max-height: 220px;
    overflow: hidden;
}
.secondary-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* 3. Bloc Fiche Technique Sidebar */
.col-sidebar-info {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 50px;
    align-items: start;
}
.notes-box {
    background: #f9f9f9;
    padding: 25px;
    border-left: 3px solid var(--accent-color, #e63946);
    border-radius: 0 4px 4px 0;
}
.notes-box h5 {
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 1.1rem;
}
.notes-box ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.notes-box li {
    font-size: 0.9rem;
    margin-bottom: 8px;
    color: #555555;
}

/* Image au-dessus du texte dans le bloc Sidebar */
.col-sidebar-info .main-story .responsive-picture {
    display: block;
    width: 100%;
    margin-bottom: 25px;
    max-height: 380px;
    overflow: hidden;
    border-radius: 4px;
}

.col-sidebar-info .main-story .img-standard {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

/* Adaptation sur mobile */
@media (max-width: 768px) {
    .pixel-maker-container {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 15px;
    }

    .col-asymmetric,
    .col-offset-duo,
    .col-sidebar-info {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .col-asymmetric .img-standard,
    .col-offset-duo .col-left .img-standard {
        min-height: 250px;
    }

    .col-offset-duo .col-right {
        padding-top: 0;
    }
}

/* ==========================================================================
   BLOC TESTIMONIAL & VERBATIM
   ========================================================================== */
.testimonial-block {
    background: #fdfdfd;
    border-top: 1px solid #eeeeee;
    border-bottom: 1px solid #eeeeee;
    padding: 60px 0;
    margin: 40px 0;
}

.testimonial-container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    padding: 0 20px;
}

.quote-mark {
    font-size: 4rem;
    color: var(--accent-color, #e63946);
    line-height: 1;
    font-family: serif;
    display: block;
    margin-bottom: -10px;
}

.testimonial-text {
    font-size: 1.4rem;
    line-height: 1.6;
    color: #1a1a1a;
    font-style: italic;
    font-weight: 500;
    margin-bottom: 25px;
}

.testimonial-author {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.author-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

.author-info {
    text-align: left;
}

.author-name {
    display: block;
    font-weight: 700;
    color: var(--primary-color, #000);
    font-size: 1.1rem;
}

.author-role {
    display: block;
    font-size: 0.85rem;
    color: #666666;
    margin-top: 2px;
}

@media (max-width: 768px) {
    .testimonial-text {
        font-size: 1.15rem;
    }
}
</style>

<section class="hero">
    <div class="hero-inner">
        <h1>Pixel Art</h1>
        <p>L'esthétique de la contrainte : de la nostalgie 8-bit aux créations numériques modernes.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Art Digital</span>
                <h2>01 - L'Art du Pixel & Générateur Interactif</h2>
                <p class="desc-text">Découvrez notre carnet créatif et explorez le potentiel des grilles numériques.</p>
            </div>
        </div>
    </section>

    <section class="testimonial-block reveal">
        <div class="testimonial-container">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote class="testimonial-text">
                « Le pixel art n'est pas une simple imitation du passé. C'est l'art d'utiliser la contrainte pour forcer l'imagination à remplir les détails invisibles. »
            </blockquote>
            <div class="testimonial-author">
                <img src="images/photo-320x240.png" alt="Portrait de Julie" class="author-img" loading="lazy">
                <div class="author-info">
                    <span class="author-name">Julie Marchand</span>
                    <span class="author-role">Participante au Workshop Design Rétro</span>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-pixel-maker">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>Outil Créatif : Pixel Art Maker (16x16)</h3>
                        <p style="margin-bottom: 30px;">Choisissez une couleur dans la palette ou optez pour une teinte sur mesure, puis dessinez dans la grille ci-dessous pour créer votre sprite.</p>

                        <div class="pixel-maker-container">
                            <div class="pixel-grid-wrapper">
                                <div id="pixelGrid">
                                    </div>
                            </div>

                            <div class="pixel-maker-ui">
                                <div>
                                    <h4 style="margin-top:0; margin-bottom:15px;">Palette Classique</h4>
                                    <div class="color-palette">
                                        <div class="palette-color active" style="background: #000000;" data-color="#000000"></div>
                                        <div class="palette-color" style="background: #ffffff;" data-color="#ffffff"></div>
                                        <div class="palette-color" style="background: #e63946;" data-color="#e63946"></div>
                                        <div class="palette-color" style="background: #2a9d8f;" data-color="#2a9d8f"></div>
                                        <div class="palette-color" style="background: #e9c46a;" data-color="#e9c46a"></div>
                                        <div class="palette-color" style="background: #f4a261;" data-color="#f4a261"></div>
                                        <div class="palette-color" style="background: #e76f51;" data-color="#e76f51"></div>
                                        <div class="palette-color" style="background: #264653;" data-color="#264653"></div>
                                    </div>
                                </div>

                                <div class="custom-picker-wrapper">
                                    <input type="color" id="customColor" value="#457b9d">
                                    <div>
                                        <h5 style="margin:0; font-size:1rem;">Couleur personnalisée</h5>
                                        <small style="color:#64748b;">Sélectionnez une teinte sur mesure</small>
                                    </div>
                                </div>

                                <div class="pixel-actions">
                                    <button id="clearGrid" class="action-btn btn-clear">Effacer</button>
                                    <button id="fillGrid" class="action-btn btn-fill">Remplir</button>
                                    <button id="exportGrid" class="action-btn btn-export">Exporter PNG</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-01a">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01A. Structure Simple (1 Colonne avec Images)</h3>

                        <div class="col-container col-asymmetric">
                            <div class="text-col-content">
                                <h4>Axe Principal : La contrainte créative</h4>
                                <p>Dans l'univers du pixel art, chaque point de couleur compte. La résolution limitée oblige l'artiste à faire des choix drastiques pour évoquer une émotion ou une action. Cette économie de moyens visuels crée une esthétique intemporelle et lisible instantanément.</p>
                                <div style="text-align: left; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Explorer la série</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <picture class="responsive-picture">
                                    <source srcset="images/sacre-coeur-01.webp" media="(max-width: 768px)">
                                    <img src="images/sacre-coeur-01.webp" class="img-standard" alt="Illustration pixel art de paysage" loading="lazy">
                                </picture>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-offset">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-offset-duo">
                            <div class="text-col-content col-left">
                                <picture class="responsive-picture">
                                    <source srcset="images/marches.jpg" media="(max-width: 768px)">
                                    <img src="images/marches.jpg" class="img-standard" alt="Détail de sprite 16-bit" loading="lazy">
                                </picture>
                            </div>
                            <div class="text-col-content col-right">
                                <h4>L'anatomie d'un sprite</h4>
                                <p>Donner vie à un personnage sur une grille de 32x32 pixels demande une maîtrise de l'anticipation et de la lisibilité du mouvement. Le placement précis des ombres et des lumières permet de détacher le sujet de l'arrière-plan sans surcharger l'image.</p>
                                <picture class="responsive-picture">
                                    <source srcset="images/vue-sur-les-toits-de-paris-zigzag.webp" media="(max-width: 768px)">
                                    <img src="images/vue-sur-les-toits-de-paris-zigzag.webp" class="img-standard" alt="Texture pixel art" loading="lazy">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-sidebar-text">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-sidebar-info">
                            <div class="text-col-content main-story">
                                <h4>La gestion des palettes de couleurs</h4>
                                <p>Historiquement dictée par le matériel des anciennes consoles, la limitation des couleurs est aujourd'hui un choix artistique fort. Elle force une harmonie visuelle stricte et une cohérence chromatique qui rend le travail unique et facilement identifiable.</p>
                                <p>En jouant sur le contraste des teintes et sur la technique du dithering (tramage), on parvient à simuler des nuances et des dégradés subtils pourtant absents de la palette d'origine.</p>
                            </div>
                            <div class="text-col-content sidebar-notes">
                                <div class="notes-box">
                                    <h5>Spécifications</h5>
                                    <ul>
                                        <li><strong>Palette :</strong> 16 couleurs max</li>
                                        <li><strong>Style :</strong> Isometric / RPG</li>
                                        <li><strong>Contrainte :</strong> Pas de flou</li>
                                        <li><strong>Format :</strong> PNG brut</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-sidebar-img">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-sidebar-info">
                            <div class="text-col-content main-story">
                                <picture class="responsive-picture">
                                    <source srcset="images/couché-de-soleil.jpg" media="(max-width: 768px)">
                                    <img src="images/couché-de-soleil.jpg" class="img-standard" alt="Lever de soleil sur la Place du Tertre" loading="lazy">
                                </picture>
                                <h4>La lumière au pixel près</h4>
                                <p>Contrairement aux techniques classiques de dessin numérique, l'absence d'outils de dégradés automatiques nécessite de poser chaque couleur manuellement pour composer le volume.</p>
                                <p>Cette approche chirurgicale du rendu de la lumière exige une excellente compréhension des volumes avant de commencer à poser les premiers points de couleur sur la grille.</p>
                            </div>
                            <div class="text-col-content sidebar-notes">
                                <div class="notes-box">
                                    <h5>Spécifications</h5>
                                    <ul>
                                        <li><strong>Résolution :</strong> 64x64px</li>
                                        <li><strong>Technique :</strong> Hand-pixeled</li>
                                        <li><strong>Export :</strong> Upscale x4</li>
                                        <li><strong>Moteur :</strong> Rendu 2D</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-duo-base">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>La géométrie des pixels</h4>
                                <p>Travailler en pixel art demande de la rigueur mathématique. Les courbes doivent suivre des ratios précis (par exemple, 1 pixel de décalage pour 2 de longueur) pour éviter l'effet d'escalier parasite.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les angles</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Lumière et contrastes</h4>
                                <p>Les ombres projetées doivent être franches et délimitées. C'est ce traitement graphique net qui confère aux créations 8-bit et 16-bit leur cachet si reconnaissable et marquant.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Découvrir l'expo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-trio-base">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Décors urbains</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/Montmartre-place-du-tertre.jpg" media="(max-width: 768px)">
                                    <img src="images/Montmartre-place-du-tertre.jpg" class="img-standard" alt="Décors isométriques" loading="lazy">
                                </picture>
                                <p>La vue isométrique en pixel art est parfaite pour modéliser des rues animées ou des quartiers historiques avec une précision digne des jeux de gestion cultes.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Visiter la place</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Sprites d'objets</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/rue-de-l-abreuvoir-montmartre-paris-18-0.JPG" media="(max-width: 768px)">
                                    <img src="images/rue-de-l-abreuvoir-montmartre-paris-18-0.JPG" class="img-standard" alt="Planches d'items rétro" loading="lazy">
                                </picture>
                                <p>Les petits items (clés, potions, armes) en 16x16 pixels demandent d'aller à l'essentiel pour rendre l'objet identifiable au premier coup d'œil par le joueur.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Parcourir les rues</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Vieux ateliers d'époque</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/marches.jpg" media="(max-width: 768px)">
                                    <img src="images/marches.jpg" class="img-standard" alt="Dessin technique" loading="lazy">
                                </picture>
                                <p>Reconstituer des environnements d'époque en pixel art permet de marier l'histoire artistique classique avec les outils numériques modernes.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Monter les marches</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-4col-base">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Les paysages</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/vignes-montmartre.jpg" media="(max-width: 768px)">
                                    <img src="images/vignes-montmartre.jpg" class="img-standard" alt="Arrière-plans 2D" loading="lazy">
                                </picture>
                                <p>Le travail sur les plans successifs pour créer une illusion de profondeur dans les jeux en scrolling horizontal.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Design d'items</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/lapin-agile-âne-montmartre-paris-zigzag.webp" media="(max-width: 768px)">
                                    <img src="images/lapin-agile-âne-montmartre-paris-zigzag.webp" class="img-standard" alt="Icons vintage" loading="lazy">
                                </picture>
                                <p>Petites interfaces de jeu et icônes d'inventaire optimisées pour l'affichage en résolution native.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Personnages</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/maison-rose.jpg" media="(max-width: 768px)">
                                    <img src="images/maison-rose.jpg" class="img-standard" alt="Concept-art 8-bit" loading="lazy">
                                </picture>
                                <p>Planches d'animations pour les mouvements de marche, de saut et d'attaque de héros de jeux vidéo.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Fonds de décors</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/vue-panoramique-paris.jpg" media="(max-width: 768px)">
                                    <img src="images/vue-panoramique-paris.jpg" class="img-standard" alt="Grandes fresques" loading="lazy">
                                </picture>
                                <p>Des panoramas immersifs créés pour servir de décors d'arrière-plan dans des cinématiques rétro.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-duo-img">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01B. Structure Duo (2 Colonnes avec Images)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal : Le village des artistes</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/place-du-tertre.jpg" media="(max-width: 768px)">
                                    <img src="images/place-du-tertre.jpg" class="img-standard" alt="Scène artistique pixel" loading="lazy">
                                </picture>
                                <p>Une réinterprétation numérique de scènes de vie urbaines. Chaque passant est un petit sprite animé, s'intégrant dans un décor minutieusement tracé à la main.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Explorer la place</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : Les détails techniques</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/Détail_façade_sud_Basilique_Sacré_Cœur_Montmartre_Paris_2.jpg" media="(max-width: 768px)">
                                    <img src="images/Détail_façade_sud_Basilique_Sacré_Cœur_Montmartre_Paris_2.jpg" class="img-standard" alt="Gros plan sur les pixels" loading="lazy">
                                </picture>
                                <p>L'observation attentive des courbes révèle le soin apporté à chaque point. La juxtaposition des couleurs pures crée l'effet d'optique désiré.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les détails</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-duo-text">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01C. Structure Duo (2 Colonnes)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal : L'histoire des formats</h4>
                                <p>L'évolution des contraintes du pixel art suit de près les avancées matérielles des microprocesseurs. Des 4 couleurs d'origine de la Game Boy aux 256 nuances éclatantes de l'ère 16-bit, chaque époque a développé son propre style graphique emblématique.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la nuit</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : Les outils de création</h4>
                                <p>Logiciels spécialisés comme Aseprite ou éditeurs en ligne permettent de concevoir des planches de sprites optimisées. Le pixel art contemporain intègre des techniques de calques et d'animations fluides tout en conservant son esprit d'origine.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Étudier le relief</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-duo-float">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01D. Structure Duo (2 Colonnes + float-left)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Float left</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture img-float-left">
                                        <source srcset="images/pexels-atssar-khawaja-930304-14555865.jpg" media="(max-width: 768px)">
                                        <img src="images/pexels-atssar-khawaja-930304-14555865.jpg" alt="Personnage de RPG rétro" loading="lazy">
                                    </picture>
                                    <p>Les compositions en vue de dessus, signatures des grands jeux d'aventure des années 90, permettent d'équilibrer l'espace. Le personnage se détache nettement grâce à un contour noir précis d'un pixel d'épaisseur.</p>
                                </div>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Zoomer sur l'image</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Float right</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture img-float-right">
                                        <source srcset="images/pexels-antonio-miralles-andorra-475029787-32558709.jpg" media="(max-width: 768px)">
                                        <img src="images/pexels-antonio-miralles-andorra-475029787-32558709.jpg" alt="Décors miniaturisés" loading="lazy">
                                    </picture>
                                    <p>Le traitement des ombres et des lumières dans des décors miniatures demande de faire l'économie de la rondeur pour travailler uniquement par aplats géométriques francs de pixels.</p>
                                </div>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Zoomer sur l'image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-trio-img">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="section-titles reveal">
                    <h2>02. Tests de structures complexes (3 et 4 colonnes)</h2>
                    <p class="desc-text">Analyse de la flexibilité et de l'empilement sur des grilles denses.</p>
                </div>

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02A. Structure Trio (3 Colonnes avec Images)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Axe Principal : Les décors</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de niveaux 2D" loading="lazy">
                                </picture>
                                <p>Un travail sur la répétition de motifs carrés (les tilesets) pour construire des mondes cohérents et légers pour l'affichage.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la série</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Les couleurs</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Palette chromatique" loading="lazy">
                                </picture>
                                <p>Le choix des couleurs définit l'identité d'un jeu vidéo ou d'une œuvre. La maîtrise du contraste est primordiale.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les textures</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : L'animation</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Sprite sheet animée" loading="lazy">
                                </picture>
                                <p>Chaque frame d'une animation est redessinée pixel par pixel pour obtenir un mouvement fluide et percutant en jeu.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Observer le flux</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-trio-text">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02B. Structure Trio (3 Colonnes)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Axe Principal : L'héritage arcade</h4>
                                <p>Les contraintes techniques de l'époque ont donné naissance à des styles inoubliables. L'arcade a forgé un standard de lisibilité immédiate toujours copié par le game design actuel.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Découvrir l'expo</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Le tourisme local</h4>
                                <p>Malgré l'affluence, il est possible de capter des moments de calme au détour d'une ruelle ou tôt le matin, révélant le vrai visage de la Butte.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les horaires</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : L'héritage historique</h4>
                                <p>Chaque coin de rue à Montmartre a une histoire à raconter, de la Commune de Paris aux ateliers fréquentés par Picasso et Van Gogh.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Lire la suite</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-4col-img">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03A. Grille de Précision (4 Colonnes + images)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Axe Principal : Toits</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Vue sur les toits parisiens" loading="lazy">
                                </picture>
                                <p>Modélisation de structures géométriques répétitives en milieu urbain pixelisé.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Façades</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Façades en pixel art" loading="lazy">
                                </picture>
                                <p>Richesse des textures et des couleurs rétro sur les fenêtres et balcons.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Ateliers</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Intérieurs de jeux" loading="lazy">
                                </picture>
                                <p>Le travail du détail en 16-bit pour meubler des décors d'intérieurs habités.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Cafés</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Devantures 8-bit" loading="lazy">
                                </picture>
                                <p>Création d'enseignes colorées et minimalistes rappelant les rues animées.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-4col-text">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03B. Grille de Précision (4 Colonnes)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Axe Principal : Résolution</h4>
                                <p>Travailler en 32x32 pixels reste l'échelle idéale pour concevoir des icônes d'objets bien lisibles.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Contrainte</h4>
                                <p>Chaque ligne tracée doit être épurée à l'extrême pour éviter les doublons parasites gênant la lecture.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Outils</h4>
                                <p>L'utilisation d'éditeurs spécialisés permet de créer en direct des planches de sprites prêtes à l'export.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Format</h4>
                                <p>Le PNG brut garantit qu'aucun artefact de compression ne viendra flouter la netteté chirurgicale du rendu.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('pixelGrid');
    const customColorInput = document.getElementById('customColor');
    const clearBtn = document.getElementById('clearGrid');
    const fillBtn = document.getElementById('fillGrid');
    const exportBtn = document.getElementById('exportGrid');
    const colorPalette = document.querySelector('.color-palette');
    
    let activeColor = '#000000';
    let isDrawing = false;

    // Création de la grille 16x16
    for (let i = 0; i < 256; i++) {
        const cell = document.createElement('div');
        cell.classList.add('pixel-cell');
        
        // Clic pour colorer
        cell.addEventListener('mousedown', () => {
            isDrawing = true;
            cell.style.backgroundColor = activeColor;
        });

        // Dessin continu au survol si clic enfoncé
        cell.addEventListener('mouseenter', () => {
            if (isDrawing) {
                cell.style.backgroundColor = activeColor;
            }
        });

        grid.appendChild(cell);
    }

    // Gestion du clic relâché sur toute la page
    window.addEventListener('mouseup', () => {
        isDrawing = false;
    });

    // Sélection des couleurs dans la palette
    colorPalette.addEventListener('click', (e) => {
        if (e.target.classList.contains('palette-color')) {
            document.querySelectorAll('.palette-color').forEach(p => p.classList.remove('active'));
            e.target.classList.add('active');
            activeColor = e.target.getAttribute('data-color');
            customColorInput.value = activeColor;
        }
    });

    // Écoute de la couleur personnalisée
    customColorInput.addEventListener('input', (e) => {
        document.querySelectorAll('.palette-color').forEach(p => p.classList.remove('active'));
        activeColor = e.target.value;
    });

    // Vider la grille
    clearBtn.addEventListener('click', () => {
        document.querySelectorAll('.pixel-cell').forEach(cell => {
            cell.style.backgroundColor = '#ffffff';
        });
    });

    // Remplir la grille
    fillBtn.addEventListener('click', () => {
        document.querySelectorAll('.pixel-cell').forEach(cell => {
            cell.style.backgroundColor = activeColor;
        });
    });

    // Exporter la grille en PNG
    exportBtn.addEventListener('click', () => {
        const cells = document.querySelectorAll('.pixel-cell');
        
        // On crée un canvas à la volée
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        
        // 16x16 pixels physiques mis à l'échelle x20 pour l'export (320x320px)
        const scale = 20;
        canvas.width = 16 * scale;
        canvas.height = 16 * scale;

        cells.forEach((cell, index) => {
            const x = (index % 16) * scale;
            const y = Math.floor(index / 16) * scale;
            
            // On récupère la couleur de fond calculée par le navigateur
            ctx.fillStyle = cell.style.backgroundColor || '#ffffff';
            ctx.fillRect(x, y, scale, scale);
        });

        // Téléchargement du PNG
        const link = document.createElement('a');
        link.download = 'pixel-art.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    });
});
</script>

<?php include 'includes/footer.html'; ?>