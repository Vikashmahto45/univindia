<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Latest Job Notifications - Official Sarkari Result List 2025";
include __DIR__ . '/header.php';

// Dynamic Page Discovery
$pages_dir = __DIR__ . '/pages/';
$all_links = [];
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && substr($file, -4) === '.php') {
            $name = ucwords(str_replace(['-', '.php'], [' ', ''], $file));
            if (strpos(strtolower($name), 'job') !== false) {
                $all_links[$file] = $name;
            }
        }
    }
}
?>

<div class="sr-page-wrapper">
    <div class="sr-breadcrumb"><a href="<?php echo BASE_URL; ?>">Home</a> &raquo; Latest Jobs &raquo; All Jobs</div>
    <h2 class="sr-title">New Recruitment & Job Notifications 2025</h2>
    
    <div class="sr-content">
        <p>Direct official links for the latest government jobs, private sector recruitment, and apprenticeship notifications across all Indian states.</p>
        
        <ul class="sr-list">
            <?php 
            foreach ($all_links as $file => $name) {
                echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
            }
            if (empty($all_links)) {
                echo "<li>NTA NEET UG 2025 Apply Online</li>";
                echo "<li>CUET PG 2025 Registration Open</li>";
                echo "<li>UP Police Constable Re-Exam Date</li>";
                echo "<li>SSC GD Constable 2025 Notification</li>";
                echo "<li>Coming Soon...</li>";
            }
            ?>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
