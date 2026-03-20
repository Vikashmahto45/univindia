<?php 
include '../header.php'; 
$page_title = "Find_missing"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; Find_missing</div>
    <h2 class='sr-title'>Find_missing</h2>
    <div class='sr-content'>
        <?php 
include '../header.php'; 
$page_title = "Find_missing"; 
$meta_description = ""; 
$meta_keywords = ""; 
?>


    
    
    
        <?php
$link_map = include '../includes/link_map.php';
$keywords = file('keyword.txt');
array_shift($keywords); // Skip header

echo "Total map entries: " . count($link_map) . PHP_EOL;

foreach(['rrb ntpc admit card', 'neet admit card 2024'] as $test) {
    echo "Testing '$test': " . (isset($link_map[$test]) ? "FOUND" : "NOT FOUND") . PHP_EOL;
}

$count = 0;
foreach($keywords as $i => $k) {
    $raw = $k;
    $k = trim($k);
    if(empty($k)) continue;
    
    // Check for exact match after trim
    if(!isset($link_map[$k])) {
        echo ($i+2) . ": '" . $k . "' (len: " . strlen($k) . ") NOT FOUND" . PHP_EOL;
        $count++;
        if($count >= 10) break;
    }
}
unlink(__FILE__);
    


<?php include '../footer.php'; ?>
    </div>
</div>


<?php include '../footer.php'; ?>