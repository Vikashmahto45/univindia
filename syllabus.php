<?php 
$page_title = "Exam Syllabus - Comprehensive Course Guides";
$meta_description = "Download the latest syllabus for board exams, university courses, and competitive tests at Univindia.online.";
$meta_keywords = "syllabus, exam pattern, course curriculum, syllabus download";
include 'includes/header.php'; 
?>

<div class="container" style="margin-top: 30px;">
    <div class="card" style="border-top: 4px solid var(--primary-color);">
        <h1 style="color: var(--nav-color); border-bottom: 2px solid #eee; padding-bottom: 10px;">Detailed Exam Syllabus</h1>
        <p>Access the official course curriculum and exam patterns for your academic and competitive preparations.</p>
        
        <div class="search-container" style="margin: 20px 0;">
            <input type="text" id="keywordSearch" placeholder="Search for syllabus..." onkeyup="filterLinks()" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="keyword-grid" id="fullKeywordGrid">
            <?php
            $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $found = false;
            foreach ($keywords as $keyword) {
                if (strpos(strtolower($keyword), 'syllabus') !== false) {
                    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($keyword)));
                    $slug = trim($slug, '-');
                    echo '<div class="card-mini">';
                    echo '<a href="' . $slug . '.php" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a>';
                    echo '</div>';
                    $found = true;
                }
            }
            if (!$found) echo "<p>Syllabus documents for major exams will be posted here regularly.</p>";
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
