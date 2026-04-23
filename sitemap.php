<?php
// Generate Dynamic XML Sitemap
header("Content-Type: application/xml; charset=utf-8");

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $domainName;

$pages = [
    '/',
    '/mgsu-results.php',
    '/admit-card.php',
    '/syllabus.php',
    '/time-table.php',
    '/old-papers.php',
    '/about-us.php',
    '/contact-us.php',
    '/privacy-policy.php',
    '/terms.php'
];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
    echo "  <url>\n";
    echo "      <loc>" . htmlspecialchars($base_url . $page) . "</loc>\n";
    echo "      <lastmod>" . date('Y-m-d') . "</lastmod>\n";
    echo "      <changefreq>weekly</changefreq>\n";
    if($page === '/' || $page === '/mgsu-results.php' || $page === '/admit-card.php') {
        echo "      <priority>1.0</priority>\n";
    } else {
        echo "      <priority>0.5</priority>\n";
    }
    echo "  </url>\n";
}

echo '</urlset>';
?>
