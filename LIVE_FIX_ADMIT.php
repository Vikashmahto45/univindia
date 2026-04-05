<?php
// Production-safe DB Fix Script for Admit Card Category
require_once __DIR__ . '/includes/config.php';

echo "<h2>Fixing Admit Card Categories on Production</h2>";

// The Category ID for "Admit Card"
$catId = 2; // Usually 2

$sql = "UPDATE links SET category_id = $catId WHERE (category_id IS NULL OR category_id = 0) AND (title LIKE '%Admit%' OR title LIKE '%admit%')";
if ($conn->query($sql) === TRUE) {
    echo "<p>Successfully updated " . $conn->affected_rows . " records to Category: Admit Card!</p>";
} else {
    echo "<p>Error updating records: " . $conn->error . "</p>";
}
echo "<p><b>Database sync complete. You can safely delete this file from production after running.</b></p>";
?>
