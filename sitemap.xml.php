<?php
/**
 * sitemap.xml.php - Dynamically generate a sitemap for UnivIndia
 * Scans the pages/ directory and includes all .php files.
 * Uses SITE_URL from config.php for correct local & live URL generation.
 */
require_once __DIR__ . '/includes/config.php';

header("Content-Type: application/xml; charset=utf-8");

$baseUrl = SITE_URL; // e.g., https://univindia.online/ or http://localhost/univindia/

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// 1. Add Homepage (clean URL - no index.php)
echo '  <url>' . PHP_EOL;
echo '    <loc>' . $baseUrl . '</loc>' . PHP_EOL;
echo '    <priority>1.00</priority>' . PHP_EOL;
echo '    <changefreq>daily</changefreq>' . PHP_EOL;
echo '  </url>' . PHP_EOL;

// 2. Scan pages/ directory for PHP files
$pagesDir = __DIR__ . '/pages/';
$files = glob($pagesDir . '*.php');

// Files to exclude from the sitemap
$exclude = ['config.php', 'header.php', 'footer.php', 'test.php', 'db.php'];

if ($files) {
    foreach ($files as $file) {
        $filename = basename($file);
        
        // Skip hidden/system files
        if (in_array($filename, $exclude) || strpos($filename, '_') === 0) {
            continue;
        }

        $priority = 0.8; // Default priority for internal pages
        
        // Higher priority for main hubs
        if (in_array($filename, ['result.php', 'admit-card.php', 'latest-job.php', 'answer-key.php', 'syllabus.php', 'admission.php'])) {
            $priority = 0.9;
        }

        echo '  <url>' . PHP_EOL;
        echo '    <loc>' . $baseUrl . 'pages/' . $filename . '</loc>' . PHP_EOL;
        echo '    <lastmod>' . date('Y-m-d', filemtime($file)) . '</lastmod>' . PHP_EOL;
        echo '    <changefreq>daily</changefreq>' . PHP_EOL;
        echo '    <priority>' . $priority . '</priority>' . PHP_EOL;
        echo '  </url>' . PHP_EOL;
    }
}

echo '</urlset>' . PHP_EOL;
?>
