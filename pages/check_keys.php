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
        $link_map = [];
include 'c:\xampp\htdocs\univindia\includes\link_map.php';
foreach(array_keys($link_map) as $k) {
    if ($k !== strtolower($k)) {
        echo "Non-lowercase key: $k\n";
    }
}
    </div>
</div>


<?php include '../footer.php'; ?>