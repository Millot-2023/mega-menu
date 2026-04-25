<?php include 'includes/header.php'; ?>
<?php
$files = glob("*.php");

$count = 0;
foreach ($files as $file) {
    if ($file === 'replace_buttons.php') continue;
    $content = file_get_contents($file);
    
    $pattern = '/^([ \t]*)<a href="([^"]+)">([^<]+)<\/a>\s*$/m';
    
    if (preg_match_all($pattern, $content, $matches)) {
        $new_content = preg_replace_callback($pattern, function($m) {
            $indent = $m[1];
            $href = $m[2];
            $text = $m[3];
            return $indent . '<div class="btn-container">' . "\n" .
                   $indent . '    <a href="' . $href . '" class="btn-main">' . $text . '</a>' . "\n" .
                   $indent . '</div>';
        }, $content);
        
        file_put_contents($file, $new_content);
        echo "Updated $file\n";
        $count++;
    }
}
echo "Total files updated: $count\n";
?>

<?php include 'includes/footer.html'; ?>