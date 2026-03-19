<?php
/**
 * Univindia.online Configuration File
 * 
 * Instructions:
 * - Set IS_LIVE to true when deploying to the web server.
 * - Set IS_LIVE to false for local development (XAMPP).
 */

// Automatic Environment Detection
$is_localhost = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1');
define('IS_LIVE', !$is_localhost); 

if (IS_LIVE) {
    // Live Server Settings
    define('BASE_URL', 'https://univindia.online/');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'your_live_db_user');
    define('DB_PASS', 'your_live_db_pass');
    define('DB_NAME', 'your_live_db_name');
} else {
    // Local XAMPP Settings
    define('BASE_URL', 'http://localhost/univindia/');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'univindia');
}

// Error Reporting Toggle
if (IS_LIVE) {
    error_reporting(0);
    ini_set('display_errors', 0);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
?>
