<?php
// 1. CONFIGURATION
$baseUrl = "http://localhost/mega-menu/src/"; 
$exportDir = __DIR__ . "/dist/";

$pages = [
    "index.php" => "index.html",
    "photographie.php" => "photographie.html",
    "contact.php" => "contact.html",
    "projet-type.php" => "projet-type.html"
];

// L'ordre est important pour la cascade CSS
$cssFiles = [
    'base.css',
    'fonts.css',
    'layout.css',
    'header.css',
    'menu.css',
    'footer.css',
    'style.css'
];

if (!is_dir($exportDir)) mkdir($exportDir, 0777, true);

echo "<h1>🛠️ Exportation Optimisée pour Google...</h1>";

// 2. GÉNÉRATION DES PAGES HTML
foreach ($pages as $phpPage => $htmlPage) {
    $url = $baseUrl . $phpPage;
    $content = @file_get_contents($url);
    
    if ($content !== false) {
        // A. Correction des liens PHP -> HTML
        $content = str_replace('.php', '.html', $content);

        // B. Nettoyage des multiples balises <link> pour n'en laisser qu'une seule
        // On supprime les appels CSS individuels
        $pattern = '/<link rel="stylesheet" href="css\/.*\.css">/i';
        $content = preg_replace($pattern, '', $content);
        
        // On injecte l'appel au fichier unique fusionné juste avant </head>
        $singleLink = '    <link rel="stylesheet" href="css/style.css">';
        $content = str_replace('</head>', $singleLink . "\n</head>", $content);

        file_put_contents($exportDir . $htmlPage, $content);
        echo "<span style='color:green'>✅ Page $htmlPage générée (CSS Fusionné).</span><br>";
    } else {
        echo "<span style='color:red'>❌ ERREUR : Impossible de lire $url</span><br>";
    }
}

// 3. FUSION DES FICHIERS CSS
if (!is_dir($exportDir . 'css')) mkdir($exportDir . 'css', 0777, true);
$combinedCss = "/* Fichier fusionné pour la performance - Projet mega-menu-2026 */\n\n";

foreach ($cssFiles as $file) {
    $path = 'src/css/' . $file;
    if (file_exists($path)) {
        $combinedCss .= "/* --- Source: $file --- */\n";
        $combinedCss .= file_get_contents($path) . "\n\n";
    }
}
file_put_contents($exportDir . 'css/style.css', $combinedCss);
echo "<h3>✅ CSS : 7 fichiers fusionnés dans dist/css/style.css</h3>";

// 4. COPIE DES RESSOURCES (JS & IMAGES)
function sync($src, $dst) {
    if (!is_dir($src)) return;
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    foreach (scandir($src) as $file) {
        if ($file != '.' && $file != '..') {
            if (is_dir($src.'/'.$file)) sync($src.'/'.$file, $dst.'/'.$file);
            // On ne copie pas les CSS individuels dans dist, on a déjà le fusionné
            else if (strpos($file, '.css') === false) copy($src.'/'.$file, $dst.'/'.$file);
        }
    }
}

sync('src/js', $exportDir . 'js');
sync('src/images', $exportDir . 'images');

echo "<h2>✨ Terminé ! Tu peux lancer 'firebase deploy'</h2>";