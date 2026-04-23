<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($meta_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    
    <!-- Site Icon / Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="apple-touch-icon" href="assets/img/favicon.png">
    
    <!-- Premium Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Link to premium styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- AdSense E-E-A-T Schema Integration -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "<?php echo htmlspecialchars($site_url); ?>/#website",
          "url": "<?php echo htmlspecialchars($site_url); ?>",
          "name": "UnivIndia",
          "description": "Premium Educational Portal for MGSU Results, Admit Cards, and Updates.",
          "publisher": {
            "@id": "<?php echo htmlspecialchars($site_url); ?>/#organization"
          }
        },
        {
          "@type": "EducationalOrganization",
          "@id": "<?php echo htmlspecialchars($site_url); ?>/#organization",
          "name": "UnivIndia",
          "url": "<?php echo htmlspecialchars($site_url); ?>",
          "logo": {
            "@type": "ImageObject",
            "url": "<?php echo htmlspecialchars($site_url); ?>/assets/img/logo.png"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer support",
            "email": "support@univindia.net",
            "url": "<?php echo htmlspecialchars($site_url); ?>/contact-us.php"
          }
        }
      ]
    }
    </script>
</head>
<body>
<?php include 'nav.php'; ?>

<div class="news-ticker-bar">
    <div class="ticker-container">
        <div class="ticker-label">Latest Updates</div>
        <div class="ticker-content">
            <div class="ticker-scroll">
                <span>🔥 <a href="mgsu-ba-results.php" title="MGSU BA Results">MGSU BA Part 1, 2, 3 Result 2024 expected soon. Click here for BA links!</a></span>
                <span>🔥 <a href="mgsu-bsc-results.php" title="MGSU BSc Results">Latest updates on MGSU B.Sc (Science) Results 2024. Check Marksheet.</a></span>
                <span>🔥 <a href="time-table.php" title="MGSU Exam Date Sheet">MGSU Bikaner Main Exam Time Table 2024 has been released. Check dates here.</a></span>
            </div>
        </div>
    </div>
</div>
