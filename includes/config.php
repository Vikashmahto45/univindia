<?php
// PHP Core Config - Central database and path settings
$host     = 'localhost';
$user     = 'root';
$pass     = '';
$dbname   = 'univindia_db';

// DB Connection
// DB Connection - Use error suppression or conditional checks for production
$conn = @new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    // Log error or handle gracefully in production
    // Create a dummy object to prevent fatal errors on method calls in the UI
    $conn = new class { 
        public function query($q) { return false; } 
        public $connect_error = "Database Connection Error";
        public $num_rows = 0;
    };
}



/**
 * BASE_URL helper: 
 * Ensures assets (CSS, JS, Images) are loaded correctly from any depth.
 */
$docRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$scriptPath = str_replace(['\\', $docRoot], ['/', ''], $_SERVER['SCRIPT_FILENAME']);
$segments = array_filter(explode('/', trim($scriptPath, '/')));

// Find depth to project root (e.g., if in pages/result.php, depth is 1)
$depth = 0;
// We assume we are in 'univindia/' project folder
if (count($segments) > 0) {
    // Check for 'pages' folder to determine depth
    if (in_array('pages', $segments)) {
        $depth = 1; 
    }
}
define('BASE_URL', str_repeat('../', $depth));
?>
