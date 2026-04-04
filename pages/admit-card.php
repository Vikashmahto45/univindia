<?php 
/** 
 * admit-card.php - Sarkari Style Dynamic Linker
 */
require_once __DIR__ . '/../includes/header.php'; 
?>

<main>
    <div class="sarkari-box" style="margin: 20px auto; max-width: 1000px; border: 2px solid #000;">
        <div class="sarkari-box-title" style="font-size: 24px; padding: 15px;">ALL ADMIT CARDS</div>
        
        <ul class="sarkari-list" style="padding: 20px; font-size: 16px;">
            <?php
            // Scan for all files containing 'admit' in this pages directory
            // This guarantees that ONLY existing files are shown, and NONE are broken.
            $files = glob("*{admit}*.php", GLOB_BRACE);
            
            // Sort files alphabetically
            sort($files);

            $count = 0;
            foreach($files as $file) {
                // Skip this file itself
                if ($file === 'admit-card.php') continue;
                
                // Create a clean readable title from the filename
                $clean_title = str_replace('.php', '', $file);
                $clean_title = str_replace('-', ' ', $clean_title);
                $clean_title = ucwords($clean_title);
                
                echo '<li style="padding: 10px; border-bottom: 1px dotted #ccc;">
                        <a href="'.$file.'" style="font-size: 16px;">'.$clean_title.'</a>
                      </li>';
                $count++;
            }
            
            if ($count === 0) {
                 echo '<li><h2 style="color:#cc0000; text-align:center;">No Admit Cards Found</h2></li>';
            }
            ?>
        </ul>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
