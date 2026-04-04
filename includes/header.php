<?php
/**
 * header.php - Included on every page
 */
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "UnivIndia - Official University Portal & Job Notification"; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "UnivIndia.online provides latest University Results, Board Results, Admit Cards, and Sarkari Job notifications across India."; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : "UnivIndia, Board Result, University Result, Admit Card, Sarkari Naukri"; ?>">
    <link rel="canonical" href="<?php echo SITE_URL . ltrim($_SERVER['REQUEST_URI'], '/'); ?>">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo isset($title) ? $title : "UnivIndia - Official University Portal"; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : "Latest University Results & Job Updates."; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL . ltrim($_SERVER['REQUEST_URI'], '/'); ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "UnivIndia",
      "url": "<?php echo SITE_URL; ?>"
    }
    </script>

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

</head>
<body>

<div class="container">
    <header>
        <div class="logo-text">UNIV INDIA</div>
        <h3>WWW.UNIVINDIA.ONLINE</h3>
    </header>

    <nav>
        <a href="<?php echo BASE_URL; ?>index.php">Home</a>
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
