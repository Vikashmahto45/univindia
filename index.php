<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Sarkari Result - Univindia Official Result Gateway 2025";
include __DIR__ . '/header.php';

// Dynamic Page Discovery
$pages_dir = __DIR__ . '/pages/';
$all_links = [];
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

<div class="sr-main-grid">
    <!-- Results Column -->
    <div class="sr-panel">
        <div class="sr-panel-header">Results</div>
        <ul class="sr-list">
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
    
    <!-- Admit Card Column -->
    <div class="sr-panel">
        <div class="sr-panel-header">Admit Card</div>
        <ul class="sr-list">
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
    
    <!-- Latest Jobs Column -->
    <div class="sr-panel">
        <div class="sr-panel-header">Latest Jobs</div>
        <ul class="sr-list">
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

<!-- Category Table Section -->
<div class="sr-panel" style="margin-top: 20px;">
    <div class="sr-panel-header">Important Category Gateways</div>
    <table class="sr-table">
        <tr>
            <td><a href="#">MGSU Result</a></td>
            <td><a href="#">MSBU Result</a></td>
            <td><a href="#">RRBMU Result</a></td>
        </tr>
        <tr>
            <td><a href="#">BA 1st Year</a></td>
            <td><a href="#">BSc 1st Year</a></td>
            <td><a href="#">BCom 1st Year</a></td>
        </tr>
    </table>
</div>

<?php include __DIR__ . '/footer.php'; ?>
