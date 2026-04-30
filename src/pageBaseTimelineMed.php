<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero-inner">
        <h1>Validation des Flux Intégraux</h1>
        <p>Audit responsive : 2, 3 et 4 colonnes avec gestion des Floats.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Audit de Structure</span>
                <h2>Matière de test exhaustive</h2>
                <p class="desc-text">Vérification de l'empilement et de la fluidité des colonnes sur une grille sans marges parasites.</p>
            </div>
        </div>
    </section>

    <section class="landing-band">
        <div class="band-container">
            <div class="content-wrapper">

                <!-- BLOC 01 : STRUCTURE DUO -->
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01. Structure Duo (2 Colonnes)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Équilibre Structurel</h4>
                                <p>L'espace est généreux, permettant une aération qui valorise le contenu textuel sans l'étouffer.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep">

                <!-- BLOC 02 : INTÉGRATION GAUCHE -->
                <div class="content-block reveal light-theme">
                    <div class="card-info">
                        <h3>02. L'intégration à Gauche</h3>
                        <div class="float-box">
                            <picture>
                                <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                <img src="images/photo-320x240.png" class="img-float-left" alt="Illustration de test" loading="lazy">
                            </picture>
                            <p><strong>Test de flux complexe :</strong> L'image est contrainte à une largeur fixe sur bureau, mais s'étend en plein écran sur mobile.</p>
                            <p>Le texte doit reprendre toute la largeur une fois l'image dépassée.</p>
                            <div style="text-align: center; margin-top: 20px;">
                                <button class="simpleButton">Bouton simple</button>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep">

                <!-- BLOC 03 : ARCHITECTURE TRIO -->
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03. Architecture Trio (3 Colonnes)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Fondations</h4>
                                <p>La première colonne pose les bases techniques nécessaires.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Logique</h4>
                                <p>Le pivot central de l'argumentation. Test de gestion des césures.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Finalité</h4>
                                <p>Synthèse des points abordés et préparation à la suite.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep">

                <!-- BLOC 04 : GRILLE DE PRÉCISION -->
                <div class="content-block reveal light-theme">
                    <div class="card-info">
                        <h3>04. Grille de Précision (4 Colonnes)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Interface</h4>
                                <p>Analyse des composants graphiques.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Performance</h4>
                                <p>Optimisation des temps de chargement.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Sécurité</h4>
                                <p>Protection des données sensibles.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Scalabilité</h4>
                                <p>Capacité à supporter la charge.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep">

                <!-- BLOC 05 : CONTREPOINT DROITE -->
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>05. Contrepoint à Droite</h3>
                        <div class="float-box">
                            <picture>
                                <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                <img src="images/photo-320x240.png" class="img-float-right" alt="Illustration de test" loading="lazy">
                            </picture>
                            <p>L'inversion du flux visuel teste la propriété float-right et les marges internes pour éviter que le texte ne touche l'image.</p>
                            <div style="text-align: center; margin-top: 20px;">
                                <button class="simpleButton">Bouton simple</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-sep">

</main>

<?php include 'includes/footer.html'; ?>