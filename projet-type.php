<?php include 'header.php'; ?>

<main class="content-area" style="padding-top: 120px;">
    <section class="section-titles">
        <span style="color: var(--accent-color); font-weight: bold; text-transform: uppercase; font-size: 0.8rem;">Catégorie Projet</span>
        <h1>Nom du Projet Sélectionné</h1>
        <p>Ceci est une page template. Elle permet de visualiser la structure de contenu pour n'importe quel lien du menu.</p>
    </section>

    <section class="grid-system">
        <div class="row-1">
            <div class="box" style="height: 300px; background: #eee; display: flex; align-items: center; justify-content: center;">
                [ GRANDE IMAGE DE PRÉSENTATION ]
            </div>
        </div>

        <div class="row-2">
            <div class="box">
                <h4>Le Brief</h4>
                <p style="text-align: left; font-size: 0.9rem; color: #666;">
                    Description détaillée du besoin client. Ce bloc permet de tester le rendu du texte sur deux colonnes responsives.
                </p>
            </div>
            <div class="box">
                <h4>La Solution</h4>
                <p style="text-align: left; font-size: 0.9rem; color: #666;">
                    Explication technique et créative de la réponse apportée par Perles & Pixels.
                </p>
            </div>
        </div>

        <div class="row-3">
            <div class="box"><div class="featured-image"></div><p>Détail A</p></div>
            <div class="box"><div class="featured-image"></div><p>Détail B</p></div>
            <div class="box"><div class="featured-image"></div><p>Détail C</p></div>
        </div>
    </section>
</main>

<?php include 'footer.html'; ?>
<script src="js/main.js"></script>
</body>
</html>