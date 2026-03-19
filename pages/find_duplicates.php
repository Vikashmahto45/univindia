<?php include '../header.php'; ?>
<?php
$content = file_get_contents('c:\xampp\htdocs\univindia\includes\link_map.php');
preg_match_all("/'(.+?)' => '(.+?)'/", $content, $matches);
$keys = $matches[1];
$counts = array_count_values($keys);
foreach ($counts as $key => $count) {
    if ($count > 1) {
        echo "Duplicate Key: $key ($count times)\n";
    }
}
?>
<?php include '../footer.php'; ?>