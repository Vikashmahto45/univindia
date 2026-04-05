<?php
/**
 * index.php - DEFINITIVE FINAL REWRITE
 * Version: 3.0 (No-Database For Admit Cards / 100% Stable)
 */

// 1. Core Header
require_once __DIR__ . '/includes/header.php';

/**
 * Helper to render database-driven boxes (Latest Jobs, etc.)
 */
function render_db_box($conn, $catName, $viewMorePage) {
    $catQuery = $conn->query("SELECT id FROM categories WHERE name = '" . $conn->real_escape_string($catName) . "'");
    $catRow = $catQuery ? $catQuery->fetch_assoc() : null;
    $catId = $catRow ? $catRow['id'] : 0;

    echo '<div class="sarkari-box">';
    echo '  <div class="sarkari-box-title"><a href="' . SITE_URL . 'pages/' . $viewMorePage . '">' . htmlspecialchars($catName) . '</a></div>';
    echo '  <ul class="sarkari-list">';

    if ($catId > 0) {
        $linksQuery = $conn->query("SELECT title, url FROM links WHERE category_id = $catId ORDER BY created_at DESC LIMIT 50");
        if ($linksQuery && $linksQuery->num_rows > 0) {
            $renderedCount = 0;
            while ($link = $linksQuery->fetch_assoc()) {
                if ($renderedCount >= 10) break;
                
                $url = trim($link['url']);
                
                // If it's already an absolute URL, use it directly
                $isExternal = false;
                if (stripos($url, 'http://') === 0 || stripos($url, 'https://') === 0) {
                    $finalUrl = $url;
                    $pathForCheck = parse_url($url, PHP_URL_PATH);
                    $urlHost = parse_url($url, PHP_URL_HOST);
                    $siteHost = parse_url(SITE_URL, PHP_URL_HOST);
                    if ($urlHost && $siteHost && stripos($urlHost, $siteHost) === false) {
                        $isExternal = true;
                    }
                } else {
                    // Absolute pathing fix for relative links
                    $cleanPath = ltrim($url, '/');
                    if (stripos($cleanPath, 'pages/') === 0) { 
                        $cleanPath = substr($cleanPath, 6); 
                    }
                    $finalUrl = SITE_URL . 'pages/' . ltrim($cleanPath, '/');
                    $pathForCheck = '/pages/' . ltrim($cleanPath, '/');
                }
                
                if (!$isExternal) {
                    // Physical File Existence Check to prevent 404 Redirect loops on Live Website
                    $baseDocRoot = __DIR__;
                    $filenameOnly = basename($pathForCheck);
                    $directPhysicalPath = $baseDocRoot . '/pages/' . $filenameOnly;
                    
                    if (!file_exists($directPhysicalPath)) {
                        continue; // Skip this broken internal link! Don't show it!
                    }
                }

                echo '    <li><a href="' . $finalUrl . '" target="_blank">' . htmlspecialchars($link['title']) . '</a></li>';
                $renderedCount++;
            }
            if ($renderedCount === 0) { echo '    <li style="color:#888; text-align:center; padding:10px;">Updates Coming Soon...</li>'; }
        } else { echo '    <li style="color:#888; text-align:center; padding:10px;">Updates Coming Soon...</li>'; }
    } else { echo '    <li style="color:#888; text-align:center; padding:10px;">Section Under Maintenance</li>'; }

    echo '  </ul>';
    echo '  <div class="view-more-row"><a href="' . SITE_URL . 'pages/' . $viewMorePage . '">View More</a></div>';
    echo '</div>';
}
?>

<main>
    <!-- ROW 1: LATEST JOBS & ADMIT CARD -->
    <div class="sarkari-row">
        <?php render_db_box($conn, 'Latest Job', 'latest-job.php'); ?>
        <?php render_db_box($conn, 'Admit Card', 'admit-card.php'); ?>
    </div>


    <!-- ROW 2: ANSWER KEY, SYLLABUS, ADMISSION -->
    <div class="sarkari-row">
        <?php render_db_box($conn, 'Answer Key', 'answer-key.php'); ?>
        <?php render_db_box($conn, 'Syllabus', 'syllabus.php'); ?>
        <?php render_db_box($conn, 'Admission', 'admission.php'); ?>
    </div>

    <!-- ROW 3: DOCUMENT, STUDENT TOOLS, TIME TABLE -->
    <div class="sarkari-row">
        <?php render_db_box($conn, 'Document', 'document.php'); ?>
        <?php render_db_box($conn, 'Student Tools', 'student-tools.php'); ?>
        <?php render_db_box($conn, 'Time Table', 'time-table.php'); ?>
    </div>
</main>

<!-- SEO TEXT SECTION -->
<section class="seo-info-container">
    <div class="seo-card">
        <h2 class="seo-main-title">Welcome to UnivIndia - Online University & Job Portal</h2>
        <p class="seo-intro"><strong>univindia.online</strong> is your trusted one-stop destination for the latest educational updates and career opportunities across India.</p>
        
        <div class="seo-features">
            <div class="feature-item">
                <h4 class="feature-title">What We Offer</h4>
                <ul class="feature-list">
                    <li>Latest Sarkari Naukri Updates</li>
                    <li>Official Syllabus Downloads</li>
                    <li>All University Time Tables</li>
                </ul>
            </div>
            <div class="feature-item">
                <h4 class="feature-title">Why UnivIndia?</h4>
                <p class="feature-text">Stay connected with us for the most reliable educational content and job alerts. We provide fast and clean navigation exactly like you naturally expect.</p>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
