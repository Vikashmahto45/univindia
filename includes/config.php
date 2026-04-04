<?php
// Environment Detection
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    // Local Dev (XAMPP/WAMP)
    $host     = 'localhost';
    $user     = 'root';
    $pass     = '';
    $dbname   = 'univindia_db';
    $site_url = 'http://localhost/univindia/';
} else {
    // Production (univindia.online - Hostinger)
    $host     = 'localhost'; // Usually localhost on Hostinger
    $user     = 'u823814640_rkmehta45';
    $pass     = 'Rkmehta@123123';
    $dbname   = 'u823814640_rkmehta45';
    $site_url = 'https://univindia.online/';
}

// Legacy-Safe Dummy Database Class (Works on PHP 5.6+)
if (!class_exists('DB_Dummy')) {
    class DB_Dummy {
        public $connect_error = "Database Connection Error";
        public $num_rows = 0;
        public function query($q) { return false; }
    }
}

// DB Connection
$conn = @new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    $conn = new DB_Dummy();
}

/**
 * PATH HELPER LOGIC
 */
$docRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$scriptPath = str_replace(['\\', $docRoot], ['/', ''], $_SERVER['SCRIPT_FILENAME']);
$segments = array_filter(explode('/', trim($scriptPath, '/')));

$depth = 0;
if (count($segments) > 0 && in_array('pages', $segments)) {
    $depth = 1; 
}

define('BASE_URL', str_repeat('../', $depth));
define('SITE_URL', $site_url);
?>
