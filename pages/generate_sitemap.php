<?php include '../header.php'; ?>
<?php
/**
 * Sitemap Generator for Univindia.online
 * Generates sitemap.xml using the static link_map.php array.
 */

include_once 'includes/config.php';
include_once 'includes/link_map.php';

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Add Home Page
$xml .= '  <url>' . PHP_EOL;
$xml .= '    <loc>' . BASE_URL . 'index.php</loc>' . PHP_EOL;
$xml .= '    <changefreq>daily</changefreq>' . PHP_EOL;
$xml .= '    <priority>1.0</priority>' . PHP_EOL;
$xml .= '  </url>' . PHP_EOL;

// Add Results Page
$xml .= '  <url>' . PHP_EOL;
$xml .= '    <loc>' . BASE_URL . 'results.php</loc>' . PHP_EOL;
$xml .= '    <changefreq>daily</changefreq>' . PHP_EOL;
$xml .= '    <priority>0.9</priority>' . PHP_EOL;
$xml .= '  </url>' . PHP_EOL;

// Add AdSense Pages
$compliance_pages = ['about-us.php', 'privacy-policy.php', 'contact-us.php', 'disclaimer.php', 'terms-and-conditions.php'];
foreach ($compliance_pages as $cp) {
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>' . BASE_URL . $cp . '</loc>' . PHP_EOL;
    $xml .= '    <changefreq>monthly</changefreq>' . PHP_EOL;
    $xml .= '    <priority>0.5</priority>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
}

// Add Dynamic Pages from link_map
if (isset($link_map) && is_array($link_map)) {
    foreach ($link_map as $keyword => $url) {
        $xml .= '  <url>' . PHP_EOL;
        $xml .= '    <loc>' . BASE_URL . $url . '</loc>' . PHP_EOL;
        $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
        $xml .= '    <priority>0.8</priority>' . PHP_EOL;
        $xml .= '  </url>' . PHP_EOL;
    }
}

$xml .= '</urlset>';

// Write to file
if (file_put_contents('sitemap.xml', $xml)) {
    echo "Sitemap generated successfully! Total entries: " . (count($link_map) + 7);
} else {
    echo "Failed to generate sitemap.";
}
?>
<?php include '../footer.php'; ?>