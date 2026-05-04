<?php
// 1. CONFIGURATION
$baseUrl = "http://localhost/mega-menu/src/"; 
$exportDir = __DIR__ . "/dist/";
$sourceDir = __DIR__ . "/src/";

$phpFiles = glob($sourceDir . "*.php");
$pages = [];

foreach ($phpFiles as $file) {
    $name = basename($file);
    // On exclut les fichiers de backup (avec ___ ou copy) et le script AJAX
    if (!str_starts_with($name, '___') && 
        $name !== 'export.php' && 
        $name !== 'sauvegarder-pixel.php' && 
        !str_contains($name, 'copy')) {
        
        $pages[$name] = str_replace('.php', '.html', $name);
    }
}

$cssFiles = [
    'variables.css', 
    'fonts.css',     
    'base.css',
    'pageBase.css',
    'layout.css',
    'grid.css',      
    'buttons.css',
    'header.css',
    'menu.css',
    'hero.css',
    'slider.css',
    'footer.css',
    'responsive.css',
    'landingPage.css',
    'style.css'
];

if (!is_dir($exportDir)) mkdir($exportDir, 0777, true);

echo "<h1>🛠️ Exportation Automatique en cours...</h1>";

// 2. GÉNÉRATION DES PAGES HTML
foreach ($pages as $phpPage => $htmlPage) {
    $url = $baseUrl . $phpPage;
    $content = @file_get_contents($url);
    
    if ($content !== false) {
        $content = str_replace('.php', '.html', $content);
        $pattern = '/<link rel="stylesheet" href="css\/.*\.css">/i';
        $content = preg_replace($pattern, '', $content);
        
        $singleLink = '    <link rel="stylesheet" href="css/style.css">';
        $content = str_replace('</head>', $singleLink . "\n</head>", $content);

        // ==========================================================================
        // NETTOYAGE DU GÉNÉRATEUR DE PIXEL ART POUR LA VERSION STATIQUE (DIST)
        // ==========================================================================
        if ($phpPage === 'pixels-art.php') {
            // A. On masque le bouton "Enregistrer la création"
            $content = str_replace(
                '<button id="saveGrid" class="action-btn btn-save">Enregistrer la création</button>', 
                '', 
                $content
            );

            // B. On SUPPRIME le titre et le texte d'explication de la galerie
            $content = str_replace(
                '<h3>Vos Créations enregistrées</h3>',
                '',
                $content
            );

            $content = str_replace(
                "Cliquez sur un dessin pour le charger et le modifier, ou sur l'icône bleue <strong>⧉</strong> pour le dupliquer.",
                '',
                $content
            );

            // C. On remplace la création dynamique des boutons (del/dup) par un bouton d'export direct (⬇)
            $oldJsButtons = "const delBtn = document.createElement('button');
            delBtn.className = 'btn-delete-creation';
            delBtn.innerHTML = '×';
            delBtn.title = 'Supprimer cette création';";

            // On cible tout le bloc JS de création de boutons dans renderGallery() pour injecter l'export direct
            $newJsButtons = "const dlBtn = document.createElement('button');
            dlBtn.className = 'btn-mini-export';
            dlBtn.innerHTML = '⬇';
            dlBtn.title = 'Télécharger directement en PNG';
            
            dlBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                downloadPNG(item.size, item.pixels, item.name || 'Sans titre');
            });";

            // Remplacement du bloc complet de gestion des boutons d'administration par notre export direct
            $content = preg_replace('/const delBtn = document\.createElement\(\'button\'\);.*?alert\(\'Erreur lors de la suppression\'\);.*?\}\);.*?\}\);/s', $newJsButtons, $content);

            // On retire l'ajout de delBtn et dupBtn dans la card
            $content = str_replace("card.appendChild(delBtn);", "card.appendChild(dlBtn);", $content);
            $content = str_replace("card.appendChild(dupBtn);", "", $content);

            // On ajoute la fonction générique d'exportation PNG dans le JS (avant renderGallery)
            $downloadFn = "function downloadPNG(size, pixels, name) {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const exportSize = 320;
        canvas.width = exportSize;
        canvas.height = exportSize;
        const scale = exportSize / size;

        pixels.forEach((color, index) => {
            const x = (index % size) * scale;
            const y = Math.floor(index / size) * scale;
            ctx.fillStyle = color || '#ffffff';
            ctx.fillRect(x, y, scale, scale);
        });

        const link = document.createElement('a');
        link.download = `\${name.replace(/\s+/g, '-').toLowerCase() || 'pixel-art'}-\${size}x\${size}.png`;
        link.href = canvas.toDataURL('image/png');
        link.click();
    }";
            
            $content = str_replace("function renderGallery(creations) {", $downloadFn . "\n\n    function renderGallery(creations) {", $content);

            // On remplace également l'action d'export du bouton principal pour utiliser notre nouvelle fonction
            $content = preg_replace('/if \(exportBtn\) \{.*?link\.click\(\);\s*\}\s*\}/s', "if (exportBtn) {
        exportBtn.addEventListener('click', () => {
            const cells = document.querySelectorAll('.pixel-cell');
            if (cells.length === 0) return;
            const currentPixels = Array.from(cells).map(cell => cell.style.backgroundColor || '#ffffff');
            const projectName = projectNameInput.value.trim() || 'pixel-art';
            downloadPNG(currentSize, currentPixels, projectName);
        });
    }", $content);

            // On adapte le CSS des boutons pour changer la croix/duplication en bouton d'export élégant
            $content = str_replace(".btn-delete-creation, .btn-duplicate-creation {", ".btn-mini-export {", $content);
            $content = preg_replace('/\.btn-delete-creation \{.*?\}/s', ".btn-mini-export { right: -8px; background: #0f172a; color: #ffffff; border: 2px solid #ffffff; }", $content);
            $content = preg_replace('/\.btn-delete-creation:hover \{.*?\}/s', ".btn-mini-export:hover { background: #1e293b; transform: scale(1.15); }", $content);
            $content = preg_replace('/\.btn-duplicate-creation.*?\{.*?\}/s', '', $content);
        }

        file_put_contents($exportDir . $htmlPage, $content);
        echo "<span style='color:green'>✅ Page $htmlPage générée et nettoyée.</span><br>";
    } else {
        echo "<span style='color:red'>❌ ERREUR : Impossible de lire $url</span><br>";
    }
}

