<?php
// Standalone DB Setup - Run once (http://localhost/univindia/init_db.php)
$host = 'localhost';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. Create Database
$conn->query("CREATE DATABASE IF NOT EXISTS univindia_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
$conn->select_db('univindia_db');

// 2. Create Schema
$conn->query("CREATE TABLE IF NOT EXISTS categories (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    sort_order INT DEFAULT 0
)");

$conn->query("CREATE TABLE IF NOT EXISTS top_boxes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    bg_color VARCHAR(10) DEFAULT '#000000',
    sort_order INT DEFAULT 0
)");

$conn->query("CREATE TABLE IF NOT EXISTS links (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    category_id INT UNSIGNED,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
)");

// 3. Clear existing content
$conn->query("SET FOREIGN_KEY_CHECKS = 0");
$conn->query("TRUNCATE TABLE links");
$conn->query("TRUNCATE TABLE categories");
$conn->query("TRUNCATE TABLE top_boxes");
$conn->query("SET FOREIGN_KEY_CHECKS = 1");

// 4. Seed categories
$categories = ['Results', 'Admit Card', 'Latest Job', 'Admission', 'Syllabus', 'Answer Key', 'Document'];
foreach ($categories as $i => $cat) {
    $conn->query("INSERT INTO categories (name, sort_order) VALUES ('$cat', $i)");
}


echo "Database cleaned and re-initialized successfully. <a href='index.php'>Go to Website</a>";
?>
