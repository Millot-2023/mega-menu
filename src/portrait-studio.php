<?php include 'includes/header.php'; ?>

<main class="content-area" id="content">
    <section class="section-titles">
        <span class="category-badge">Photographie</span>
        <h1>Portrait Studio</h1>
        <p class="desc-text">Structure de contenu en grille responsive 4-2-1.</p>
    </section>

    <section class="grid-system">
        <div class="row-1">
            <div class="box">
                <div class="grid-vignette">
                    <img src="images/photo-640x480.png" alt="Portrait Studio Vedette" style="width: 100%; display: block;">
                </div>
                <h3>Séance Studio Premium</h3>
                <p>Éclairage maîtrisé et mise en scène professionnelle.</p>
                <a href="portrait-studio.php">Détails du shooting</a>
            </div>
        </div>

        <div class="row-2">
            <?php for($i=0; $i<2; $i++): ?>
            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Portrait" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Portfolio Portrait</h3>
                <p>Expression et caractère.</p>
                <a href="portrait-studio.php">Zoom</a>
            </div>
            <?php endfor; ?>
        </div>

        <div class="row-4">
            <?php for($i=0; $i<4; $i++): ?>
            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Portrait" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Variante Portrait</h3>
                <p>Série thématique.</p>
                <a href="portrait-studio.php">Découvrir</a>
            </div>
            <?php endfor; ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.html'; ?>