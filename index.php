<?php 
// 1. Core Header (Includes config & database)
require_once __DIR__ . '/includes/header.php'; 
?>


    <!-- Main Content Grid -->
    <main>
        <?php
        // Fetch all categories and store mapping of Name => ID
        $categories_result = $conn->query("SELECT id, name FROM categories");
        $cats = [];
        if ($categories_result && $categories_result->num_rows > 0) {
            while($row = $categories_result->fetch_assoc()) {
                $cats[trim($row['name'])] = $row['id'];
            }
        }

        // Helper function to render a sarkari block
        function render_sarkari_box($conn, $cats, $catName, $linkPage) {
            $catId = isset($cats[$catName]) ? $cats[$catName] : 0;
            echo '<div class="sarkari-box">';
            echo '<div class="sarkari-box-title"><a href="'.BASE_URL.'pages/'.$linkPage.'">'.$catName.'</a></div>';
            echo '<ul class="sarkari-list">';
            if ($catId > 0) {
                $links = $conn->query("SELECT title, url FROM links WHERE category_id = ".$catId." ORDER BY created_at DESC LIMIT 10");
                if ($links && $links->num_rows > 0) {
                    while ($link = $links->fetch_assoc()) {
                        $url = $link['url'];
                        // DB already stores path like "pages/filename.php" or full http URL
                        // Just prepend BASE_URL for relative paths
                        if (strpos($url, 'http') === false) {
                            $url = BASE_URL . ltrim($url, '/');
                        }
                        echo '<li><a href="'.$url.'">'.$link['title'].'</a></li>';
                    }
                } else {
                    echo '<li style="color:#666; text-align:center;">No updates available</li>';
                }
            } else {
                echo '<li style="color:#666; text-align:center;">No updates available</li>';
            }
            echo '</ul>';
            echo '<div class="view-more-row"><a href="'.BASE_URL.'pages/'.$linkPage.'">View More</a></div>';
            echo '</div>';
        }
        ?>

        <!-- ROW 1 -->
        <div class="sarkari-row">
            <?php render_sarkari_box($conn, $cats, 'Results', 'result.php'); ?>

            <!-- ADMIT CARD - Hardcoded with real existing files -->
            <div class="sarkari-box">
                <div class="sarkari-box-title"><a href="<?php echo BASE_URL; ?>pages/admit-card.php">Admit Card</a></div>
                <ul class="sarkari-list">
                    <li><a href="<?php echo BASE_URL; ?>pages/ssc-gd-admit-card-2025-official-constable-gd-hall-ticket.php">SSC GD Constable Admit Card 2025</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/rrb-ntpc-admit-card-2025-official-railway-career-portal.php">RRB NTPC Admit Card 2025</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/upsc-admit-card-2024-official-civil-services-selection-hub.php">UPSC Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/ssc-cgl-admit-card-2024-official-tier-1-2-hall-ticket-hub.php">SSC CGL Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/rrb-alp-admit-card-2024-official-loco-pilot-hall-ticket-hub.php">RRB ALP Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/up-police-admit-card-2024-official-uppbpb-constable-hall-ticket.php">UP Police Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/sbi-po-admit-card-2025-official-banking-selection-hub.php">SBI PO Admit Card 2025</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/ugc-net-admit-card-december-2024.php">UGC NET Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/mgsu-admit-card-2024.php">MGSU Admit Card 2024</a></li>
                    <li><a href="<?php echo BASE_URL; ?>pages/mgsu-practical-admit-card.php">MGSU Practical Admit Card</a></li>
                </ul>
                <div class="view-more-row"><a href="<?php echo BASE_URL; ?>pages/admit-card.php">View More</a></div>
            </div>

            <?php render_sarkari_box($conn, $cats, 'Latest Job', 'latest-job.php'); ?>
        </div>

        <!-- ROW 2 -->
        <div class="sarkari-row">
            <?php 
            render_sarkari_box($conn, $cats, 'Answer Key', 'answer-key.php'); 
            render_sarkari_box($conn, $cats, 'Syllabus', 'syllabus.php'); 
            render_sarkari_box($conn, $cats, 'Admission', 'admission.php'); 
            ?>
        </div>

        <!-- ROW 3 -->
        <div class="sarkari-row">
            <?php 
            render_sarkari_box($conn, $cats, 'Document', 'document.php'); 
            render_sarkari_box($conn, $cats, 'Student Tools', 'student-tools.php'); 
            render_sarkari_box($conn, $cats, 'Time Table', 'time-table.php'); 
            ?>
        </div>

    </main>


    <!-- SEO Information Section -->
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
// 2. Core Footer
require_once __DIR__ . '/includes/footer.php'; 
?>
