<?php 
$page_title = "Univindia.online - India Results, Admit Card & Sarkari Exam Portal";
include 'includes/header.php'; 
include 'includes/link_map.php'; 
?>
<div class="container">
    <div class="marquee-box">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <a href="rbse-10th-result-2024.php">RBSE 10th Result 2024 Declared</a>
            <a href="odisha-10th-result-2024.php">BSE Odisha 10th Result 2024 Link</a>
            <a href="univindia-net-mgsu.php">MGSU Bikaner Main Exam Update</a>
            <a href="cbse-12th-result-2024.php">CBSE Class 12th Result Link</a>
            <a href="hptu.php">HPTU Hamirpur Technical Results</a>
        </marquee>
    </div>

    <!-- Hot Links Section -->
    <div class="hot-links-grid">
        <a href="india-result.php" class="hot-btn bg-red" title="Check All India Results">India Result 2024</a>
        <a href="rbse-10th-result-2024.php" class="hot-btn bg-orange" title="RBSE 10th Result Link">RBSE 10th Result</a>
        <a href="#" class="hot-btn bg-pink" title="Latest Board Results">Board Results</a>
        <a href="#" class="hot-btn bg-blue" title="University Exam Portals">University Portal</a>
        <a href="#" class="hot-btn bg-green" title="Download Admit Cards">Admit Card</a>
        <a href="#" class="hot-btn bg-darkblue" title="Check Latest Job Openings">Latest Jobs</a>
        <a href="#" class="hot-btn bg-red" title="Official Syllabus">Syllabus</a>
        <a href="#" class="hot-btn bg-orange" title="Answer Key Archives">Answer Key</a>
    </div>


    <!-- Main Results Grid -->
    <div class="result-grid-container">
        <?php
        $keywords = file(__DIR__ . '/keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        function renderColumn($title, $filter, $keywords, $viewMoreLink, $limit = 15) {
            global $link_map;
            echo '<div class="result-column">';
            echo '<div class="column-header">' . $title . '</div>';
            echo '<ul class="result-list">';
            $count = 0;
            $filter = strtolower($filter);
            foreach ($keywords as $keyword) {
                $clean_kw = strtolower(trim($keyword));
                if (isset($link_map[$clean_kw]) && (empty($filter) || strpos($clean_kw, $filter) !== false)) {
                    $url = BASE_URL . $link_map[$clean_kw];
                    echo '<li><a href="' . $url . '" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a></li>';
                    $count++;
                }
                if ($count >= $limit) break;
            }
            // Fillers for empty categories during development
            if ($count == 0) {
                echo '<li><a href="#" style="color: #666; padding: 15px; display: block; text-align: center;">No ' . $title . ' available yet</a></li>';
            }
            echo '</ul>';
            echo '<a href="' . $viewMoreLink . '" class="view-more-btn">View More</a>';
            echo '</div>';
        }

        // Row 1
        renderColumn("Results", "result", $keywords, "results.php");
        renderColumn("Admit Card", "admit", $keywords, "admit-cards.php");
        renderColumn("Latest Jobs", "job", $keywords, "latest-jobs.php");
        ?>
    </div>

    <div class="result-grid-container" style="margin-top: 30px;">
        <?php
        // Row 2
        renderColumn("Answer Key", "answer", $keywords, "answer-keys.php");
        renderColumn("Syllabus", "syllabus", $keywords, "syllabus.php");
        renderColumn("Admission", "admiss", $keywords, "admissions.php");
        ?>
    </div>

    <!-- Legacy / Portals Section -->
    <div class="result-grid-container" style="margin-top: 30px;">
        <div class="result-column">
            <div class="column-header">University Services</div>
            <ul class="result-list">
                <li><a href="univindia-net-mgsu.php" title="MGSU Bikaner Official Portal">MGSU Bikaner Univindia.net</a></li>
                <li><a href="univindia-rrbmu.php" title="RRBMU Alwar Official Portal">RRBMU Alwar Univindia.org</a></li>
                <li><a href="univindia-msbu.php" title="MSBU Bharatpur Official Portal">MSBU Bharatpur Univindia.com</a></li>
                <li><a href="all-india-result.php" title="All India Result Updates">All India Results</a></li>
                <li><a href="india-result-10th.php" title="India 10th Result Updates">India 10th Results</a></li>
            </ul>
            <a href="results.php" class="view-more-btn">View All Portals</a>
        </div>
        
        <div class="result-column">
             <div class="column-header">Board Archives</div>
             <ul class="result-list">
                <li><a href="rbse-10th-result-2024.php" title="Rajasthan Board 10th Result 2024">RBSE 10th Result 2024</a></li>
                <li><a href="rbse-12th-result-2023-arts.php" title="Rajasthan Board 12th Arts 2023">RBSE 12th Arts 2023</a></li>
                <li><a href="b-a-result-2018.php" title="B.A. Result 2018 Details">B.A. Result 2018 Archive</a></li>
                <li><a href="india-result-2024.php" title="India Result 2024 Overview">India Result 2024 News</a></li>
                <li><a href="india-result-2025.php" title="India Result 2025 Upcoming">India Result 2025 Updates</a></li>
            </ul>
            <a href="results.php" class="view-more-btn">View All Boards</a>
        </div>

        <div class="result-column">
             <div class="column-header">Important Links</div>
             <ul class="result-list">
                <li><a href="#" title="Percentage Calculator">Percentage Calculator</a></li>
                <li><a href="#" title="GPA to Percentage">GPA to Percentage Converter</a></li>
                <li><a href="#" title="Exam Notification">Exam Email Alerts</a></li>
                <li><a href="#" title="Mobile App">Sarkari Result Mobile App</a></li>
                <li><a href="#" title="Telegram Channel">Join Telegram Group</a></li>
            </ul>
             <a href="#" class="view-more-btn">Explore Tools</a>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
