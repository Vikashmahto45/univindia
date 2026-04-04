<?php
/**
 * register_batch_4_admit_cards.php
 * Registers pages #561 to #580 in the univindia database.
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
    ["cuet 2023 admit card", "cuet-2023-admit-card.php"],
    ["cuet pg 2023 admit card", "cuet-pg-2023-admit-card.php"],
    ["cuetsamarthacin 2023 admit card", "cuetsamarthacin-2023-admit-card.php"],
    ["epfo admit card 2023", "epfo-admit-card-2023.php"],
    ["esic admit card 2022", "esic-admit-card-2022.php"],
    ["gd admit card 2025", "gd-admit-card-2025.php"],
    ["htet admit card 2021", "htet-admit-card-2021.php"],
    ["ib sa admit card", "ib-sa-admit-card.php"],
    ["ibps rrb clerk admit card", "ibps-rrb-clerk-admit-card.php"],
    ["icaiexam org admit card", "icaiexam-org-admit-card.php"],
    ["icar admit card 2022", "icar-admit-card-2022.php"],
    ["icmai in admit card", "icmai-in-admit-card.php"],
    ["iim cat admit card", "iim-cat-admit-card.php"],
    ["indian army admit card 2021", "indian-army-admit-card-2021.php"],
    ["iti admit card 2024", "iti-admit-card-2024.php"],
    ["jail pheri admit card", "jail-pheri-admit-card.php"],
    ["jail prahari admit card", "jail-prahari-admit-card.php"],
    ["jee main admit card 2022 release date and time", "jee-main-admit-card-2022-release-date-and-time.php"],
    ["jee main march admit card", "jee-main-march-admit-card.php"],
    ["jee mains 2024 admit card", "jee-mains-2024-admit-card.php"]
];

$categoryId = 2; // Admit Card category
$successCount = 0;
$errorCount = 0;

foreach ($pages as $page) {
    $title = $conn->real_escape_string($page[0]);
    $url = $conn->real_escape_string($page[1]);
    
    $sql = "INSERT INTO links (category_id, title, url) VALUES ($categoryId, '$title', '$url')";
    
    if ($conn->query($sql) === TRUE) {
        $successCount++;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
        $errorCount++;
    }
}

echo "Successfully registered $successCount pages.\n";
echo "Failed to register $errorCount pages.\n";

$conn->close();
?>
