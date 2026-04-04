<?php
/**
 * register_batch_2.php - Massive registration for Admit Card pages #521-540.
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "univindia_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$pages = [
    ['title' => 'Official Vyapam Admit Card: MPPEB Selection Hall Ticket Access Portal', 'url' => 'vyapam-admit-card.php'],
    ['title' => 'Official WBJEE Admit Card: West Bengal Selection Hall Ticket Access Portal', 'url' => 'wbjee-admit-card.php'],
    ['title' => 'Official WBP Admit Card Download 2021: WB Police Constable selection Hall Ticket Archive', 'url' => 'wbp-admit-card-download-2021.php'],
    ['title' => 'Official BSE Odisha Admit Card 2024: Board of Secondary Education selection Hall Ticket Access', 'url' => 'www-bseodisha-ac-in-2024-admit-card.php'],
    ['title' => 'Official 12th Admit Card 2025: Board Exam Intermediate selection Hall Ticket Access', 'url' => '12th-admit-card-2025.php'],
    ['title' => 'Official AAI ATC Admit Card: Airports Authority of India Selection Hall Ticket Access Portal', 'url' => 'aai-atc-admit-card.php'],
    ['title' => 'Official MP Board Admit Card 2024: MPBSE 10th and 12th selection Hall Ticket Access', 'url' => 'admit-card-2024-mp-board.php'],
    ['title' => 'Official Admit Card 2025: National Selection Hall Ticket Access Portal', 'url' => 'admit-card-2025.php'],
    ['title' => 'Official RPF Constable Admit Card: RRB Selection Hall Ticket Access Portal', 'url' => 'admit-card-for-rpf-constable.php'],
    ['title' => 'Official Rajasthan Police Admit Card: Constable Selection Hall Ticket Access Portal', 'url' => 'admit-card-rajasthan-police.php'],
    ['title' => 'Official UOU Admit Card: Uttarakhand Open University Selection Hall Ticket Access Portal', 'url' => 'admit-card-uou.php'],
    ['title' => 'Official AFCAT 2 Admit Card 2022: Indian Air Force selection Hall Ticket Archive', 'url' => 'afcat-2-admit-card-2022-release-date.php'],
    ['title' => 'Official AFCAT Admit Card 2021: Indian Air Force selection Hall Ticket Archive', 'url' => 'afcat-admit-card-2021.php'],
    ['title' => 'Official AIBE Admit Card: All India Bar Examination selection Hall Ticket Access Portal', 'url' => 'aibe-admit-card-download.php'],
    ['title' => 'Official AIIMS Admit Card 2025: Medical Selection Hall Ticket Access Portal', 'url' => 'aiims-admit-card-2025.php'],
    ['title' => 'Official AIIMS CRE Admit Card 2025: Common Recruitment Examination selection Hall Ticket Access', 'url' => 'aiims-cre-admit-card-2025.php'],
    ['title' => 'Official AIIMS CRE Exam Admit Card: Common Recruitment selection Hall Ticket Access Portal', 'url' => 'aiims-cre-exam-admit-card.php'],
    ['title' => 'Official AOC Admit Card 2023: Army Ordnance Corps selection Hall Ticket Archive', 'url' => 'aoc-admit-card-2023.php'],
    ['title' => 'Official Assam Rifles Admit Card 2021: Selection Hall Ticket Archive Portal', 'url' => 'assam-rifles-admit-card-2021.php'],
    ['title' => 'Official BBMKU Admit Card: Binod Bihari Mahto Koylanchal University selection Hall Ticket Access Portal', 'url' => 'bbmku-admit-card.php'],
];

$category_id = 2; // Admit Card
$count = 0;

foreach ($pages as $page) {
    $title = $conn->real_escape_string($page['title']);
    $url = $conn->real_escape_string($page['url']);
    
    $check = $conn->query("SELECT id FROM links WHERE url = '$url'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO links (category_id, title, url) VALUES ($category_id, '$title', '$url')";
        if ($conn->query($sql)) {
            $count++;
            echo "Registered: $url\n";
        } else {
            echo "Error registering $url: " . $conn->error . "\n";
        }
    } else {
        echo "Already exists: $url\n";
    }
}

echo "\nTotal new pages registered: $count\n";
$conn->close();
?>
