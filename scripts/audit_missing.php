<?php
$conn = new mysqli('localhost', 'root', '', 'univindia_db');
$keywords = file('c:\\xampp\\htdocs\\univindia\\keyword.txt\\keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$missing = [];

for ($i = 0; $i < 500; $i++) {
    $title = trim($keywords[$i]);
    $res = $conn->query("SELECT id FROM links WHERE title = '".$conn->real_escape_string($title)."'");
    if ($res->num_rows == 0) {
        $missing[] = ($i + 1) . ": " . $title;
    }
}

echo "Total missing from #1-500: " . count($missing) . "\n";
foreach ($missing as $m) {
    echo $m . "\n";
}
$conn->close();
?>
