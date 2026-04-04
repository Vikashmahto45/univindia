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
                        // Prefix with pages/ if it's a local filename (not starting with http or /)
                        if (strpos($url, 'http') === false && strpos($url, '/') !== 0) {
                            $url = BASE_URL . 'pages/' . ltrim($url, '/');
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
            <?php 
            render_sarkari_box($conn, $cats, 'Results', 'result.php'); 
            render_sarkari_box($conn, $cats, 'Admit Card', 'admit-card.php'); 
            render_sarkari_box($conn, $cats, 'Latest Job', 'latest-job.php'); 
            ?>
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
