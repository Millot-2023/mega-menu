<?php include 'includes/header.php'; ?>

<style>
/* ==========================================================================
   STYLES SPÉCIFIQUES : ARCHITECTURE URBAINE
   ========================================================================== */

/* Grille Asymétrique 1/3 - 2/3 pour la section 01A */
.col-asymmetric {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
    align-items: stretch; /* Force les colonnes à avoir la même hauteur */
}

/* On s'assure que le conteneur de l'image prend toute la hauteur */
.col-asymmetric .text-col-content picture,
.col-asymmetric .text-col-content .responsive-picture,
.col-offset-duo .col-left picture,
.col-offset-duo .col-left .responsive-picture {
    display: block;
    width: 100%;
    height: 100%;
}

/* On force l'image à se comporter comme un background-image (cover) */
.col-asymmetric .img-standard,
.col-offset-duo .col-left .img-standard {
    width: 100%;
    height: 100%;
    min-height: 350px; /* Empêche l'image de devenir trop petite avant le breakpoint */
    object-fit: cover; /* Remplit l'espace sans déformer l'image */
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
    align-items: stretch; /* Les deux colonnes font la même hauteur */
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
    margin-bottom: 25px; /* Espace entre l'image et le titre */
    max-height: 380px;  /* Hauteur maximale pour ne pas écraser la fiche technique */
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
        <h1>Architecture & Perspectives</h1>
        <p>Série photographique : Montmartre, du Sacré-Cœur aux pavés de la Place du Tertre.</p>
    </div>
    <a href="#content" class="hero-chevron">︾</a>
</section>

<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Reportage Urbain</span>
                <h2>01 - Matière de test exhaustive</h2>
                <p class="desc-text">Vérification de l'empilement et de la fluidité des colonnes sur une grille sans marges parasites.</p>
            </div>
        </div>
    </section>

    <section class="testimonial-block reveal">
        <div class="testimonial-container">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote class="testimonial-text">
                « Photographier Montmartre avec Christophe a été une révélation. Il a l'art de vous faire voir la géométrie là où on ne voyait que des pavés, et de capturer cette lumière matinale unique qui donne l'impression d'être seul au monde. »
            </blockquote>
            <div class="testimonial-author">
                <img src="images/photo-320x240.png" alt="Portrait de Julie" class="author-img" loading="lazy">
                <div class="author-info">
                    <span class="author-name">Julie Marchand</span>
                    <span class="author-role">Participante au Workshop Photo d'Automne</span>
                </div>
            </div>
        </div>
    </section>











<main class="content-area base-template-page" id="content">

    <section class="header-block">
        <div class="band-container">
            <div class="section-titles reveal">
                <span class="category-badge">Reportage Urbain</span>
                <h2>01 - Matière de test exhaustive</h2>
                <p class="desc-text">Vérification de l'empilement et de la fluidité des colonnes sur une grille sans marges parasites.</p>
            </div>
        </div>
    </section>

    <section class="testimonial-block reveal">
        <div class="testimonial-container">
            <span class="quote-mark" aria-hidden="true">“</span>
            <blockquote class="testimonial-text">
                « Photographier Montmartre avec Christophe a été une révélation. Il a l'art de vous faire voir la géométrie là où on ne voyait que des pavés, et de capturer cette lumière matinale unique qui donne l'impression d'être seul au monde. »
            </blockquote>
            <div class="testimonial-author">
                <img src="images/photo-320x240.png" alt="Portrait de Julie" class="author-img" loading="lazy">
                <div class="author-info">
                    <span class="author-name">Julie Marchand</span>
                    <span class="author-role">Participante au Workshop Photo d'Automne</span>
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
                                <h4>Axe Principal : La Basilique du Sacré-Cœur</h4>
                                <p>Dominant Paris du haut de la Butte Montmartre, la basilique du Sacré-Cœur offre un sujet d'étude idéal pour la contre-plongée et l'analyse des perspectives. Sa pierre de Château-Landon, qui sécrète de la culatine au contact de la pluie, lui confère cette blancheur éternelle si particulière sous la lumière parisienne.</p>
                                <div style="text-align: left; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Explorer la série</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Dôme de la basilique du Sacré-Cœur" loading="lazy">
                                </picture>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing-band section-immersion">
        <div class="band-container">
            <div class="content-wrapper">
                <div class="content-block reveal">
                    <div class="card-info">
                        <div class="content-block-full">
                            <div class="full-image-wrapper">
                                <picture>
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-640x480.png" alt="Panorama sur les toits de Paris depuis le Sacré-Cœur" loading="lazy">
                                </picture>
                                <div class="full-image-caption">
                                    <span class="caption-tag">Panorama</span>
                                    <h4>Paris à perte de vue depuis le parvis de la Butte</h4>
                                </div>
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
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="L'escalier escarpé menant au sommet" loading="lazy">
                                </picture>
                            </div>
                            <div class="text-col-content col-right">
                                <h4>L'ascension de la Butte</h4>
                                <p>Les 222 marches qui mènent au sommet sont une véritable épreuve physique pour les visiteurs mais un régal visuel pour le photographe. Chaque palier dévoile une perspective changeante sur les façades parisiennes et les ferronneries des balcons.</p>
                                <picture class="responsive-picture secondary-img">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" alt="Détail graphique des marches en pierre" loading="lazy">
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
                                <h4>La lumière de l'aube sur la Place du Tertre</h4>
                                <p>Arriver à 6 heures du matin permet de capter la place vide de ses touristes, là où seuls les premiers peintres installent leurs chevalets. C'est un moment suspendu où la lumière rasante souligne le relief des pavés et l'alignement des arbres.</p>
                                <p>Ce calme matinal permet d'explorer la place sous un angle minimaliste, presque hors du temps, avant que l'agitation touristique ne transforme son architecture en arrière-plan flou.</p>
                            </div>
                            <div class="text-col-content sidebar-notes">
                                <div class="notes-box">
                                    <h5>Notes techniques</h5>
                                    <ul>
                                        <li><strong>Horaire :</strong> 06:15 AM</li>
                                        <li><strong>Focale :</strong> 35mm fixe</li>
                                        <li><strong>Ouverture :</strong> f/8 pour la netteté</li>
                                        <li><strong>Trépied :</strong> Recommandé</li>
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
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Lever de soleil sur la Place du Tertre" loading="lazy">
                                </picture>
                                <h4>La lumière de l'aube sur la Place du Tertre</h4>
                                <p>Arriver à 6 heures du matin permet de capter la place vide de ses touristes, là où seuls les premiers peintres installent leurs chevalets. C'est un moment suspendu où la lumière rasante souligne le relief des pavés et l'alignement des arbres.</p>
                                <p>Ce calme matinal permet d'explorer la place sous un angle minimaliste, presque hors du temps, avant que l'agitation touristique ne transforme son architecture en arrière-plan flou.</p>
                            </div>
                            <div class="text-col-content sidebar-notes">
                                <div class="notes-box">
                                    <h5>Notes techniques</h5>
                                    <ul>
                                        <li><strong>Horaire :</strong> 06:15 AM</li>
                                        <li><strong>Focale :</strong> 35mm fixe</li>
                                        <li><strong>Ouverture :</strong> f/8 pour la netteté</li>
                                        <li><strong>Trépied :</strong> Recommandé</li>
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
                                <h4>Géométrie des dômes</h4>
                                <p>L'architecture romano-byzantine de l'édifice se distingue par ses dômes imbriqués, créant un rythme visuel très fort. En photo d'architecture, cette symétrie permet de jouer avec les formes géométriques pures.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les angles</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Lumière sur la pierre</h4>
                                <p>Les variations de lumière au fil de la journée transforment radicalement les volumes. Les ombres portées sur les façades blanches soulignent les détails sculpturaux et les bas-reliefs.</p>
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
                                <h4>Place du Tertre</h4>
                                <p>Juste à côté du Sacré-Cœur, l'ambiance change du tout au tout. Les chevalets des peintres et les terrasses créent un désordre graphique très intéressant à photographier en plan large.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Visiter la place</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Ruelles escarpées</h4>
                                <p>Les rues pavées qui montent vers la Butte sont rythmées par les lignes de fuite des toits et les lampions anciens. Elles offrent une belle profondeur de champ.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Parcourir les rues</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Escaliers montmartrois</h4>
                                <p>Véritable signature du quartier, les escaliers interminables créent des motifs géométriques parfaits pour des compositions en noir et blanc très contrastées.</p>
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
                                <h4>Les vignes</h4>
                                <p>Un bout de campagne préservé en plein Paris, offrant un point de vue unique sur le nord de la capitale.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Le Lapin Agile</h4>
                                <p>Ce cabaret historique à la façade rose typique est un régal pour les photographes qui aiment les contrastes de couleurs.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Maison Rose</h4>
                                <p>Située au coin de la rue de l'Abreuvoir, elle attire l'œil par son architecture pittoresque et ses teintes pastel.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir plus</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Toits de Paris</h4>
                                <p>Depuis le parvis, la vue panoramique sur les toits parisiens permet de jouer avec les plans successifs et la brume.</p>
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
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Scène de rue montmartroise" loading="lazy">
                                </picture>
                                <p>Photographier la Place du Tertre demande de la patience pour capter l'instant où l'humain s'intègre parfaitement dans le décor urbain. Les terrasses des cafés et les devantures des boutiques anciennes offrent une palette de textures infinie.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Explorer la place</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : Les détails du Sacré-Cœur</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Détails architecturaux de la basilique" loading="lazy">
                                </picture>
                                <p>En se rapprochant des murs de la basilique, on découvre la finesse du travail de la pierre. Les sculptures, les gargouilles et les arcades créent des jeux d'ombre et de lumière parfaits pour le détail architectural.</p>
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
                                <h4>Axe Principal : L'histoire des cabarets</h4>
                                <p>Montmartre est indissociable de sa vie nocturne historique. Du Moulin Rouge au Lapin Agile, ces établissements ont forgé l'identité culturelle et artistique de la Butte. En photo de nuit, leurs enseignes lumineuses contrastent magnifiquement avec l'obscurité des rues pavées alentour.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la nuit</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : La géographie de la Butte</h4>
                                <p>Avec son relief escarpé et son altitude de 130 mètres, Montmartre offre une topographie singulière au sein de la capitale. Cette verticalité impose un cadrage spécifique pour valoriser la pente des rues et l'alignement en gradins des immeubles parisiens.</p>
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
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" alt="Vue sur le Sacré-Cœur depuis le bas de la Butte" loading="lazy">
                                    </picture>
                                    <p>Ce point de vue en contre-plongée depuis le square Louise Michel met en valeur toute la majesté du Sacré-Cœur qui surplombe la colline. La présence de la végétation dans le cadre apporte un premier plan naturel qui contraste avec la pierre blanche.</p>
                                </div>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Zoomer sur l'image</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Float right</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture img-float-right">
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" alt="Le Lapin Agile" loading="lazy">
                                    </picture>
                                    <p>Le célèbre cabaret du Lapin Agile se détache par sa couleur rose vif et ses volets verts au milieu des arbres. Un sujet haut en couleur qui demande une gestion fine de l'exposition pour ne pas saturer les teintes naturelles.</p>
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
                                <h4>Axe Principal : Les escaliers</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Escaliers de la rue Foyatier" loading="lazy">
                                </picture>
                                <p>Les marches de la rue Foyatier offrent un rythme graphique répétitif parfait pour les amateurs de photographie minimaliste.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la série</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Les pavés</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Textures des pavés" loading="lazy">
                                </picture>
                                <p>Après la pluie, les pavés de Montmartre brillent et reflètent la lumière des lampions, ajoutant une texture riche à l'image.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les textures</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Le funiculaire</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Funiculaire de Montmartre" loading="lazy">
                                </picture>
                                <p>Un élément mécanique moderne qui s'intègre au paysage depuis 1900, offrant un sujet dynamique en mouvement.</p>
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
                                <h4>Axe Principal : La faune artistique</h4>
                                <p>Montmartre reste un pôle d'attraction pour les portraitistes du monde entier. Les visages concentrés des artistes au travail contrastent avec la curiosité des passants.</p>
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
                                <p>Une vue plongeante sur les toits en zinc typiques qui s'étendent à perte de vue.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Façades</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Façades anciennes" loading="lazy">
                                </picture>
                                <p>Les détails des volets en bois et des balcons en fer forgé fleuris.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Ateliers</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Vieux ateliers d'artistes" loading="lazy">
                                </picture>
                                <p>Les grandes verrières des anciens ateliers d'artistes du XIXe siècle.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Cafés</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Devantures de cafés" loading="lazy">
                                </picture>
                                <p>Les devantures colorées des bistrots qui animent le quartier.</p>
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
                                <h4>Axe Principal : Matériel</h4>
                                <p>Utiliser une focale fixe 35mm permet de rester discret tout en captant l'essence des scènes de rue sans déformation.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Heures</h4>
                                <p>L'heure bleue reste le meilleur moment pour équilibrer la lumière du ciel avec l'éclairage artificiel des boutiques.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Saison</h4>
                                <p>L'automne apporte une douce mélancolie avec la brume matinale qui enveloppe les hauteurs du Sacré-Cœur.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Tirage</h4>
                                <p>Un papier mat texturé (type Hahnemühle) mettra magnifiquement en valeur le grain de la pierre et du pavé.</p>
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











    <section class="landing-band">
        <div class="band-container">
            <div class="content-wrapper">

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01B. Structure Duo (2 Colonnes avec Images)</h3>

                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal : Le village des artistes</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Scène de rue montmartroise" loading="lazy">
                                </picture>
                                <p>Photographier la Place du Tertre demande de la patience pour capter l'instant où l'humain s'intègre parfaitement dans le décor urbain. Les terrasses des cafés et les devantures des boutiques anciennes offrent une palette de textures infinie.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Explorer la place</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : Les détails du Sacré-Cœur</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                    <img src="images/photo-640x480.png" class="img-standard" alt="Détails architecturaux de la basilique" loading="lazy">
                                </picture>
                                <p>En se rapprochant des murs de la basilique, on découvre la finesse du travail de la pierre. Les sculptures, les gargouilles et les arcades créent des jeux d'ombre et de lumière parfaits pour le détail architectural.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les détails</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep-thin">

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01C. Structure Duo (2 Colonnes)</h3>

                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Axe Principal : L'histoire des cabarets</h4>
                                <p>Montmartre est indissociable de sa vie nocturne historique. Du Moulin Rouge au Lapin Agile, ces établissements ont forgé l'identité culturelle et artistique de la Butte. En photo de nuit, leurs enseignes lumineuses contrastent magnifiquement avec l'obscurité des rues pavées alentour.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la nuit</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Axe Principal : La géographie de la Butte</h4>
                                <p>Avec son relief escarpé et son altitude de 130 mètres, Montmartre offre une topographie singulière au sein de la capitale. Cette verticalité impose un cadrage spécifique pour valoriser la pente des rues et l'alignement en gradins des immeubles parisiens.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Étudier le relief</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep-thin">

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>01D. Structure Duo (2 Colonnes + float-left)</h3>
                        <div class="col-container col-2">
                            <div class="text-col-content">
                                <h4>Float left</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture img-float-left">
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" alt="Vue sur le Sacré-Cœur depuis le bas de la Butte" loading="lazy">
                                    </picture>
                                    <p>Ce point de vue en contre-plongée depuis le square Louise Michel met en valeur toute la majesté du Sacré-Cœur qui surplombe la colline. La présence de la végétation dans le cadre apporte un premier plan naturel qui contraste avec la pierre blanche.</p>
                                </div>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Zoomer sur l'image</button>
                                </div>
                            </div>

                            <div class="text-col-content">
                                <h4>Float right</h4>
                                <div class="float-box">
                                    <picture class="responsive-picture img-float-right">
                                        <source srcset="images/photo-640x480.png" media="(max-width: 768px)">
                                        <img src="images/photo-320x240.png" alt="Le Lapin Agile" loading="lazy">
                                    </picture>
                                    <p>Le célèbre cabaret du Lapin Agile se détache par sa couleur rose vif et ses volets verts au milieu des arbres. Un sujet haut en couleur qui demande une gestion fine de l'exposition pour ne pas saturer les teintes naturelles.</p>
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

    <hr class="section-sep">

    <section class="landing-band">
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
                                <h4>Axe Principal : Les escaliers</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Escaliers de la rue Foyatier" loading="lazy">
                                </picture>
                                <p>Les marches de la rue Foyatier offrent un rythme graphique répétitif parfait pour les amateurs de photographie minimaliste.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir la série</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Les pavés</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Textures des pavés" loading="lazy">
                                </picture>
                                <p>Après la pluie, les pavés de Montmartre brillent et reflètent la lumière des lampions, ajoutant une texture riche à l'image.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir les textures</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Le funiculaire</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Funiculaire de Montmartre" loading="lazy">
                                </picture>
                                <p>Un élément mécanique moderne qui s'intègre au paysage depuis 1900, offrant un sujet dynamique en mouvement.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Observer le flux</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep-thin">

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>02B. Structure Trio (3 Colonnes)</h3>
                        <div class="col-container col-3">
                            <div class="text-col-content">
                                <h4>Axe Principal : La faune artistique</h4>
                                <p>Montmartre reste un pôle d'attraction pour les portraitistes du monde entier. Les visages concentrés des artistes au travail contrastent avec la curiosité des passants.</p>
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

                <hr class="section-sep-thin">

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
                                <p>Une vue plongeante sur les toits en zinc typiques qui s'étendent à perte de vue.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Façades</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Façades anciennes" loading="lazy">
                                </picture>
                                <p>Les détails des volets en bois et des balcons en fer forgé fleuris.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Ateliers</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Vieux ateliers d'artistes" loading="lazy">
                                </picture>
                                <p>Les grandes verrières des anciens ateliers d'artistes du XIXe siècle.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Cafés</h4>
                                <picture class="responsive-picture">
                                    <source srcset="images/photo-640x480.png" media="(max-width: 1024px)">
                                    <img src="images/photo-320x240.png" class="img-standard" alt="Devantures de cafés" loading="lazy">
                                </picture>
                                <p>Les devantures colorées des bistrots qui animent le quartier.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Voir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="section-sep-thin">

                <div class="content-block reveal">
                    <div class="card-info">
                        <h3>03B. Grille de Précision (4 Colonnes)</h3>
                        <div class="col-container col-4">
                            <div class="text-col-content">
                                <h4>Axe Principal : Matériel</h4>
                                <p>Utiliser une focale fixe 35mm permet de rester discret tout en captant l'essence des scènes de rue sans déformation.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Heures</h4>
                                <p>L'heure bleue reste le meilleur moment pour équilibrer la lumière du ciel avec l'éclairage artificiel des boutiques.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Saison</h4>
                                <p>L'automne apporte une douce mélancolie avec la brume matinale qui enveloppe les hauteurs du Sacré-Cœur.</p>
                                <div style="text-align: center; margin-top: auto; padding-top: 20px;">
                                    <button class="simpleButton">Détails</button>
                                </div>
                            </div>
                            <div class="text-col-content">
                                <h4>Axe Principal : Tirage</h4>
                                <p>Un papier mat texturé (type Hahnemühle) mettra magnifiquement en valeur le grain de la pierre et du pavé.</p>
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

<?php include 'includes/footer.html'; ?>