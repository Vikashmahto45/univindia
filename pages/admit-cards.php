<?php 
include '../header.php'; 
$page_title = "Admit Cards - Univindia.online Hall Ticket Portal"; 
$meta_description = "Download latest admit cards and hall tickets for competitive exams, university semesters, and board tests at Univindia.online."; 
$meta_keywords = "admit card, hall ticket, download admit card, exam hall ticket"; 
?>

<div class='sr-page-wrapper'>
    <div class='sr-breadcrumb'><a href='<?php echo BASE_URL; ?>'>Home</a> &raquo; Results &raquo; Admit Cards - Univindia.online Hall Ticket Portal</div>
    <h2 class='sr-title'>Exam Admit Cards Archive</h2>
    <div class='sr-content'>
        <div class="container" style="margin-top: 30px;">
    <div class="card" style="border-top: 4px solid var(--primary-color);">
        
        <p>Browse and download the latest admit cards for various university and recruitment examinations across India.</p>
        
        <div class="search-container" style="margin: 20px 0;">
            <input type="text" id="keywordSearch" placeholder="Search for admit cards..." onkeyup="filterLinks()" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div class="keyword-grid" id="fullKeywordGrid">
            $keywords = file('keyword.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $found = false;
            foreach ($keywords as $keyword) {
                if (strpos(strtolower($keyword), 'admit') !== false) {
                    $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', trim($keyword)));
                    $slug = trim($slug, '-');
                    echo '<div class="card-mini">';
                    echo '<a href="' . $slug . '.php" title="' . ucwords($keyword) . '"><span class="new-tag">New</span>' . ucwords($keyword) . '</a>';
                    echo '</div>';
                    $found = true;
                }
            }
            if (!$found) echo "<p>No admit cards are currently listed. Please check back later.</p>";
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
    </div>
</div>


<?php include '../footer.php'; ?>