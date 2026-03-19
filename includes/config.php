<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Automatic Base URL
$host = $_SERVER['HTTP_HOST'];
$is_local = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);
define('BASE_URL', $is_local ? 'http://localhost/univindia/' : 'https://univindia.online/');
define('ASSETS_URL', BASE_URL . 'css/style.css');
?>
