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
        $content = file_get_contents('c:\xampp\htdocs\univindia\includes\link_map.php');
preg_match_all("/'(.+?)' => '(.+?)'/", $content, $matches);
$keys = $matches[1];
$counts = array_count_values($keys);
foreach ($counts as $key => $count) {
    if ($count > 1) {
        echo "Duplicate Key: $key ($count times)\n";
    }
}
    </div>
</div>


<?php include '../footer.php'; ?>