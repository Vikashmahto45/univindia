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

