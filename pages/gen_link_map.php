<?php 
include '../header.php'; 
$page_title = "Gen_link_map"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; Gen_link_map</div>
    <h2 class='sr-title'>Gen_link_map</h2>
    <div class='sr-content'>
        <?php 
include '../header.php'; 
$page_title = "Gen_link_map"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>


    
    
    
        <?php
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = file('all_pages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = array_filter($files, function($f) { return str_ends_with($f, '.php'); });
$files = array_map('trim', $files);

$out = "<?php\n\$link_map = [\n";
foreach ($keywords as $keyword) {
    $keyword = trim($keyword);
    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', $keyword));
    $slug = trim($slug, '-');
    $match = "";
    foreach ($files as $file) {
        if ($file === $slug . '.php' || strpos($file, $slug) === 0 || strpos($file, $slug) !== false) {
            $match = $file;
            break;
        }
    }
    if ($match) {
        $out .= "    '" . addslashes($keyword) . "' => '$match',\n";
    }
}
$out .= "];\n";
file_put_contents('includes/link_map.php', $out);
echo "Mapping complete: includes/link_map.php updated.\n";
    


<?php include '../footer.php'; ?>
    </div>
</div>


<?php include '../footer.php'; ?>