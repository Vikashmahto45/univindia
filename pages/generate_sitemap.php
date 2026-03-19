<?php
/**
 * Univindia Sitemap Generator - Fresh Rebuild
 * This script scans the /pages directory and generates sitemap.xml in the root.
 */

require_once __DIR__ . '/../includes/config.php';

$pages_dir = __DIR__ . '/';
$root_dir = __DIR__ . '/../';
$xml_file = $root_dir . 'sitemap.xml';

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// 1. Add Home Page
$xml .= '  <url>' . PHP_EOL;
$xml .= '    <loc>' . BASE_URL . '</loc>' . PHP_EOL;
$xml .= '    <changefreq>daily</changefreq>' . PHP_EOL;
$xml .= '    <priority>1.0</priority>' . PHP_EOL;
$xml .= '  </url>' . PHP_EOL;

// 2. Scan and Add All SEO Pages
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && substr($file, -4) === '.php' && $file !== 'generate_sitemap.php') {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . BASE_URL . $file . '</loc>' . PHP_EOL;
            $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
            $xml .= '    <priority>0.8</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }
    }
}

$xml .= '</urlset>';

// 3. Save to Root
if (file_put_contents($xml_file, $xml)) {
    echo "SUCCESS: sitemap.xml generated in the root directory.";
} else {
    echo "ERROR: Could not write to " . $xml_file;
}
?>
