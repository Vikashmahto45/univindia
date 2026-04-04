<?php
/**
 * register_batch_4_m3.php
 * Registers Batch 4 (#461-480) of Milestone 3 into univindia_db.links
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "univindia_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category_id = 2; // Admit Card
$pages = [
    ['title' => 'Official KVS Admit Card: National selection Hall Ticket Access', 'url' => 'pages/kvs-admit-card.php'],
    ['title' => 'Official KVS Admit Card 2024: National selection Hall Ticket Access', 'url' => 'pages/kvs-admit-card-2024.php'],
    ['title' => 'Official MPPSC Admit Card: State selection Hall Ticket Access', 'url' => 'pages/mppsc-admit-card.php'],
    ['title' => 'Official MPPSC Admit Card 2024: State selection Hall Ticket Access', 'url' => 'pages/mppsc-admit-card-2024.php'],
    ['title' => 'Official MPTET Admit Card: MP selection Hall Ticket Access', 'url' => 'pages/mptet-admit-card.php'],
    ['title' => 'Official MPSI Admit Card: MP selection Hall Ticket Access', 'url' => 'pages/mpsi-admit-card.php'],
    ['title' => 'Official MPSI Admit Card 2024: MP selection Hall Ticket Access', 'url' => 'pages/mpsi-admit-card-2024.php'],
    ['title' => 'Official Narsee Monjee Admit Card: NMIMS selection Hall Ticket Access', 'url' => 'pages/narsee-monjee-admit-card.php'],
    ['title' => 'Official Navodaya Admit Card: JNVST selection Hall Ticket Access', 'url' => 'pages/navodaya-admit-card.php'],
    ['title' => 'Official Navodaya Admit Card 2024: JNVST selection Hall Ticket Access', 'url' => 'pages/navodaya-admit-card-2024.php'],
    ['title' => 'Official NEET Admit Card: Medical selection Hall Ticket Access', 'url' => 'pages/neet-admit-card.php'],
    ['title' => 'Official NEET Admit Card 2024: Medical selection Hall Ticket Access', 'url' => 'pages/neet-admit-card-2024.php'],
    ['title' => 'Official NEET PG Admit Card: PG selection Hall Ticket Access', 'url' => 'pages/neet-pg-admit-card.php'],
    ['title' => 'Official NEET PG Admit Card 2024: PG selection Hall Ticket Access', 'url' => 'pages/neet-pg-admit-card-2024.php'],
    ['title' => 'Official NEET UG Admit Card: Medical selection Hall Ticket Access', 'url' => 'pages/neet-ug-admit-card.php'],
    ['title' => 'Official NEET UG Admit Card 2024: Medical selection Hall Ticket Access', 'url' => 'pages/neet-ug-admit-card-2024.php'],
    ['title' => 'Official NET Admit Card: National selection Hall Ticket Access', 'url' => 'pages/net-admit-card.php'],
    ['title' => 'Official NET Admit Card 2024: National selection Hall Ticket Access', 'url' => 'pages/net-admit-card-2024.php'],
    ['title' => 'Official NSTSE Admit Card: National selection Hall Ticket Access', 'url' => 'pages/nstse-admit-card.php'],
    ['title' => 'Official NTPC Admit Card: Railway selection Hall Ticket Access', 'url' => 'pages/ntpc-admit-card.php'],
];

$stmt = $conn->prepare("INSERT INTO links (category_id, title, url) VALUES (?, ?, ?)");

$count = 0;
foreach ($pages as $page) {
    $stmt->bind_param("iss", $category_id, $page['title'], $page['url']);
    if ($stmt->execute()) {
        $count++;
    } else {
        echo "Error registering " . $page['url'] . ": " . $conn->error . "\n";
    }
}

echo "Successfully registered $count pages for Batch 4.\n";

$stmt->close();
$conn->close();
?>
