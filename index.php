<?php 
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/link_map.php';
$page_title = "Univindia.online - Premier University Result & Admit Card HUB 2025";
include __DIR__ . '/header.php';
?>

<section class="hero-section">
    <div class="container">
        <h2>Fastest University Result Repository</h2>
        <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 700px; margin: 0 auto;">Securely access your board exams, semester results, and hall tickets from authorized national mirror gateways.</p>
    </div>
</section>

<div class="container">
    <div class="result-columns">
        <?php 
        $keywords = file(__DIR__ . '/keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        function renderSection($title, $filter, $keywords, $limit = 20) {
            global $link_map;
            echo '<div class="card-column">';
            echo '<h3>' . $title . '</h3>';
            echo '<ul class="link-list">';
            $count = 0;
            foreach ($keywords as $kw) {
                $clean = strtolower(trim($kw));
                if (isset($link_map[$clean]) && (empty($filter) || strpos($clean, $filter) !== false)) {
                    $url = BASE_URL . $link_map[$clean];
                    echo '<li><a href="' . $url . '">' . ucwords($kw) . '</a></li>';
                    $count++;
                    if ($count >= $limit) break;
                }
            }
            if ($count === 0) echo '<li style="color: var(--text-muted)">Opening soon...</li>';
            echo '</ul>';
            echo '</div>';
        }

        renderSection("Latest Results", "result", $keywords);
        renderSection("Admit Cards 2025", "admit", $keywords);
        renderSection("Trending Searches", "", $keywords);
        ?>
    </div>
</div>

<?php include __DIR__ . '/footer.php'; ?>
