<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Univindia Results Portal 2025";
include __DIR__ . '/header.php';

// PHP 7+ Compatible Directory Scanning
$all_links = [];
$pages_dir = __DIR__ . '/pages/';
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && substr($file, -4) === '.php') {
            $name = ucwords(str_replace(['-', '.php'], [' ', ''], $file));
            $all_links[$file] = $name;
        }
    }
}
?>

<div class="hero">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 10px;">University Exam Results 2025</h2>
        <p style="color: #94a3b8; font-size: 1.1rem;">Official dissemination portal for all Indian Board and University examinations.</p>
    </div>
</div>

<div class="container grid">
    <div class="box">
        <h3>Primary Search</h3>
        <ul class="link-list">
            <?php 
            $count = 0;
            foreach ($all_links as $file => $name) {
                if (strpos(strtolower($name), 'result') !== false) {
                    echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
                    if (++$count >= 15) break;
                }
            }
            ?>
        </ul>
    </div>
    <div class="box">
        <h3>Admit Cards</h3>
        <ul class="link-list">
            <?php 
            $count = 0;
            foreach ($all_links as $file => $name) {
                if (strpos(strtolower($name), 'admit') !== false) {
                    echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
                    if (++$count >= 15) break;
                }
            }
            ?>
        </ul>
    </div>
    <div class="box">
        <h3>Trending</h3>
        <ul class="link-list">
            <?php 
            $count = 0;
            foreach ($all_links as $file => $name) {
                if (strpos(strtolower($name), 'result') === false && strpos(strtolower($name), 'admit') === false) {
                    echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
                    if (++$count >= 15) break;
                }
            }
            ?>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
