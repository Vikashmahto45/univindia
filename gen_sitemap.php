<?php
include 'includes/link_map.php';
$urls = array_values($link_map);
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
foreach($urls as $u) {
    if (empty($u)) continue;
    $xml .= '  <url>' . PHP_EOL;
    $xml .= '    <loc>https://univindia.online/' . htmlspecialchars($u) . '</loc>' . PHP_EOL;
    $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
    $xml .= '    <priority>0.8</priority>' . PHP_EOL;
    $xml .= '  </url>' . PHP_EOL;
}
$xml .= '</urlset>';
file_put_contents('sitemap.xml', $xml);
echo "Sitemap regenerated successfully with " . count($urls) . " URLs." . PHP_EOL;
?>
