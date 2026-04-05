<?php
/**
 * header.php - Included on every page
 */
require_once __DIR__ . '/config.php';

// Clean canonical URL - strips index.php and query strings
$requestUri = strtok($_SERVER['REQUEST_URI'], '?'); // remove query string
$requestUri = str_replace('/index.php', '/', $requestUri); // strip index.php
$canonicalUrl = SITE_URL . ltrim($requestUri, '/');

// Detect if we're on an inner page (pages/ directory)
$isInnerPage = (strpos($requestUri, '/pages/') !== false);
$pageTitle     = isset($title) ? $title : 'UnivIndia - Official University Portal & Job Notification';
$pageDesc      = isset($meta_description) ? $meta_description : 'UnivIndia.online provides latest University Results, Board Results, Admit Cards, and Sarkari Job notifications across India.';
$pageKeywords  = isset($meta_keywords) ? $meta_keywords : 'UnivIndia, Board Result, University Result, Admit Card, Sarkari Naukri';
$ogImage       = SITE_URL . 'assets/images/india-result-banner.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDesc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_URL; ?>assets/images/favicon.png">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:site_name" content="UnivIndia">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDesc); ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">
    <meta name="twitter:site" content="@univindia">

    <!-- Schema.org JSON-LD: WebSite -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "UnivIndia",
      "url": "<?php echo SITE_URL; ?>",
      "description": "<?php echo addslashes($pageDesc); ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo SITE_URL; ?>pages/search.php?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>

<?php if ($isInnerPage): ?>
    <!-- Schema.org JSON-LD: BreadcrumbList for inner pages -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo SITE_URL; ?>"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "<?php echo htmlspecialchars($pageTitle); ?>",
          "item": "<?php echo $canonicalUrl; ?>"
        }
      ]
    }
    </script>
<?php endif; ?>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>
<body>

<div class="container">
    <header>
        <div class="logo-text">UNIV INDIA</div>
        <h3>WWW.UNIVINDIA.ONLINE</h3>
    </header>

    <nav>
        <a href="<?php echo SITE_URL; ?>">Home</a>
        <a href="<?php echo BASE_URL; ?>pages/latest-job.php">Latest Jobs</a>
        <a href="<?php echo BASE_URL; ?>pages/result.php">Result</a>
        <a href="<?php echo BASE_URL; ?>pages/admit-card.php">Admit Card</a>
        <a href="<?php echo BASE_URL; ?>pages/answer-key.php">Answer Key</a>
        <a href="<?php echo BASE_URL; ?>pages/syllabus.php">Syllabus</a>
        <a href="<?php echo BASE_URL; ?>pages/search.php">Search</a>
        <a href="<?php echo BASE_URL; ?>pages/contact.php">Contact Us</a>
    </nav>

    <div class="marquee-bar">
        <marquee onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4">
            Welcome to UnivIndia - Check your latest University Results, Government Jobs, Admit Cards, and Syllabus updates here! &nbsp;||&nbsp;
            <a href="#" style="color: #cc0000; text-decoration: underline;">Download Android App</a> &nbsp;||&nbsp;
            <a href="#" style="color: #cc0000; text-decoration: underline;">Join Our Telegram Channel</a>
        </marquee>
    </div>
