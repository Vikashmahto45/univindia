<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Automatic Base URL
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$is_local = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false || !isset($_SERVER['HTTP_HOST']));
define('BASE_URL', $is_local ? 'http://localhost/univindia/' : 'https://univindia.online/');
define('ASSETS_URL', BASE_URL . 'css/style.css');
?>
