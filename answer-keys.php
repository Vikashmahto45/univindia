<?php 
$page_title = "Answer Keys - Verified Exam Solutions Archive";
$meta_description = "Download official and unofficial answer keys for various competitive and university exams at Univindia.online.";
$meta_keywords = "answer key, exam solution, response sheet, answer sheet download";
include 'includes/header.php'; 
?>

<div class="container" style="margin-top: 30px;">
    <div class="card" style="border-top: 4px solid var(--primary-color);">
        <h1 style="color: var(--nav-color); border-bottom: 2px solid #eee; padding-bottom: 10px;">Exam Answer Keys</h1>
        <p>Check the verified solutions and answer keys for recent examinations to estimate your scores.</p>
        
        <div class="search-container" style="margin: 20px 0;">
            <input type="text" id="keywordSearch" placeholder="Search for answer keys..." onkeyup="filterLinks()" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="keyword-grid" id="fullKeywordGrid">
            <?php
            $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $found = false;
            foreach ($keywords as $keyword) {
                if (strpos(strtolower($keyword), 'answer') !== false) {
                    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($keyword)));
                    $slug = trim($slug, '-');
                    echo '<div class="card-mini">';
                    echo '<a href="' . $slug . '.php" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a>';
                    echo '</div>';
                    $found = true;
                }
            }
            if (!$found) echo "<p>Latest answer keys will appear here as they are released.</p>";
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
