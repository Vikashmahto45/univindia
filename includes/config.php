<?php
// includes/config.php
// Centralized SEO Engine

$default_meta_title = "UnivIndia - Expert MGSU Results, Admit Card & Syllabus Portal";
$default_meta_description = "UnivIndia is the premier educational portal for MGSU results, admit cards, exam time tables, syllabus, and university news. Get fast, reliable, and expert-curated educational updates.";
$default_meta_keywords = "UnivIndia, MGSU Results, Admit Card, MGSU Bikaner, Syllabus, Exam Form, Time Table";

$meta_title = isset($meta_title) ? $meta_title : $default_meta_title;
$meta_description = isset($meta_description) ? $meta_description : $default_meta_description;
$meta_keywords = isset($meta_keywords) ? $meta_keywords : $default_meta_keywords;

// Define base URL for relative routing to ensure no broken links
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
$site_url = $protocol . $domainName;

?>
