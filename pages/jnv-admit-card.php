<?php 
include '../header.php'; 
$page_title = "JNV Admit Card Download - Navodaya Selection Test Hall Ticket"; 
$meta_description = "Download JNV Admit Card Class 6 & 9. Get the direct link to access your Navodaya Vidyalaya entrance exam call letter and venue details."; 
$meta_keywords = "jnv admit card, navodaya hall ticket download, jnvst admit card link, jnv class 6 exam hall ticket"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">JNV Admit Card</h1>
                    <p class="text-white-50 mb-0">Navodaya Selection Test Call Letter</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        The JNV Admit Card is mandatory for entry into the selection test. Download yours now.
                    </div>

                    <div class="info-section">
                        <h3>Frequently Asked Questions (JNVST)</h3>
                        <p><strong>Is there any offline admit card?</strong> No, Navodaya Samiti only provides digital admit cards via the official portal.</p>
                        <p><strong>What to carry to the JNV center?</strong> Carry the printed admit card, a valid photo ID of the student, and a blue/black ballpoint pen.</p>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>GO TO JNV PORTAL
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">School Admission Series</h3>
                <div class="row">
                    $current_kw = "jnv admit card";
                    $related_count = 0;
                    foreach($link_map as $kw => $url) {
                        if($kw != $current_kw && $related_count < 6) {
                            echo '<div class="col-md-6 mb-3"><div class="card-mini shadow-sm"><a href="'.$url.'">'.ucwords($kw).'</a></div></div>';
                            $related_count++;
                        }
                    }
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            
        </div>
    </div>
</main>

<?php include '../footer.php'; ?>
