<?php 
$page_title = "Admission News - College & University Enrolment Updates";
$meta_description = "Get the latest news on college admissions, application dates, and university entrance tests across India.";
$meta_keywords = "admission 2024, online admission, university entrance, admission form";
include 'includes/header.php'; 
?>

<div class="container" style="margin-top: 30px;">
    <div class="card" style="border-top: 4px solid var(--primary-color);">
        <h1 style="color: var(--nav-color); border-bottom: 2px solid #eee; padding-bottom: 10px;">University Admission Updates</h1>
        <p>Find information about new admission forms, counselling dates, and entrance exam results.</p>
        
        <div class="search-container" style="margin: 20px 0;">
            <input type="text" id="keywordSearch" placeholder="Search for admission news..." onkeyup="filterLinks()" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="keyword-grid" id="fullKeywordGrid">
            <?php
            $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $found = false;
            foreach ($keywords as $keyword) {
                if (strpos(strtolower($keyword), 'admiss') !== false) {
                    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($keyword)));
                    $slug = trim($slug, '-');
                    echo '<div class="card-mini">';
                    echo '<a href="' . $slug . '.php" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a>';
                    echo '</div>';
                    $found = true;
                }
            }
            if (!$found) echo "<p>Upcoming admission notifications across India will be listed here.</p>";
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
