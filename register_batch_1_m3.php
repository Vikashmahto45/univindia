<?php
/**
 * register_batch_1_m3.php - Register Batch 1 of Milestone 3 (#401-420) into univindia_db.links
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
    ['title' => 'UPJEE Admit Card', 'url' => 'pages/upjee-admit-card.php'],
    ['title' => 'WBP Admit Card Download', 'url' => 'pages/wbp-admit-card-download.php'],
    ['title' => 'XLRI XAT Admit Card', 'url' => 'pages/xlri-xat-admit-card.php'],
    ['title' => '10th Admit Card 2023', 'url' => 'pages/10th-admit-card-2023.php'],
    ['title' => '10th Admit Card 2024', 'url' => 'pages/10th-admit-card-2024.php'],
    ['title' => 'Admit Card Download 2024', 'url' => 'pages/admit-card-download-2024.php'],
    ['title' => 'Admit Card for BITSAT', 'url' => 'pages/admit-card-for-bitsat.php'],
    ['title' => 'Admit Card for SSC GD', 'url' => 'pages/admit-card-for-ssc-gd-constable-exam.php'],
    ['title' => 'JEE Mains 2021 Admit Card', 'url' => 'pages/admit-card-jee-mains-2021.php'],
    ['title' => 'NEET 2021 Admit Card', 'url' => 'pages/admit-card-neet-2021.php'],
    ['title' => 'UOK Admit Card', 'url' => 'pages/admit-card-uok.php'],
    ['title' => 'UPMSP Admit Card', 'url' => 'pages/admit-card-upmsp.php'],
    ['title' => 'AFCAT 2 2021 Admit Card', 'url' => 'pages/afcat-2-2021-admit-card.php'],
    ['title' => 'ICAR Admit Card', 'url' => 'pages/aicar-admit-card.php'],
    ['title' => 'AOC Admit Card', 'url' => 'pages/aoc-admit-card.php'],
    ['title' => 'B.Ed Admit Card', 'url' => 'pages/b-ed-admit-card.php'],
    ['title' => 'Bihar Board Admit Card 2024', 'url' => 'pages/bihar-board-admit-card-2024.php'],
    ['title' => 'Bihar D.El.Ed Admit Card', 'url' => 'pages/bihar-deled-admit-card.php'],
    ['title' => 'BITSAT Admit Card (Official)', 'url' => 'pages/bitsat-admit-card.php'],
    ['title' => 'BPSC Teacher Admit Card', 'url' => 'pages/bpsc-teacher-admit-card.php'],
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

echo "Successfully registered $count new pages in Batch 1 (M3).";
$conn->close();
?>
