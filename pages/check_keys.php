<?php
$link_map = [];
include 'c:\xampp\htdocs\univindia\includes\link_map.php';
foreach(array_keys($link_map) as $k) {
    if ($k !== strtolower($k)) {
        echo "Non-lowercase key: $k\n";
    }
}
?>

