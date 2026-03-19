<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Univindia.online - Official National University Result Hub 2025";
include __DIR__ . '/header.php';

// Freshly scan pages to build the link map (Prevents using "old" broken data)
$pages_dir = __DIR__ . '/pages/';
$all_links = [];
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && str_ends_with($file, '.php')) {
            $name = str_replace(['-', '.php'], [' ', ''], $file);
            $all_links[strtolower(trim($name))] = $file;
        }
    }
}
?>

<section class="hero">
    <div class="container">
        <h1>2025 University Results & Admit Cards</h1>
        <p style="color: var(--muted); font-size: 1.2rem;">Access centralized examination data from authorized national mirror gateways.</p>
    </div>
</section>

<div class="container main-grid">
    <div class="panel">
        <h3>Primary Results</h3>
        <ul class="links-container">
            <?php 
            $count = 0;
            foreach ($all_links as $name => $url) {
                if (str_contains($name, 'result')) {
                    echo "<li><a href='".BASE_URL.$url."'>".ucwords($name)."</a></li>";
                    $count++;
                    if ($count >= 20) break;
                }
            }
            ?>
        </ul>
    </div>
    <div class="panel">
        <h3>Admit Cards</h3>
        <ul class="links-container">
            <?php 
            $count = 0;
            foreach ($all_links as $name => $url) {
                if (str_contains($name, 'admit')) {
                    echo "<li><a href='".BASE_URL.$url."'>".ucwords($name)."</a></li>";
                    $count++;
                    if ($count >= 20) break;
                }
            }
            ?>
        </ul>
    </div>
    <div class="panel">
        <h3>Global Feeds</h3>
        <ul class="links-container">
            <?php 
            $count = 0;
            foreach ($all_links as $name => $url) {
                if (!str_contains($name, 'result') && !str_contains($name, 'admit')) {
                    echo "<li><a href='".BASE_URL.$url."'>".ucwords($name)."</a></li>";
                    $count++;
                    if ($count >= 20) break;
                }
            }
            ?>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
