<?php
$dir = __DIR__ . '/src';
$files = glob($dir . '/*.php');

$non_compliant_files = [];

foreach ($files as $file) {
    $content = file_get_contents($file);
    $original_content = $content;
    $filename = basename($file);
    $needs_fix = false;

    // 1. Check Header
    if (strpos($content, "<?php include 'includes/header.php'; ?>") !== 0) {
        $content = "<?php include 'includes/header.php'; ?>\n" . preg_replace('/^\s*<\?php include \'includes\/header\.php\'; \?>\s*/m', '', $content);
        $needs_fix = true;
        $non_compliant_files[$filename][] = "Header manquant ou mal placé";
    }

    // 2. Check Structure <main ...>
    if (strpos($content, '<main class="content-area" id="content">') === false) {
        $content = preg_replace('/<main\s+[^>]*>/', '<main class="content-area" id="content">', $content);
        $needs_fix = true;
        $non_compliant_files[$filename][] = "Balise <main> incorrecte";
    }

    // 3. Dead Links (photographie.php -> self)
    if (strpos($content, 'href="photographie.php"') !== false) {
        $content = str_replace('href="photographie.php"', 'href="' . $filename . '"', $content);
        $needs_fix = true;
        $non_compliant_files[$filename][] = "Liens morts vers photographie.php";
    }

    // 4. Check Footer and Clean up after
    $footer_str = "<?php include 'includes/footer.html'; ?>";
    if (strpos($content, $footer_str) === false) {
        $content .= "\n" . $footer_str;
        $needs_fix = true;
        $non_compliant_files[$filename][] = "Footer manquant";
    } else {
        // Strip anything after the footer
        $pos = strrpos($content, $footer_str);
        $after = trim(substr($content, $pos + strlen($footer_str)));
        if (!empty($after)) {
            $content = substr($content, 0, $pos + strlen($footer_str)) . "\n";
            $needs_fix = true;
            $non_compliant_files[$filename][] = "Contenu présent après le footer";
        }
    }

    if ($original_content !== $content) {
        file_put_contents($file, $content);
    }
}

echo "Fichiers modifiés / non conformes :\n";
foreach ($non_compliant_files as $file => $reasons) {
    echo "- $file : " . implode(", ", $reasons) . "\n";
}
?>
