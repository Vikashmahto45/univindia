<?php 
$config_file = __DIR__ . '/includes/config.php';
if (file_exists($config_file)) { require_once $config_file; }
else { define('BASE_URL', '/'); define('ASSETS_URL', '/css/style.css'); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Univindia Education Hub 2025'; ?></title>
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root { --p: #3b82f6; --bg: #0b0f19; --c: #161d2b; --text: #f1f5f9; }
        body { background: var(--bg); color: var(--text); font-family: 'Outfit', sans-serif; margin:0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        header { background: var(--c); padding: 20px 0; border-bottom: 2px solid var(--p); position: sticky; top:0; z-index:100; }
        .logo { font-size: 1.5rem; font-weight: 800; color: #fff; text-decoration: none; /* Add prefix for gradient text */ background: linear-gradient(to right, #fff, var(--p)); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; }
        nav { display: flex; gap: 20px; float: right; }
        nav a { color: #cbd5e1; text-decoration: none; font-size: 0.9rem; font-weight: 600; }
        .hero { padding: 80px 0; text-align: center; background: radial-gradient(circle at center, rgba(59,130,246,0.1), transparent); }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; padding-bottom: 60px; }
        .box { background: var(--c); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05); }
        .box h3 { color: var(--p); margin-top:0; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px; }
        .link-list { list-style: none; padding: 0; }
        .link-list li { padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,0.03); }
        .link-list a { color: var(--text); text-decoration: none; font-size: 0.95rem; display: block; }
        .link-list a:hover { color: #fbbf24; transform: translateX(5px); transition: 0.2s; }
        
        /* SEO Content Utility Classes */
        .content-card { background: var(--c); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); margin-bottom: 30px; }
        .gold-text { color: #fbbf24; font-weight: 700; border-bottom: 1px solid rgba(251,191,36,0.2); padding-bottom: 5px; margin-bottom: 15px; }
        .data-table { width: 100%; border-collapse: collapse; margin: 20px 0; color: #cbd5e1; }
        .data-table th, .data-table td { border: 1px solid rgba(255,255,255,0.05); padding: 12px; text-align: left; }
        .data-table th { background: rgba(255,255,255,0.03); color: var(--p); }
        .post-meta { font-size: 0.85rem; color: #64748b; margin-bottom: 25px; border-left: 3px solid var(--p); padding-left: 15px; }
        .main-content { padding: 60px 0; }
        
        footer { background: #000; padding: 60px 0; border-top: 1px solid rgba(255,255,255,0.05); margin-top: 40px; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px; }
        .f-col h4 { color: #fff; margin-bottom: 15px; }
        .f-col a { display: block; color: #64748b; text-decoration: none; margin-bottom: 8px; font-size: 0.85rem; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="<?php echo BASE_URL; ?>" class="logo">UNIVINDIA</a>
            <nav>
                <a href="<?php echo BASE_URL; ?>">HOME</a>
                <a href="<?php echo BASE_URL; ?>pages/results.php">RESULTS</a>
                <a href="<?php echo BASE_URL; ?>pages/admit-card.php">ADMIT</a>
            </nav>
        </div>
    </header>
