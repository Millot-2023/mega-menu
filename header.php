<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perles et Pixels</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="page-home">

    <header class="main-header">
        <div class="logo">Christophe MILLOT</div>
        <button class="burger-btn" id="burgerOpen" aria-label="Menu">☰</button>
    </header>

    <nav class="mega-menu" id="megaMenu">
        <div class="menu-wrapper">
            
            <div class="menu-panel active" id="main-panel">
                <div class="menu-header">
                    <div class="search-bar"><input type="text" placeholder="Rechercher un projet..."></div>
                    <button class="close-btn" id="menuClose">✕</button>
                </div>
                <ul class="nav-list">
                    <li><a href="index.php" class="direct-link">🏠 Accueil</a></li>
                    <li class="has-submenu" data-target="submenu-projets">
                        <span>📂 Nos Projets (Détaillés)</span>
                        <span class="chevron-right">›</span>
                    </li>
                    <li class="has-submenu" data-target="submenu-expertises">
                        <span>🛠️ Nos Expertises</span>
                        <span class="chevron-right">›</span>
                    </li>
                    <li><a href="photographie.php" class="direct-link">📸 Galerie Complète</a></li>
                    <li><a href="contact.php" class="direct-link">✉️ Contact direct</a></li>
                </ul>
            </div>

            <div class="menu-panel" id="submenu-projets">
                <div class="menu-header">
                    <button class="back-btn">‹ Retour au menu</button>
                </div>
                <div class="panel-content">
                    <div class="mega-grid">
                        <div class="mega-col">
                            <h3>📸 Photographie</h3>
                            <ul>
                                <li><a href="projet-type.php">Portraits Studio</a></li>
                                <li><a href="projet-type.php">Architecture Urbaine</a></li>
                                <li><a href="projet-type.php">Reportages Mariage</a></li>
                                <li><a href="projet-type.php">Nature & Macro</a></li>
                                <li><a href="projet-type.php">Mode & Lookbook</a></li>
                                <li><a href="projet-type.php">Noir & Blanc</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>🎨 Digital Art</h3>
                            <ul>
                                <li><a href="projet-type.php">Pixel Art 8-bit</a></li>
                                <li><a href="projet-type.php">Illustrations 2D</a></li>
                                <li><a href="projet-type.php">Concept Art Jeux Vidéo</a></li>
                                <li><a href="projet-type.php">Peinture Numérique</a></li>
                                <li><a href="projet-type.php">NFT Collections</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>🎬 Vidéo & Motion</h3>
                            <ul>
                                <li><a href="projet-type.php">Clips Musicaux</a></li>
                                <li><a href="projet-type.php">Publicités TV</a></li>
                                <li><a href="projet-type.php">Motion Design 2D</a></li>
                                <li><a href="projet-type.php">Interviews & Documentaires</a></li>
                                <li><a href="projet-type.php">Captation Drone 4K</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>💻 Web & Code</h3>
                            <ul>
                                <li><a href="projet-type.php">Sites Vitrines</a></li>
                                <li><a href="projet-type.php">E-commerce Complexes</a></li>
                                <li><a href="projet-type.php">Applications Métier</a></li>
                                <li><a href="projet-type.php">Optimisation SEO</a></li>
                                <li><a href="projet-type.php">Audit Sécurité</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="featured-full">
                        <div class="featured-image-bg">
                            <div class="featured-content">
                                <span class="badge">PROJET DU MOIS</span>
                                <h4>Refonte visuelle "Neo-Paris"</h4>
                                <p>Une immersion totale dans la capitale en 2080.</p>
                                <a href="projet-type.php" class="btn-link">Découvrir l'étude de cas →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-panel" id="submenu-expertises">
                <div class="menu-header">
                    <button class="back-btn">‹ Retour au menu</button>
                </div>
                <div class="panel-content">
                    <div class="mega-grid">
                        <div class="mega-col">
                            <h3>💡 Conseil Stratégique</h3>
                            <ul>
                                <li><a href="projet-type.php">Identité de Marque</a></li>
                                <li><a href="projet-type.php">Direction Artistique</a></li>
                                <li><a href="projet-type.php">Stratégie Social Media</a></li>
                            </ul>
                        </div>
                        <div class="mega-col">
                            <h3>🚀 Performance</h3>
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