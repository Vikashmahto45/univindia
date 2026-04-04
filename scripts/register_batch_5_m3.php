<?php
/**
 * register_batch_5_m3.php
 * Final registration script for Milestone #3 (#401-500).
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "univindia_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$keywords = [
    ["nmms admit card", "nmms-admit-card.php"],
    ["nmmse admit card", "nmmse-admit-card.php"],
    ["nta admit card", "nta-admit-card.php"],
    ["nta neet admit card 2022", "nta-neet-admit-card-2022.php"],
    ["nta net admit card 2022 release date", "nta-net-admit-card-2022-release-date.php"],
    ["odisha jee admit card", "odisha-jee-admit-card.php"],
    ["odisha police admit card", "odisha-police-admit-card.php"],
    ["ojee admit card", "ojee-admit-card.php"],
    ["pdusu admit card", "pdusu-admit-card.php"],
    ["peb mp gov in admit card", "peb-mp-gov-in-admit-card.php"],
    ["ptetraj2021.com admit card 2021", "ptetraj2021-com-admit-card-2021.php"],
    ["pup admit card", "pup-admit-card.php"],
    ["railway rpf constable admit card 2025", "railway-rpf-constable-admit-card-2025.php"],
    ["rajasthan university admit card", "rajasthan-university-admit-card.php"],
    ["reet admit card 2025 official website", "reet-admit-card-2025-official-website.php"],
    ["rrb bank po admit card", "rrb-bank-po-admit-card.php"],
    ["rrb clerk admit card", "rrb-clerk-admit-card.php"],
    ["rrb group d admit card 2022", "rrb-group-d-admit-card-2022.php"],
    ["rrb je admit card 2024", "rrb-je-admit-card-2024.php"],
    ["rrb ntpc admit card download", "rrb-ntpc-admit-card-download.php"]
];

$category_id = 2; // Admit Card category
$success = 0;
$failed = 0;

foreach ($keywords as $item) {
    $title = $conn->real_escape_string($item[0]);
    $url = $conn->real_escape_string($item[1]);
    
    // Check if already exists to prevent duplicates
    $check = $conn->query("SELECT id FROM links WHERE url = '$url'");
    if ($check->num_rows > 0) {
        echo "Skipped (exists): $title\n";
        continue;
    }

    $sql = "INSERT INTO links (title, url, category_id) VALUES ('$title', '$url', $category_id)";
    if ($conn->query($sql) === TRUE) {
        $success++;
        echo "Registered: $title\n";
    } else {
        $failed++;
        echo "Error: " . $conn->error . "\n";
    }
}

echo "\nSummary: $success registered, $failed failed.\n";
$conn->close();
?>
