<?php 
include '../header.php'; 
$page_title = "Debug_index"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; Debug_index</div>
    <h2 class='sr-title'>Debug_index</h2>
    <div class='sr-content'>
        <?php 
include '../header.php'; 
$page_title = "Debug_index"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>


    
    
    
        <?php
include '../includes/link_map.php';
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$filter = 'result';
$count = 0;
$limit = 15;
echo "Testing 'result' filter:\n";
foreach ($keywords as $keyword) {
    $clean_kw = strtolower(trim($keyword));
    if (isset($link_map[$clean_kw]) && (empty($filter) || strpos($clean_kw, $filter) !== false)) {
        echo "Found: " . $clean_kw . " => " . $link_map[$clean_kw] . "\n";
        $count++;
    }
    if ($count >= $limit) break;
}
if ($count == 0) {
    echo "No results found.\n";
}
?>
    


<?php include '../footer.php'; ?>
    </div>
</div>


<?php include '../footer.php'; ?>