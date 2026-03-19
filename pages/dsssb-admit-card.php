<?php 
include '../includes/header.php'; 
$page_title = "DSSSB Admit Card Download - Delhi Subordinate Services Hall Ticket"; 
$meta_description = "Download DSSSB Admit Card for TGT, PGT, Clerk, and Junior Assistant exams. Get direct hall ticket links from the official OARS portal."; 
$meta_keywords = "dsssb admit card, dsssb hall ticket download, delhi exam admit card, dsssb exam date 2024, dsssb oars login"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">DSSSB Admit Card</h1>
                    <p class="text-white-50 mb-0">Delhi Subordinate Services Selection Board</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        <strong>Latest:</strong> DSSSB has released hall tickets for multiple post codes. Check your link below.
                    </div>

                    <div class="info-section">
                        <h3>DSSSB OARS Hall Ticket Download Steps</h3>
                        <ul class="step-list">
                            <li>Visit dsssbonline.nic.in.</li>
                            <li>Login to OARS with Registration No and Password.</li>
                            <li>Go to the 'Generate Admit Card' section.</li>
                            <li>Select the Post Code and Exam Date.</li>
                            <li>Download the digital copy and check the center details.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD DSSSB ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">New Delhi Recruitments</h3>
                <div class="row">
                    $current_kw = "dsssb admit card";
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

<?php include '../includes/footer.php'; ?>
