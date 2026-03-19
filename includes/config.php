<?php
/**
 * Univindia.online Configuration File
 */

// Automatic Environment Detection
$is_localhost = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1');
define('IS_LIVE', !$is_localhost); 

if (IS_LIVE) {
    define('BASE_URL', 'https://univindia.online/');
} else {
    define('BASE_URL', 'http://localhost/univindia/');
}

// Global Path Helper
define('ROOT_PATH', __DIR__);
?>
