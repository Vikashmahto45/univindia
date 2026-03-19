<?php
/**
 * Univindia Central Config - Fresh Rebuild
 */
$is_local = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1');
define('BASE_URL', $is_local ? 'http://localhost/univindia/' : 'https://univindia.online/');
define('ASSETS_URL', BASE_URL . 'css/style.css');
?>
