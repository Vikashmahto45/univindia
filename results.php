<?php 
require_once __DIR__ . '/includes/config.php';
$page_title = "Latest Results - Official Sarkari Result List 2025";
include __DIR__ . '/header.php';

// Dynamic Page Discovery
$pages_dir = __DIR__ . '/pages/';
$all_links = [];
if (is_dir($pages_dir)) {
    $files = scandir($pages_dir);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && substr($file, -4) === '.php') {
            $name = ucwords(str_replace(['-', '.php'], [' ', ''], $file));
            if (strpos(strtolower($name), 'result') !== false) {
                $all_links[$file] = $name;
            }
        }
    }
}
?>

<div class="sr-page-wrapper">
    <div class="sr-breadcrumb"><a href="<?php echo BASE_URL; ?>">Home</a> &raquo; Results &raquo; All Results</div>
    <h2 class="sr-title">National & State Board Results 2025</h2>
    
    <div class="sr-content">
        <p>Access the complete list of all active university board results, primary standard results, and secondary high school result portals across India. Click on any link below for direct gateway access.</p>
        
        <ul class="sr-list">
            <?php 
            foreach ($all_links as $file => $name) {
                echo '<li><a href="'.BASE_URL.$file.'">'.$name.'</a></li>';
            }
            if (empty($all_links)) echo "<li>No result pages found yet.</li>";
            ?>
        </ul>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
