<?php
/**
 * register_batch_2_m3.php - Register Batch 2 of Milestone 3 (#421-440) into univindia_db.links
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

$pages = [
    ['title' => 'BSEB Admit Card 2021', 'url' => 'pages/bseb-admit-card-2021.php'],
    ['title' => 'BSEB Dummy Admit Card', 'url' => 'pages/bseb-dummy-admit-card.php'],
    ['title' => 'CBSE Admit Card Download', 'url' => 'pages/cbse-admit-card-download.php'],
    ['title' => 'CDS Admit Card (UPSC)', 'url' => 'pages/cds-admit-card.php'],
    ['title' => 'CDS Admit Card 2025', 'url' => 'pages/cds-admit-card-2025.php'],
    ['title' => 'CG Forest Guard Admit Card 2024', 'url' => 'pages/cg-forest-guard-admit-card-2024.php'],
    ['title' => 'SSC CGL Admit Card 2022', 'url' => 'pages/cgl-admit-card-2022.php'],
    ['title' => 'CSBC Bihar Admit Card', 'url' => 'pages/csbc-admit-card.php'],
    ['title' => 'CTET 2024 Exam City', 'url' => 'pages/ctet-admit-card-2024-exam-city.php'],
    ['title' => 'CTET 2024 Link Login', 'url' => 'pages/ctet-admit-card-2024-link-login.php'],
    ['title' => 'CTET 2021 Download Link', 'url' => 'pages/ctet-nic-in-admit-card-2021-download.php'],
    ['title' => 'CTET 2022 Admit Card', 'url' => 'pages/ctet-nic-in-admit-card-2022.php'],
    ['title' => 'CUET 2022 Release Date', 'url' => 'pages/cuet-admit-card-2022-release-date.php'],
    ['title' => 'CUET 2024 Release Date', 'url' => 'pages/cuet-admit-card-2024-release-date.php'],
    ['title' => 'CUET UG 2022 Admit Card', 'url' => 'pages/cuet-ug-admit-card-2022.php'],
    ['title' => 'DAVV Admit Card 2024', 'url' => 'pages/davv-admit-card-2024.php'],
    ['title' => 'DDU Gorakhpur Admit Card', 'url' => 'pages/ddu-admit-card.php'],
    ['title' => 'DDU GKP Admit Card', 'url' => 'pages/ddu-gkp-admit-card.php'],
    ['title' => 'DDU Gorakhpur Hall Ticket', 'url' => 'pages/ddu-gorakhpur-admit-card.php'],
    ['title' => 'DDU University Admit Card', 'url' => 'pages/ddu-university-admit-card.php'],
];

$category_id = 2; // Admit Card
$count = 0;

foreach ($pages as $page) {
    $title = $conn->real_escape_string($page['title']);
    $url = $conn->real_escape_string($page['url']);
    
    // Check if exists
    $check = $conn->query("SELECT id FROM links WHERE url = '$url'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO links (category_id, title, url) VALUES ($category_id, '$title', '$url')";
        if ($conn->query($sql) === TRUE) {
            $count++;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

echo "Successfully registered $count new pages in Batch 2 (M3).";
$conn->close();
?>
