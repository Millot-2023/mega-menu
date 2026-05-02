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
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02A. Structure Duo (2 Colonnes avec Images)</h3>

                        <div class="col-container col-2">

                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02B. Structure Duo (2 Colonnes)</h3>

                        <div class="col-container col-2">

                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02B. Structure Duo (2 Colonnes + float-left)</h3>

                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Float left</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture">
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" class="img-float-left" alt="Illustration" loading="lazy">
                                    </picture>
                                    <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente. Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                </div>

                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Foalt rightl</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture">
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" class="img-float-right" alt="Illustration" loading="lazy">
                                    </picture>
                                    <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente. Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                </div>

                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <hr class="section-sep">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03A. Structure Trio (3 Colonnes avec Images)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux...</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03B. Structure Trio (3 Colonnes)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="section-sep">
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>04. Grille de Précision (4 Colonnes + images)</h3>

                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Illustration de test" loading="lazy">
                                </picture>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>04. Grille de Précision (4 Colonnes)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Bouton simple</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.html'; ?>