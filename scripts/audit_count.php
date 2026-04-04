<?php
$conn = new mysqli('localhost', 'root', '', 'univindia_db');
$res = $conn->query('SELECT count(*) as count FROM links WHERE category_id = 2');
echo $res->fetch_assoc()['count'];
$conn->close();
?>
