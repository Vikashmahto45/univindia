<?php 
include '../header.php'; 
$page_title = ""; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = file('all_pages.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$files = array_filter($files, function($f) { return str_ends_with($f, '.php'); });
$files = array_map('trim', $files);

$out = "

<?php include '../footer.php'; ?>
