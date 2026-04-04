<?php
/**
 * master_audit_m123.php
 * Comprehensive audit for univindia.online SEO Scaling #1-500.
 */
$conn = new mysqli('localhost', 'root', '', 'univindia_db');
$keywords = file('c:\\xampp\\htdocs\\univindia\\keyword.txt\\keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

echo "Milestone 1, 2, 3 Audit (#1-500)\n";
echo "ID | Keyword | File Exist | DB Entry\n";
echo "---|---------|-----------|---------\n";

$missing_files = [];
$missing_db = [];

for ($i = 0; $i < 500; $i++) {
    $id = $i + 1;
    $keyword = trim($keywords[$i]);
    $filename = str_replace(' ', '-', $keyword) . ".php";
    $filename = str_replace(['(', ')', '.', '!', '@', '#', '$'], '', $filename); // Simplified slug logic
    
    $file_exists = file_exists("C:\\xampp\\htdocs\\univindia\\pages\\" . $filename);
    
    $res = $conn->query("SELECT id FROM links WHERE title = '".$conn->real_escape_string($keyword)."'");
    $db_exists = ($res->num_rows > 0);
    
    if (!$file_exists) $missing_files[] = "$id: $keyword ($filename)";
    if (!$db_exists) $missing_db[] = "$id: $keyword";
    
    // Summary progress every 50
    if ($id % 50 == 0) {
        echo "$id | Summary check... | " . count($missing_files) . " missing files | " . count($missing_db) . " missing db\n";
    }
}

echo "\n--- FINAL AUDIT RESULTS ---\n";
echo "Total Missing Files: " . count($missing_files) . "\n";
echo "Total Missing DB Entries: " . count($missing_db) . "\n";

if (count($missing_db) > 0) {
    echo "\nSample Missing DB (First 10):\n";
    print_r(array_slice($missing_db, 0, 10));
}

$conn->close();
?>
