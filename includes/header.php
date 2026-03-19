<?php 
require_once __DIR__ . '/includes/config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "Univindia.online - University Results & Admit Card 2025"; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : "Latest results, admit cards, and time tables for all Indian Universities and Boards."; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="top-logo-bar">
        <div class="container">
            <h1>UNIVINDIA.ONLINE</h1>
        </div>
    </div>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/mgsu-bikaner-result.php">MGSU Bikaner</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/rrbmu-alwar-result.php">RRBMU Alwar</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/msbu-bharatpur-result.php">MSBU Bharatpur</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/india-result.php">India Result</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/latest-jobs.php">Jobs</a></li>
                </ul>
            </nav>
        </div>
    </header>
