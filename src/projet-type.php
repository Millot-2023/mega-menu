<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>Nom du Projet Sélectionné</h1>
        <p>Structure de contenu en grille responsive 4-2-1.</p>
    </div>
</section>

<div class="base-template-page">
    <main class="content-area" id="content">
        
        <section class="section-titles">
            <span class="category-badge">Catégorie Projet</span>
            <h2>Détails du projet</h2>
            <p class="desc-text">Exploration visuelle et technique.</p>
        </section>

        <section class="grid-system">
            <div class="row-1">
                <div class="box">
                    <div class="grid-vignette">
                        <img src="images/photo-640x480.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </div>
                    <h3>Création Digitale Vedette</h3>
                    <p>Art et Pixels.</p>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
            </div>

            <div class="row-2 col-container">
                <div class="box">
                    <div class="grid-vignette">
                        <picture>
                            <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                            <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                            <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                        </picture>
                    </div>
                    <h3>Création Digitale</h3>
                    <p>Art et Pixels.</p>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
                <div class="box">
                    <div class="grid-vignette">
                        <picture>
                            <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                            <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                            <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                        </picture>
                    </div>
                    <h3>Création Digitale</h3>
                    <p>Art et Pixels.</p>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
            </div>

            <div class="row-4 col-container">
                <div class="box">
                    <div class="grid-vignette">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </div>
                    <h3>Création Digitale</h3>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
                <div class="box">
                    <div class="grid-vignette">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </div>
                    <h3>Création Digitale</h3>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
                <div class="box">
                    <div class="grid-vignette">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </div>
                    <h3>Création Digitale</h3>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
                <div class="box">
                    <div class="grid-vignette">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </div>
                    <h3>Création Digitale</h3>
                    <div class="btn-container">
                        <a href="projet-type.php" class="btn-main">Voir la galerie</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div> <?php include 'includes/footer.html'; ?>