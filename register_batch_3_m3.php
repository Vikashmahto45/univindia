<?php
/**
 * register_batch_3_m3.php
 * Registers Batch 3 (#441-460) of Milestone 3 into univindia_db.links
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
    ['ddu-ac-in-admit-card.php', 'DDU Admit Card: DDU Gorakhpur University Hall Ticket'],
    ['delhi-forest-guard-admit-card.php', 'Delhi Forest Guard Admit Card: Selection Hall Ticket'],
    ['delhi-forest-guard-admit-card-2024.php', 'Official Delhi Forest Guard Admit Card 2024: Selection access'],
    ['downloads-bseb-dummy-admit-card.php', 'Downloads BSEB Dummy Admit Card: Board selection Hall Ticket'],
    ['dsssb-admit-card.php', 'Official DSSSB Admit Card: Delhi selection Hall Ticket Access'],
    ['dsssb-admit-card-2024.php', 'Official DSSSB Admit Card 2024: Delhi selection Hall Ticket'],
    ['dsssb-admit-card-download.php', 'Official DSSSB Admit Card Download: Delhi selection Hall Ticket'],
    ['dsssb-pgt-admit-card.php', 'Official DSSSB PGT Admit Card: Delhi selection Hall Ticket Access'],
    ['dummy-admit-card.php', 'Official Dummy Admit Card: Board selection Hall Ticket Correction'],
    ['dummy-admit-card-2024.php', 'Official Dummy Admit Card 2024: Board selection Hall Ticket'],
    ['dummy-admit-card-2024-class-10.php', 'Official Dummy Admit Card 2024 Class 10: BSEB selection'],
    ['dummy-admit-card-2024-class-12.php', 'Official Dummy Admit Card 2024 Class 12: BSEB selection'],
    ['dummy-admit-card-download.php', 'Official Dummy Admit Card Download: Board selection Hall Ticket'],
    ['e-admit-card-upsc.php', 'Official UPSC e-Admit Card: Union selection Hall Ticket Access'],
    ['emrs-admit-card.php', 'Official EMRS Admit Card: National selection Hall Ticket Access'],
    ['emrs-admit-card-2023.php', 'Official EMRS Admit Card 2023: National selection Hall Ticket'],
    ['emrs-admit-card-2024.php', 'Official EMRS Admit Card 2024: National selection Hall Ticket'],
    ['epfo-admit-card.php', 'Official EPFO Admit Card: Professional selection Hall Ticket'],
    ['fci-admit-card.php', 'Official FCI Admit Card: Food selection Hall Ticket Access'],
    ['fci-admit-card-2024.php', 'Official FCI Admit Card 2024: Food selection Hall Ticket Access']
];

$category_id = 2; // Admit Card
$stmt = $conn->prepare("INSERT INTO links (category_id, link, title) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $category_id, $link, $title);

foreach ($pages as $page) {
    $link = 'pages/' . $page[0];
    $title = $page[1];
    if ($stmt->execute()) {
        echo "Registered: " . $title . "<br>";
    } else {
        echo "Error registering " . $title . ": " . $stmt->error . "<br>";
    }
}

$stmt->close();
$conn->close();
echo "Batch 3 Registration Complete.";
?>
