<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Latest Admit Cards - Official Sarkari Result List 2025";
include __DIR__ . '/header.php';

// Dynamic Page Discovery
$pages_dir = __DIR__ . '/pages/';
$all_links = [];
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && substr($file, -4) === '.php') {
            $name = ucwords(str_replace(['-', '.php'], [' ', ''], $file));
            if (strpos(strtolower($name), 'admit') !== false) {
                $all_links[$file] = $name;
            }
        }
    }
}
?>

<div class="sr-page-wrapper">
    <div class="sr-breadcrumb"><a href="<?php echo BASE_URL; ?>">Home</a> &raquo; Admit Cards &raquo; All Admit Cards</div>
    <h2 class="sr-title">Latest Examination Admit Cards 2025</h2>
    
    <div class="sr-content">
        <p>Download admit cards for all major national exams, university semester tests, and recruitment examinations. Use the official links provided below.</p>
        
        <ul class="sr-list" style="column-count: 2; column-gap: 30px;">
            <?php 
            foreach ($all_links as $file => $name) {
                echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
            }
            if (empty($all_links)) echo "<li>No admit card pages found yet.</li>";
            ?>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
