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
                        <h3>01. Structure Duo (2 Colonnes)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal</h4>
                                <p>Ce bloc permet d'évaluer la répartition équilibrée du texte sur deux axes verticaux. La gestion du Flexbox doit garantir que les colonnes conservent une hauteur cohérente, même si le volume de caractères diffère. L'objectif est de s'assurer qu'aucun décalage visuel ne vient briser la ligne de lecture, tout en conservant une gouttière nette entre les deux sections de texte pour une lisibilité optimale sur les écrans larges.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Équilibre Structurel</h4>
                                <p>L'espace est généreux, permettant une aération qui valorise le contenu textuel sans l'étouffer. En mode responsive, ce bloc doit basculer de manière fluide vers un empilement vertical. Ce test permet de confirmer que les instructions de suppression de padding et de marge ne perturbent pas la hiérarchie visuelle lors du passage sur mobile, où chaque colonne reprendra alors 100% de la largeur disponible de l'écran.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block reveal light-theme">
                    <div class="card-info">
                        <h3>02. L'intégration à Gauche</h3>
                        <div class="float-box">
                            <img src="images/photo-320x240.png" class="img-float-left" alt="Exemple Gauche">
                            <p><strong>Test de flux complexe :</strong> L'image est contrainte à une largeur fixe de 250px via le CSS unitaire. Le texte doit ici démontrer sa capacité à s'enrouler avec précision sur le flanc droit de l'image. Ce comportement est crucial pour les articles de blog ou les fiches techniques où l'iconographie doit cohabiter avec des explications détaillées sans créer de larges zones de vide inesthétiques.</p>
                            <p>Lorsque le texte dépasse la hauteur physique de l'image (240px), il doit automatiquement reprendre toute la largeur du conteneur sans aucun décalage de marge à gauche. C'est le point de contrôle final pour valider que l'héritage du rail de la timeline a été totalement neutralisé. Si un espace blanc persiste à gauche sous l'image, c'est qu'un résidu de structure latérale parasite encore le template.</p>
                        </div>
                    </div>
                </div>

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03. Architecture Trio (3 Colonnes)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Fondations</h4>
                                <p>La première colonne pose les bases techniques nécessaires à la compréhension globale du projet. Elle doit rester lisible malgré la réduction de sa largeur utile par rapport au format duo.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Logique</h4>
                                <p>Le pivot central de l'argumentation. Cette zone reçoit généralement le cœur des informations. Le test ici porte sur la gestion des césures et de l'espacement inter-colonnes pour éviter les collisions.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Finalité</h4>
                                <p>La conclusion du bloc. Elle synthétise les points abordés et prépare l'utilisateur à passer à la section suivante avec un alignement vertical rigoureux sur les titres supérieurs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block reveal light-theme">
                    <div class="card-info">
                        <h3>04. Grille de Précision (4 Colonnes)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Interface</h4>
                                <p>Analyse des composants graphiques et de l'ergonomie utilisateur pour une navigation intuitive et fluide au quotidien.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Performance</h4>
                                <p>Optimisation des temps de chargement et de la réactivité du serveur pour garantir une expérience sans aucune latence.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Sécurité</h4>
                                <p>Protection des données et protocoles de cryptage avancés pour assurer l'intégrité de toutes les transactions sensibles.</p>
                            </div>
                            <div class="text-col-content">
                                <h4>Scalabilité</h4>
                                <p>Capacité du système à évoluer et à supporter une charge croissante d'utilisateurs sans dégradation de service.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>05. Contrepoint à Droite</h3>
                        <div class="float-box">
                            <img src="images/photo-320x240.png" class="img-float-right" alt="Exemple Droite">
                            <p>L'inversion du flux visuel est une technique éditoriale puissante. En plaçant l'image à droite, on force l'œil à balayer l'intégralité du texte avant d'atteindre le visuel. Ce bloc teste si la propriété float-right gère correctement les marges internes (margin-left) pour éviter que les caractères ne touchent le bord de l'image. Comme pour le bloc précédent, une fois la hauteur de l'image franchie, le texte doit occuper 100% de l'espace disponible vers la droite de manière parfaitement rectiligne.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="landing-band bg-black">
        <div class="band-container">
            <div class="section-titles reveal">
                <h2>Audit Terminé</h2>
                <div class="btn-container">
                    <a href="#" class="btn-main">Retour au sommet</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.html'; ?>