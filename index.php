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
            // Ignore system scripts
            $scripts = ['generate_sitemap.php', 'get_next_15.php', 'deep_clean.php', 'sync_paths.php', 'sr_update.php', 'absolute_pure.php', 'mass_update.php'];
            if (in_array($file, $scripts)) continue;
            
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
            if ($count == 0) echo "<li>Coming Soon...</li>";
            ?>
        </ul>
        <div style="text-align:center; padding: 10px;">
            <a href="<?php echo BASE_URL; ?>results.php" class="view-more-btn">View More</a>
        </div>
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
            if ($count == 0) echo "<li>Coming Soon...</li>";
            ?>
        </ul>
        <div style="text-align:center; padding: 10px;">
            <a href="<?php echo BASE_URL; ?>admit-cards.php" class="view-more-btn">View More</a>
        </div>
    </div>
    
    <!-- Latest Jobs Column -->
    <div class="sr-panel">
        <div class="sr-panel-header">Latest Jobs</div>
        <ul class="sr-list">
            <?php 
            $count = 0;
            foreach ($all_links as $file => $name) {
                // Only show if explicitly a job page or not a result/admit Card
                if (strpos(strtolower($name), 'job') !== false) {
                    echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
                    $count++;
                    if ($count >= 15) break;
                }
            }
            if ($count == 0) {
                echo "<li>NTA NEET UG 2025 Apply Online</li>";
                echo "<li>CUET PG 2025 Registration Open</li>";
                echo "<li>UP Police Constable Re-Exam Date</li>";
                echo "<li>SSC GD Constable 2025 Notification</li>";
            }
            ?>
        </ul>
        <div style="text-align:center; padding: 10px;">
            <a href="<?php echo BASE_URL; ?>latest-jobs.php" class="view-more-btn">View More</a>
        </div>
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
