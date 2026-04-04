<?php
/**
 * index.php - Clean Rewrite for UnivIndia Homepage
 * Version: 2.0 (Stable & Multi-Environment Ready)
 */

// 1. Core Header (Includes Header & Global Config)
require_once __DIR__ . '/includes/header.php';

/**
 * 2. Smart Box Renderer Function
 * Automatically fetches the latest 10 links for a category and handles pathing.
 *
 * @param mysqli $conn The database connection
 * @param string $catName The category name to fetch
 * @param string $viewMorePage The target page for 'View More' button
 * @return void
 */
function render_univindia_box($conn, $catName, $viewMorePage) {
    // a. Fetch Category ID dynamically
    $catQuery = $conn->query("SELECT id FROM categories WHERE name = '" . $conn->real_escape_string($catName) . "'");
    $catRow = $catQuery ? $catQuery->fetch_assoc() : null;
    $catId = $catRow ? $catRow['id'] : 0;

    echo '<div class="sarkari-box">';
    echo '  <div class="sarkari-box-title"><a href="' . BASE_URL . 'pages/' . $viewMorePage . '">' . htmlspecialchars($catName) . '</a></div>';
    echo '  <ul class="sarkari-list">';

    if ($catId > 0) {
        // b. Fetch TOP 10 Latest Links
        $linksQuery = $conn->query("SELECT title, url FROM links WHERE category_id = $catId ORDER BY created_at DESC LIMIT 10");

        if ($linksQuery && $linksQuery->num_rows > 0) {
            while ($link = $linksQuery->fetch_assoc()) {
                $rawUrl = $link['url'];
                $finalUrl = $rawUrl;

                // c. Definitive Path Logic (Absolute SITE_URL approach)
                if (stripos($rawUrl, 'http') === 0) {
                    // Already an absolute URL
                    $finalUrl = $rawUrl;
                } else {
                    // It's a local path. Remove any existing 'pages/' or '/' to starts clean.
                    $cleanPath = ltrim($rawUrl, '/');
                    if (stripos($cleanPath, 'pages/') === 0) {
                        $cleanPath = substr($cleanPath, 6); // Remove 'pages/' from start
                    }
                    
                    // Build absolute path pointing directly to pages/ folder
                    $finalUrl = SITE_URL . 'pages/' . ltrim($cleanPath, '/');
                }

                echo '    <li><a href="' . $finalUrl . '" target="_blank">' . htmlspecialchars($link['title']) . '</a></li>';
            }
        } else {

            echo '    <li style="color:#888; text-align:center; padding:10px;">Updates Coming Soon...</li>';
        }
    } else {
        echo '    <li style="color:#888; text-align:center; padding:10px;">Section Under Maintenance</li>';
    }

    echo '  </ul>';
    echo '  <div class="view-more-row"><a href="' . BASE_URL . 'pages/' . $viewMorePage . '">View More</a></div>';
    echo '</div>';
}
?>

<main>
    <!-- ROW 1: LATEST JOBS -->
    <div class="sarkari-row">
        <?php render_univindia_box($conn, 'Latest Job', 'latest-job.php'); ?>
    </div>


    <!-- ROW 2: ANSWER KEY, SYLLABUS, ADMISSION -->
    <div class="sarkari-row">
        <?php render_univindia_box($conn, 'Answer Key', 'answer-key.php'); ?>
        <?php render_univindia_box($conn, 'Syllabus', 'syllabus.php'); ?>
        <?php render_univindia_box($conn, 'Admission', 'admission.php'); ?>
    </div>

    <!-- ROW 3: DOCUMENT, STUDENT TOOLS, TIME TABLE -->
    <div class="sarkari-row">
        <?php render_univindia_box($conn, 'Document', 'document.php'); ?>
        <?php render_univindia_box($conn, 'Student Tools', 'student-tools.php'); ?>
        <?php render_univindia_box($conn, 'Time Table', 'time-table.php'); ?>
    </div>
</main>

<!-- SEO TEXT SECTION -->
<section class="seo-info-container">
    <div class="seo-card">
        <h2 class="seo-main-title">Welcome to UnivIndia - Online University & Job Portal</h2>
        <p class="seo-intro"><strong>univindia.online</strong> is your trusted one-stop destination for the latest educational updates and career opportunities across India. Get real-time updates on <strong>University Results</strong>, <strong>Sarkari Results</strong>, <strong>Admit Cards</strong>, and <strong>Latest Jobs</strong>.</p>
        
        <div class="seo-features">
            <div class="feature-item">
                <h4 class="feature-title">What We Offer</h4>
                <ul class="feature-list">
                    <li>UnivIndia Fast Result Engine</li>
                    <li>Latest Sarkari Naukri Updates</li>
                    <li>Syllabus & Admit Card Downloads</li>
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
// 3. Core Footer
require_once __DIR__ . '/includes/footer.php';
?>
