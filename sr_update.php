<?php
/**
 * SARKARI RESULT MASS-UPDATE SCRIPT
 * This script transforms all 1,400 pages to the NEW premium design.
 */
$pages_dir = __DIR__ . '/pages/';
$files = scandir($pages_dir);
$count = 0;

foreach ($files as $file) {
    if ($file === '.' || $file === '..' || substr($file, -4) !== '.php') continue;
    $path = $pages_dir . $file;
    $c = file_get_contents($path);

    // 1. Extract Metadata Variables
    preg_match('/\$page_title\s*=\s*(["\'])(.*?)\1;/s', $c, $m1);
    preg_match('/\$meta_description\s*=\s*(["\'])(.*?)\1;/s', $c, $m2);
    preg_match('/\$meta_keywords\s*=\s*(["\'])(.*?)\1;/s', $c, $m3);
    
    $title = $m1[2] ?? ucwords(str_replace(['-', '.php'], [' ', ''], $file));
    $desc = $m2[2] ?? '';
    $keyw = $m3[2] ?? '';

    // 2. Extract HTML Body (Strip old PHP tags)
    $body = preg_replace('/<\?php.*?\?>/is', '', $c);
    $body = trim($body);

    // 3. Extract H1 for Title (if exists)
    preg_match('/<h1.*?>(.*?)<\/h1>/is', $body, $mh1);
    $h1_content = $mh1[1] ?? $title;
    $body_no_h1 = preg_replace('/<h1.*?>.*?<\/h1>/is', '', $body);

    // 4. Rebuild as PROFESSIONAL SARKARI RESULT PAGE
    $final = "<?php \n";
    $final .= "include '../header.php'; \n";
    $final .= "\$page_title = \"" . addslashes($title) . "\"; \n";
    $final .= "\$meta_description = \"" . addslashes($desc) . "\"; \n";
    $final .= "\$meta_keywords = \"" . addslashes($keyw) . "\"; \n";
    $final .= "?>\n\n";
    
    $final .= "<div class='sr-page-wrapper'>\n";
    $final .= "    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; " . $title . "</div>\n";
    $final .= "    <h2 class='sr-title'>" . $h1_content . "</h2>\n";
    $final .= "    <div class='sr-content'>\n";
    $final .= "        " . trim($body_no_h1) . "\n";
    $final .= "    </div>\n";
    $final .= "</div>\n";
    
    $final .= "\n\n<?php include '../footer.php'; ?>";

    file_put_contents($path, $final);
    $count++;
}
echo "Sarkari Result Transformation Complete for $count pages.";
?>
