<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Christophe MILLOT</title>
    <meta name="description" content="Découvrez l'univers visuel de Christophe Millot (Christophe MILLOT) : photographie professionnelle, art digital, vidéo et développement web sur mesure.">
    <meta name="author" content="Christophe Millot">
    <meta name="robots" content="index, follow">

    <!-- APPEL UNIQUE : Centralise toute la cascade CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-home">

    <header class="main-header">
        <div class="logo">Christophe MILLOT</div>
        <button class="burger-btn" id="burgerOpen" aria-label="Ouvrir le menu principal">☰</button>
    </header>

    <nav class="mega-menu" id="megaMenu" aria-label="Navigation principale">
        <div class="menu-wrapper">
            
            <div class="menu-panel active" id="main-panel">
                <div class="menu-header">
                    <div class="search-bar">
                        <input type="text" id="site-search" placeholder="Rechercher un projet..." aria-label="Champ de recherche de projets">
                    </div>
                    <button class="close-btn" id="menuClose" aria-label="Fermer le menu de navigation">✕</button>
                </div>
                <ul class="nav-list">
                    <li><a href="index.php" class="direct-link">🏠 Accueil</a></li>
                    
                    <li class="has-submenu-container">
                        <button class="submenu-trigger" data-target="submenu-projets" aria-haspopup="true" aria-expanded="false">
                            <span>Nos Projets (Détaillés)</span>
                            <span class="chevron-right" aria-hidden="true">›</span>
                        </button>
                    </li>
                    
                    <li class="has-submenu-container">
                        <button class="submenu-trigger" data-target="submenu-expertises" aria-haspopup="true" aria-expanded="false">
                            <span>Nos Expertises</span>
                            <span class="chevron-right" aria-hidden="true">›</span>
                        </button>
                    </li>
                    
                    <li><a href="photographie.php" class="direct-link">📸 Galerie Complète</a></li>
                    <li><a href="contact.php" class="direct-link">Contact direct</a></li>
                </ul>
            </div>

            <!-- Panel Projets -->
            <div class="menu-panel" id="submenu-projets">
                <div class="menu-header">
                    <button class="back-btn" aria-label="Retour au menu principal">‹ Retour au menu</button>
                    <button class="close-btn" aria-label="Fermer le menu de navigation">✕</button>
                </div>
                <div class="panel-content">
                    <h2 class="panel-title">Détail des Projets</h2>
                    <div class="mega-grid">
                        <div class="mega-col">
                            <h3>Photographie</h3>
                            <ul>
                                <li><a href="massonery-studio.php" style="color: red !important;">Massonery-studio</a></li>

                                <li><a href="portrait-studio.php" style="color: red !important;">Portraits Studio</a></li>





                                <li><a href="architecture-urbaine.php" style="color: red !important;">Architecture Urbaine</a></li>
                                <li><a href="reportage-mariage.php">Reportages Mariage</a></li>
                                <li><a href="nature-maccro.php">Nature & Macro</a></li>
                                <li><a href="mode-lookbook.php">Mode & Lookbook</a></li>
                                <li><a href="noir-et-blanc.php">Noir & Blanc</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>Digital Art</h3>
                            <ul>
                                <li><a href="pixels-art.php" style="color: red !important;">Pixel Art 8-bit</a></li>
                                <li><a href="illustrations.php">Illustrations 2D</a></li>
                                <li><a href="jeux-video.php">Jeux Vidéo</a></li>
                                <li><a href="peinture-numerique.php">Peinture Numérique</a></li>
                                <li><a href="nft-collection.php">NFT Collections</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>Vidéo & Motion</h3>
                            <ul>
                                <li><a href="clips-musicaux.php">Clips Musicaux</a></li>
                                <li><a href="publicite-tv.php">Publicités TV</a></li>
                                <li><a href="motion-design.php">Motion Design 2D</a></li>
                                <li><a href="interwiew.php">Interviews</a></li>
                                <li><a href="captation.php">Captation Drone 4K</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>Web & Code</h3>
                            <ul>
                                <li><a href="site-vitrine.php">Sites Vitrines</a></li>
                                <li><a href="ecommerce.php">E-commerce Complexes</a></li>
                                <li><a href="application-metiers.php">Applications Métier</a></li>
                                <li><a href="optimisation-seo.php">Optimisation SEO</a></li>
                                <li><a href="audit-securite.php">Audit Sécurité</a></li>

                               <a href="pageTemplate.php" style="color: red !important;">Page Templates</a>




                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel Expertises -->
            <div class="menu-panel" id="submenu-expertises">
                <div class="menu-header">
                    <button class="back-btn" aria-label="Retour au menu principal">‹ Retour au menu</button>
                    <button class="close-btn" aria-label="Fermer le menu de navigation">✕</button>
                </div>
                <div class="panel-content">
                    <h2 class="panel-title">Nos Expertises</h2>
                    <div class="mega-grid">
                        <div class="mega-col">
                            <h3>Conseil Stratégique</h3>
                            <ul>
                                <li><a href="projet-type.php">Identité de Marque</a></li>
                                <li><a href="projet-type.php">Direction Artistique</a></li>
                                <li><a href="projet-type.php">Stratégie Social Media</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>Performance</h3>
                            <ul>
                                <li><a href="projet-type.php">Hébergement Haute Dispo</a></li>
                                <li><a href="projet-type.php">Maintenance Critique</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>