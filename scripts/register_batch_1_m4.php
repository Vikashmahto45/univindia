<?php 
/**
 * register_batch_1_m4.php - Registers pages #501 to #520 in the univindia_db.links table.
 * Category ID: 2 (Admit Card)
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "univindia_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category_id = 2; // Admit Card

$pages = [
    ["title" => "rrb po admit card", "url" => "pages/rrb-po-admit-card.php"],
    ["title" => "rrb rpf constable admit card", "url" => "pages/rrb-rpf-constable-admit-card.php"],
    ["title" => "sbi po admit card 2022", "url" => "pages/sbi-po-admit-card-2022.php"],
    ["title" => "sbi po admit card 2023", "url" => "pages/sbi-po-admit-card-2023.php"],
    ["title" => "ssc admit card 2024", "url" => "pages/ssc-admit-card-2024.php"],
    ["title" => "ssc cgl 2022 admit card", "url" => "pages/ssc-cgl-2022-admit-card.php"],
    ["title" => "ssc gd admit card 2025 release date", "url" => "pages/ssc-gd-admit-card-2025-release-date.php"],
    ["title" => "ssc je admit card", "url" => "pages/ssc-je-admit-card.php"],
    ["title" => "ssc phase 9 admit card", "url" => "pages/ssc-phase-9-admit-card.php"],
    ["title" => "ssc stenographer admit card", "url" => "pages/ssc-stenographer-admit-card.php"],
    ["title" => "sscsr admit card 2020", "url" => "pages/sscsr-admit-card-2020.php"],
    ["title" => "ugc net admit card december 2024", "url" => "pages/ugc-net-admit-card-december-2024.php"],
    ["title" => "ukpsc admit card", "url" => "pages/ukpsc-admit-card.php"],
    ["title" => "uniraj admit card 2022", "url" => "pages/uniraj-admit-card-2022.php"],
    ["title" => "uok admit card", "url" => "pages/uok-admit-card.php"],
    ["title" => "up board admit card", "url" => "pages/up-board-admit-card.php"],
    ["title" => "up police constable admit card 2024", "url" => "pages/up-police-constable-admit-card-2024.php"],
    ["title" => "upsc admit card 2023", "url" => "pages/upsc-admit-card-2023.php"],
    ["title" => "upsssc pet admit card 2022", "url" => "pages/upsssc-pet-admit-card-2022.php"],
    ["title" => "vdo admit card 2021", "url" => "pages/vdo-admit-card-2021.php"]
];

$success_count = 0;
$error_count = 0;

foreach ($pages as $page) {
    $title = $conn->real_escape_string($page['title']);
    $url = $conn->real_escape_string($page['url']);
    
    // Check if already exists
    $check_sql = "SELECT id FROM links WHERE url = '$url' LIMIT 1";
    $result = $conn->query($check_sql);
    
    if ($result->num_rows == 0) {
        $sql = "INSERT INTO links (category_id, title, url) VALUES ($category_id, '$title', '$url')";
        if ($conn->query($sql) === TRUE) {
            $success_count++;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error . "\n";
            $error_count++;
        }
    } else {
        echo "Skipping (already exists): $url\n";
    }
}

echo "\nRegistration Complete!\n";
echo "Successfully registered: $success_count\n";
echo "Errors: $error_count\n";

$conn->close();
?>
