<?php
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

// Fixed the column name from 'name' to 'title' based on earlier scripts
$pages = [
    541 => 'ssc-selection-post-admit-card-2022',
    542 => 'ssc-stenographer-admit-card-2022',
    543 => 'telangana-police-admit-card-2022',
    544 => 'tndte-admit-card-2022',
    545 => 'tnea-admit-card-2022',
    546 => 'tnhrce-admit-card-2022',
    547 => 'tnpsc-group-4-admit-card-2022',
    548 => 'tnusrb-admit-card-2022',
    549 => 'tripura-police-admit-card-2022',
    550 => 'tspsc-group-1-admit-card-2022',
    551 => 'u-p-police-admit-card-2018',
    552 => 'ucms-admit-card',
    553 => 'ugeac-admit-card-2022',
    554 => 'uget-admit-card-2022',
    555 => 'ukpsc-admit-card-2022',
    556 => 'uksssb-admit-card-2022',
    557 => 'uni-raj-admit-card-2022',
    558 => 'uniraj-admit-card-2022',
    559 => 'up-aitm-admit-card-2022',
    560 => 'up-police-admit-card-2022',
    561 => 'up-polytechnic-admit-card-2022',
    562 => 'up-shala-darpan-admit-card-2022',
    563 => 'up-vdo-admit-card-2022',
    564 => 'upbed-admit-card-2022',
    565 => 'uphesc-admit-card-2022',
    566 => 'gd-admit-card-2025',
    567 => 'htet-admit-card-2021',
    568 => 'ib-sa-admit-card',
    569 => 'ibps-rrb-clerk-admit-card',
    570 => 'icaiexam-org-admit-card',
    571 => 'icar-admit-card-2022',
    572 => 'icmai-in-admit-card',
    573 => 'iim-cat-admit-card',
    574 => 'indian-army-admit-card-2021',
    575 => 'iti-admit-card-2024',
    576 => 'iti-exam-admit-card-2024',
    577 => 'jnvst-admit-card-2024',
    578 => 'jnvst-admit-card-2024-class-6',
    579 => 'kcet-admit-card-2024',
    580 => 'keam-admit-card-2024',
    581 => 'kerala-psc-admit-card-2024',
    582 => 'kerala-psc-thulasi-admit-card',
    583 => 'kiitee-admit-card-2024',
    584 => 'kv-admit-card-2024',
    585 => 'kvs-admit-card-2019-download',
    586 => 'kvs-admit-card-2022-tgt-pgt-prt',
    587 => 'kvs-admit-card-2023',
    588 => 'kvs-exam-admit-card',
    589 => 'kvs-lib-admit-card-2023-download',
    590 => 'kvs-librarian-admit-card-2023',
    591 => 'kvs-non-teaching-admit-card-2023',
    592 => 'kvs-prt-admit-card-2023',
    593 => 'mah-cet-admit-card-2024',
    594 => 'mat-admit-card-2022',
    595 => 'mhc-admit-card-2024',
    596 => 'mppsc-admit-card-2022',
    597 => 'mppsc-admit-card-release-date',
    598 => 'ncl-admit-card',
    599 => 'neet-admit-card-2023-download'
];

foreach ($pages as $id => $slug) {
    $title = str_replace("-", " ", $slug);
    $title = ucwords($title);
    $url = "pages/" . $slug . ".php";
    $category_id = 2; // Admit Card

    // Use current URL to check if it exists or insert/update
    $check = $conn->query("SELECT id FROM links WHERE url = '$url'");
    if ($check->num_rows > 0) {
        $sql = "UPDATE links SET title = '$title', category_id = $category_id WHERE url = '$url'";
    } else {
        $sql = "INSERT INTO links (title, url, category_id) VALUES ('$title', '$url', $category_id)";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record ($slug) processed successfully\n";
    } else {
        echo "Error processing record $slug: " . $conn->error . "\n";
    }
}


$conn->close();
?>
