<?php 
include '../header.php'; 
$page_title = ""; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; </div>
    <h2 class='sr-title'></h2>
    <div class='sr-content'>
        $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = file('all_pages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = array_filter($files, function($f) { return str_ends_with($f, '.php'); });
$files = array_map('trim', $files);

$out = "
    </div>
</div>


<?php include '../footer.php'; ?>