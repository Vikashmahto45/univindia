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
    <!-- ROW 1: ADMIT CARD & LATEST JOBS -->
    <div class="sarkari-row">
        <!-- ADMIT CARD (Hardcoded Manual Links) -->
        <div class="sarkari-box">
            <div class="sarkari-box-title"><a href="<?php echo BASE_URL; ?>pages/admit-card.php">Admit Card</a></div>
            <ul class="sarkari-list">
                <li><a href="<?php echo SITE_URL; ?>pages/ssc-gd-admit-card-2025-official-constable-gd-hall-ticket.php" target="_blank">SSC GD Constable Admit Card 2025</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/rrb-ntpc-admit-card-2025-official-railway-career-portal.php" target="_blank">RRB NTPC Admit Card 2025</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/upsc-admit-card-2024-official-civil-services-selection-hub.php" target="_blank">UPSC Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/ssc-cgl-admit-card-2024-official-tier-1-2-hall-ticket-hub.php" target="_blank">SSC CGL Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/rrb-alp-admit-card-2024-official-loco-pilot-hall-ticket-hub.php" target="_blank">RRB ALP Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/up-police-admit-card-2024-official-uppbpb-constable-hall-ticket.php" target="_blank">UP Police Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/sbi-po-admit-card-2025-official-banking-selection-hub.php" target="_blank">SBI PO Admit Card 2025</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/ugc-net-admit-card-december-2024.php" target="_blank">UGC NET Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/mgsu-admit-card-2024.php" target="_blank">MGSU Admit Card 2024</a></li>
                <li><a href="<?php echo SITE_URL; ?>pages/mgsu-practical-admit-card.php" target="_blank">MGSU Practical Admit Card</a></li>
            </ul>
            <div class="view-more-row"><a href="<?php echo BASE_URL; ?>pages/admit-card.php">View More</a></div>
        </div>


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
        <p class="seo-intro"><strong>univindia.online</strong> is your trusted one-stop destination for the latest educational updates and career opportunities across India. Get real-time updates on <strong>latest educational news</strong> and <strong>Sarkari Jobs</strong>.</p>
        
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
// 3. Core Footer
require_once __DIR__ . '/includes/footer.php';
?>
