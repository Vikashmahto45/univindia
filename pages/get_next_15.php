<?php 
include '../header.php'; 
$page_title = ""; 
$meta_description = ""; 
$meta_keywords = ""; 
?>

$link_map = include '../includes/link_map.php';
$keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$missing = [];
foreach ($keywords as $kw) {
    $kw = trim($kw);
    if ($kw === 'Keyword') continue;
    if (!isset($link_map[$kw])) {
        $missing[] = $kw;
    }
}
$next_batch = array_slice($missing, 0, 15);
file_put_contents('group_12_keywords.txt', implode("\n", $next_batch));
echo "SUCCESS: Group 12 keywords written to group_12_keywords.txt\n";

<?php include '../footer.php'; ?>