// 3. FUSION DES FICHIERS CSS
if (!is_dir($exportDir . 'css')) mkdir($exportDir . 'css', 0777, true);

$combinedCss = "@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@600;700;800&display=swap');\n";
$combinedCss .= "/* Fichier fusionné - Build: " . date('Y-m-d H:i:s') . " */\n\n";

foreach ($cssFiles as $file) {
    $path = $sourceDir . 'css/' . $file;
    if (file_exists($path)) {
        $fileContent = file_get_contents($path);
        $fileContent = preg_replace('/@import url\(.*?\);/', '', $fileContent);
        $combinedCss .= "/* --- Source: $file --- */\n";
        $combinedCss .= $fileContent . "\n\n";
    } else {
        echo "<span style='color:orange'>⚠️ Attention : $file non trouvé dans src/css/</span><br>";
    }
}
file_put_contents($exportDir . 'css/style.css', $combinedCss);
echo "<h3>✅ CSS : " . count($cssFiles) . " fichiers fusionnés.</h3>";

// 4. COPIE DES RESSOURCES (JS, IMAGES & FICHIER JSON DES CRÉATIONS)
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

sync($sourceDir . 'js', $exportDir . 'js');
sync($sourceDir . 'images', $exportDir . 'images');

// On s'assure de copier le fichier de données JSON dans la version dist pour que la galerie s'affiche
if (file_exists($sourceDir . 'creations.json')) {
    copy($sourceDir . 'creations.json', $exportDir . 'creations.json');
    echo "<span style='color:green'>✅ Fichier creations.json synchronisé vers dist/.</span><br>";
}

echo "<h2>✨ Export terminé ! Ton site statique est prêt dans dist/.</h2>";