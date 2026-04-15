<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($title) ? $title . " | " . SITE_NAME : SITE_NAME . " - MGSU Bikaner Results & Notifications"; ?>
    </title>
    <meta name="description" content="<?php echo isset($desc) ? $desc : DEFAULT_DESC; ?>">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <div class="logo">
                    <a href="<?php echo SITE_URL; ?>">Univ<span class="accent">India</span></a>
                </div>
                <ul class="nav-menu">
                    <li><a href="<?php echo SITE_URL; ?>/mgsu/results">Results</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/mgsu/admit-card">Admit Cards</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/mgsu/time-table">Time Table</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/mgsu/syllabus">Syllabus</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/notifications" class="nav-btn">New Alerts</a></li>
                </ul>
            </nav>
        </div>
    </header>