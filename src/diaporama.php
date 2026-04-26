<?php include 'includes/header.php'; ?>

<script>document.body.classList.add('is-slider');</script>

<section class="hero" id="hero-screen">
    <div class="hero-inner">
        <h1>L'Art du Pixel & du Regard</h1>
        <p>Photographie professionnelle et création digitale sur mesure.</p>
    </div>
    <a href="javascript:void(0)" class="hero-chevron" onclick="document.getElementById('hero-screen').classList.add('hero-up')">︾</a>
</section>

<div class="slider-container">
    <div class="slider-wrapper" id="slider">

        <section class="slide titles-slide" id="slide-titles">
            <div class="section-titles">
                <!--<span class="category-badge">Template Master</span>-->
                <h1 class="desc-text">Diaporama</h1>
                <!--<p class="desc-text">Centralisation de tous les modèles de mise en page prédéfinis.</p>-->
            </div>
        </section>

        <section class="slide">
            <img src="images/slide01-640x480.png" alt="Slide 01"><br>
            <p>Slide 01 Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, laboriosam accusantium beatae, consequuntur iste ducimus iure harum voluptate itaque placeat reiciendis suscipit! Alias veniam vitae, suscipit consequatur maiores tenetur rem?</p>
        </section>

        <section class="slide">
            <img src="images/slide02-640x480.png" alt="Slide 02">
        </section>

        <section class="slide">
            <img src="images/slide02-640x480-1.png" alt="Slide 03">
        </section>

    </div>

    <button class="slider-btn prev" id="prevBtn" aria-label="Précédent">❮</button>
    <button class="slider-btn next" id="nextBtn" aria-label="Suivant">❯</button>
</div>

<script src="js/slider.js"></script>

<?php include 'includes/footer.html'; ?>