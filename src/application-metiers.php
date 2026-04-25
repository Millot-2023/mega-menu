<?php include 'includes/header.php'; ?>

<main class="content-area" id="content">
    <section class="section-titles">
        <span class="category-badge">UX-UI Design & Print</span>
        <h1>Écosystème Métiers</h1>
        <p class="desc-text">De la conception de l'identité visuelle à la réalisation des supports opérationnels.</p>
    </section>

    <section class="grid-system">
        
        <div class="row-1">
            <div class="box">
                <div class="grid-vignette">
                    <img src="images/photo-640x480.png" alt="Focus Projet" style="width: 100%; display: block;">
                </div>
                <h3>La Trousse UX-UI Designer</h3>
                <p>Analyse des besoins et prototypage d'une solution complète pour professionnels.</p>
            </div>
        </div>

        <div class="row-2">
            <div class="box">
                <div class="grid-vignette">
                    <img src="images/photo-320x240.png" alt="Prospectus Print" style="width: 100%; display: block;">
                </div>
                <h3>Édition Automobile</h3>
                <p>Conception de prospectus A5 pour Toyota et Renault.</p>
            </div>
            <div class="box">
                <div class="grid-vignette">
                    <img src="images/photo-320x240.png" alt="Impression Numérique" style="width: 100%; display: block;">
                </div>
                <h3>Impression & Broderie</h3>
                <p>Passage du vecteur au fil : processus de création textile.</p>
            </div>
        </div>

        <div class="row-4">
            <?php for($i=1; $i<=4; $i++): ?>
            <div class="box">
                <div class="grid-vignette">
                    <img src="images/photo-320x240.png" alt="Détail technique" style="width: 100%; display: block;">
                </div>
                <h3>Détail #<?php echo $i; ?></h3>
                <p>Composants graphiques.</p>
            </div>
            <?php endfor; ?>
        </div>

    </section>
</main>

<?php include 'includes/footer.html'; ?>