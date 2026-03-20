<?php 
include '../header.php'; 
$page_title = "Check_keys"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; Check_keys</div>
    <h2 class='sr-title'>Check_keys</h2>
    <div class='sr-content'>
        <?php 
include '../header.php'; 
$page_title = "Check_keys"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>


    
    
    
        <?php
$link_map = [];
include 'c:\xampp\htdocs\univindia\includes\link_map.php';
foreach(array_keys($link_map) as $k) {
    if ($k !== strtolower($k)) {
        echo "Non-lowercase key: $k\n";
    }
}
?>
    


<?php include '../footer.php'; ?>
    </div>
</div>


<?php include '../footer.php'; ?>