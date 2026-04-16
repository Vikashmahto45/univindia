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
    
    <!-- Premium Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Link to premium styles -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($site_url); ?>/assets/css/style.css">

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
