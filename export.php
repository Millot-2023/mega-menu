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

// L'ordre est CRUCIAL pour la cascade CSS et l'héritage des polices
$cssFiles = [
    'variables.css', 
    'fonts.css',     
    'base.css',
    'layout.css',
    'grid.css',      
    'header.css',
    'menu.css',
    'footer.css',
    'style.css'
];

if (!is_dir($exportDir)) mkdir($exportDir, 0777, true);

echo "<h1>🛠️ Exportation en cours...</h1>";

// 2. GÉNÉRATION DES PAGES HTML
foreach ($pages as $phpPage => $htmlPage) {
    $url = $baseUrl . $phpPage;
    $content = @file_get_contents($url);
    
    if ($content !== false) {
        // A. Correction des liens PHP -> HTML
        $content = str_replace('.php', '.html', $content);

        // B. Nettoyage des appels CSS multiples
        $pattern = '/<link rel="stylesheet" href="css\/.*\.css">/i';
        $content = preg_replace($pattern, '', $content);
        
        // C. Injection de l'appel UNIQUE au fichier fusionné
        $singleLink = '    <link rel="stylesheet" href="css/style.css">';
        $content = str_replace('</head>', $singleLink . "\n</head>", $content);

        file_put_contents($exportDir . $htmlPage, $content);
        echo "<span style='color:green'>✅ Page $htmlPage générée.</span><br>";
    } else {
        echo "<span style='color:red'>❌ ERREUR : Impossible de lire $url</span><br>";
    }
}

// 3. FUSION DES FICHIERS CSS (AVEC PRIORITÉ @IMPORT)
if (!is_dir($exportDir . 'css')) mkdir($exportDir . 'css', 0777, true);

// L'instruction @import DOIT être à la première ligne du fichier final
$combinedCss = "@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@600;700;800&display=swap');\n";
$combinedCss .= "/* Fichier fusionné - mega-menu-2026 - Build: " . date('Y-m-d H:i:s') . " */\n\n";

foreach ($cssFiles as $file) {
    $path = 'src/css/' . $file;
    if (file_exists($path)) {
        $fileContent = file_get_contents($path);
        
        // On retire les @import individuels pour éviter les doublons mal placés
        $fileContent = preg_replace('/@import url\(.*?\);/', '', $fileContent);
        
        $combinedCss .= "/* --- Source: $file --- */\n";
        $combinedCss .= $fileContent . "\n\n";
    } else {
        echo "<span style='color:orange'>⚠️ Attention : $file non trouvé dans src/css/</span><br>";
    }
}
file_put_contents($exportDir . 'css/style.css', $combinedCss);
echo "<h3>✅ CSS : " . count($cssFiles) . " fichiers fusionnés (Fonts incluses).</h3>";

// 4. COPIE DES RESSOURCES (JS & IMAGES)
function sync($src, $dst) {
    if (!is_dir($src)) return;
    if (!is_dir($dst)) mkdir($dst, 0777, true);
    foreach (scandir($src) as $file) {
        if ($file != '.' && $file != '..') {
            if (is_dir($src.'/'.$file)) {
                sync($src.'/'.$file, $dst.'/'.$file);
            } else {
                copy($src.'/'.$file, $dst.'/'.$file);
            }
        }
    }
}

sync('src/js', $exportDir . 'js');
sync('src/images', $exportDir . 'images');

echo "<h2>✨ Export terminé ! Tu peux maintenant lancer 'firebase deploy'</h2>";