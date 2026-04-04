<?php 
/** 
 * student-tools.php - Dynamic Page
 */
require_once __DIR__ . '/../includes/header.php'; 

$title = "Student Tools";
$catIdResult = $conn->query("SELECT id FROM categories WHERE name = '$title'");
$catId = $catIdResult ? $catIdResult->fetch_assoc()['id'] : 0;
?>

<div class="table-box" style="margin: 20px 10px; min-height: 450px; border: 1px solid #ddd; border-top: 3px solid #000080;">
    <div class="column-title" style="background:#000080; color:white; padding:10px; text-align:center; font-weight:bold;"><?php echo $title; ?></div>
    
    <div class="column-list" style="padding: 20px;">
        <ul style="list-style: none;">
            <?php
            if ($catId > 0) {
                $links = $conn->query("SELECT title, url FROM links WHERE category_id = $catId ORDER BY created_at DESC");
                if ($links && $links->num_rows > 0) {
                    while ($link = $links->fetch_assoc()) {
                        echo '<li style="border-bottom: 1px solid #eee; padding: 10px 0;"><a href="'.BASE_URL.$link['url'].'" style="color: #000080; font-weight: bold;">'.$link['title'].'</a></li>';
                    }
                } else {
                    echo '<p style="text-align:center; padding:50px; color:#666;">No updates available for '.$title.' yet.</p>';
                }
            } else {
                echo '<p style="text-align:center; padding:20px;">This is the <strong>'.$title.'</strong> page. Content will be added soon.</p>';
            }
            ?>
        </ul>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
