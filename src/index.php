<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero-inner">
        <h1>L'Art du Pixel & du Regard</h1>
        <p>Photographie professionnelle et création digitale sur mesure.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area" id="content">
    <section class="section-titles">
        <h2>Bienvenue chez Christophe MILLOT</h2>
    </section>

    <div class="paragraphe">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>

    <div class="grid-system">
        
        <div class="row-2">
            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Shooting Photo</h3>
                <p>Portraits et reportages de haute précision.</p>
                <a href="photographie.php">Voir la galerie</a>
            </div>
            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Création Digitale" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Création Digitale</h3>
                <p>Du Pixel Art aux illustrations vectorielles.</p>
                <a href="photographie.php">Voir la galerie</a>
            </div>
        </div>

        <div class="row-4">
            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Shooting Photo</h3>
                <p>Portraits et reportages.</p>
                <a href="photographie.php">Voir plus</a>
            </div>

            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Création Digitale" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Création Digitale</h3>
                <p>Art et Pixels.</p>
                <a href="photographie.php">Voir la galerie</a>
            </div>

            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Shooting Photo" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Shooting Photo</h3>
                <p>Reportages.</p>
                <a href="photographie.php">Voir la galerie</a>
            </div>

            <div class="box">
                <div class="grid-vignette">
                    <picture>
                        <source media="(max-width: 768px)" srcset="images/photo-640x480.png">
                        <source media="(min-width: 769px)" srcset="images/photo-320x240.png">
                        <img src="images/photo-320x240.png" alt="Création Digitale" style="width: 100%; display: block;">
                    </picture>
                </div>
                <h3>Création Digitale</h3>
                <p>Vecteurs.</p>
                <a href="photographie.php">Voir la galerie</a>
            </div>
        </div>

    </div>
</main>

<?php include 'includes/footer.html'; ?>
<script src="js/main.js"></script>
</body>
</html>