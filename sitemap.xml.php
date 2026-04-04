<?php
/**
 * sitemap.xml.php - Dynamically generate a sitemap for UnivIndia
 * Scans the pages/ directory and include all .php files.
 */
header("Content-Type: application/xml; charset=utf-8");

// Set the base URL for the sitemap
// Use HTTPS if possible, otherwise HTTP
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
// Project subdirectory (univindia)
$projectName = "univindia";
$baseUrl = $protocol . $host . "/" . $projectName . "/";

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// 1. Add Homepage
echo '  <url>' . PHP_EOL;
echo '    <loc>' . $baseUrl . 'index.php</loc>' . PHP_EOL;
echo '    <priority>1.00</priority>' . PHP_EOL;
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
        if ($filename == 'result.php' || $filename == 'admit-card.php' || $filename == 'latest-job.php') {
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
