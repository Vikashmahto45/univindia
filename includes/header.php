<?php include_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "Univindia.online - University Results, Admit Card & Time Table"; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Check your university results, admit card, and exam schedules at Univindia.online. Dedicated portal for MGSU Bikaner, RRBMU Alwar, MSBU Bharatpur and more."; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : "univindia, university results, mgsu bikaner, rrbmu alwar, msbu bharatpur, admit card, time table"; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
</head>
<body>
    <div class="top-logo-bar">
        <div class="container">
            <h1>UNIVINDIA.ONLINE</h1>
            <p>WWW.UNIVINDIA.ONLINE</p>
        </div>
    </div>
    <header>
        <div class="container">
            <nav>
                <ul class="nav-links">
                    <li><a href="<?php echo BASE_URL; ?>index.php" title="Univindia.online Home">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>univindia-net-mgsu.php" title="Maharaja Ganga Singh University Updates">MGSU Bikaner</a></li>
                    <li><a href="<?php echo BASE_URL; ?>univindia-rrbmu.php" title="Raj Rishi Bhartrihari Matsya University Updates">RRBMU Alwar</a></li>
                    <li><a href="<?php echo BASE_URL; ?>univindia-msbu.php" title="Maharaja Surajmal Brij University Updates">MSBU Bharatpur</a></li>
                    <li><a href="<?php echo BASE_URL; ?>india-result.php" title="All India Results">India Result</a></li>
                    <li><a href="<?php echo BASE_URL; ?>rbse-10th-result-2024.php" title="RBSE 10th Result">RBSE 10th</a></li>
                    <li><a href="<?php echo BASE_URL; ?>admit-card.php" title="Admit Card">Admit Card</a></li>
                    <li><a href="<?php echo BASE_URL; ?>latest-jobs.php" title="Latest Jobs">Latest Job</a></li>
                </ul>
            </nav>
        </div>
    </header>
