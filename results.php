<?php 
$page_title = "Latest Results - Univindia.online Result Portal";
$meta_description = "View the complete list of latest board and university results across India. Stay updated with Univindia.online.";
$meta_keywords = "latest results, university results, board results 2024, india result list";
include 'includes/header.php'; 
include 'includes/link_map.php'; 
?>

<div class="container" style="margin-top: 30px;">
    <div class="card" style="border-top: 4px solid var(--primary-color);">
        <h1 style="color: var(--nav-color); border-bottom: 2px solid #eee; padding-bottom: 10px;">Latest Results Archive</h1>
        <p>Explore all the latest results published on Univindia.online. Find your board, university, or competitive exam scores below.</p>
        
        <div class="search-container" style="margin: 20px 0;">
            <input type="text" id="keywordSearch" placeholder="Search for specific results..." onkeyup="filterLinks()" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="keyword-grid" id="fullKeywordGrid">
            <?php
            $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($link_map as $keyword => $url) {
                if (strpos(strtolower($keyword), 'result') !== false) {
                    echo '<div class="card-mini">';
                    echo '<a href="' . $url . '" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<script>
function filterLinks() {
    let input = document.getElementById('keywordSearch');
    let filter = input.value.toLowerCase();
    let grid = document.getElementById('fullKeywordGrid');
    let items = grid.getElementsByClassName('card-mini');

    for (let i = 0; i < items.length; i++) {
        let a = items[i].getElementsByTagName('a')[0];
        let txtValue = a.textContent || a.innerText;
        if (txtValue.toLowerCase().indexOf(filter) > -1) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
}
</script>

<?php include 'includes/footer.php'; ?>
