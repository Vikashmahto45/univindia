<?php
/**
 * register_batch_6.php - Register Batch 6 (#381-400) into univindia_db.links
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
    ['title' => 'CU Admit Card', 'url' => 'pages/cu-admit-card.php'],
    ['title' => 'CU Exam Admit Card', 'url' => 'pages/cu-exam-admit-card.php'],
    ['title' => 'CUET Admit Card', 'url' => 'pages/cuet-admit-card.php'],
    ['title' => 'CUET 2023 Admit Card', 'url' => 'pages/cuet-admit-card-2023.php'],
    ['title' => 'CUET Admit Card Download', 'url' => 'pages/cuet-admit-card-download.php'],
    ['title' => 'CUET Samarth Admit Card', 'url' => 'pages/cuet-samarth-ac-in-admit-card.php'],
    ['title' => 'CUET UG Admit Card', 'url' => 'pages/cuet-ug-admit-card.php'],
    ['title' => 'DA V V Admit Card', 'url' => 'pages/da-v-v-admit-card.php'],
    ['title' => 'DAVV Admit Card', 'url' => 'pages/davv-admit-card.php'],
    ['title' => 'DBT BET Admit Card', 'url' => 'pages/dbt-bet-admit-card.php'],
    ['title' => 'DELED Admit Card', 'url' => 'pages/deled-admit-card.php'],
    ['title' => 'DGFS Admit Card', 'url' => 'pages/dgfs-admit-card.php'],
    ['title' => 'DG Shipping Admit Card', 'url' => 'pages/dgshipping-admit-card.php'],
    ['title' => 'DIET Admit Card', 'url' => 'pages/diet-admit-card.php'],
    ['title' => 'DMLT Admit Card', 'url' => 'pages/dmlt-admit-card.php'],
    ['title' => 'DRDO Admit Card', 'url' => 'pages/drdo-admit-card.php'],
    ['title' => 'DRDO CEPTAM 10 Admit Card', 'url' => 'pages/drdo-ceptam-10-admit-card.php'],
    ['title' => 'DST Bihar Admit Card', 'url' => 'pages/dst-bihar-admit-card.php'],
    ['title' => 'DU Admit Card', 'url' => 'pages/du-admit-card.php'],
    ['title' => 'Electricity Board Admit Card', 'url' => 'pages/eb-admit-card.php'],
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

echo "Successfully registered $count new pages in Batch 6. Milestone #301-400 Complete!";
$conn->close();
?>
