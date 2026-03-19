<?php 
include '../includes/header.php'; 
$page_title = "CET Admit Card 2024 Download - Rajasthan CET Hall Ticket Link"; 
$meta_description = "Download CET Admit Card 2024. Get direct links for Rajasthan CET Graduation and 12th Level examination hall tickets easily."; 
$meta_keywords = "cet admit card 2024, rajasthan cet hall ticket download, rsmssb cet admit card, cet 12th level admit card, cet graduation admit card"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">CET Admit Card 2024</h1>
                    <p class="text-white-50 mb-0">Rajasthan Common Eligibility Test (CET)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        <strong>Update:</strong> RSMSSB has released the CET exam schedule and admit card link for 2024 sessions.
                    </div>

                    <div class="info-section">
                        <h3>Steps to Download Rajasthan CET Hall Ticket</h3>
                        <ul class="step-list">
                            <li>Visit the SSO Rajasthan portal: sso.rajasthan.gov.in.</li>
                            <li>Login with your SSOID and Password.</li>
                            <li>Go to 'Recruitment Stack 2' -> 'Get Admit Card'.</li>
                            <li>Click on 'Common Eligibility Test (Graduate/Senior Secondary Level)'.</li>
                            <li>Download the admit card and verify the center location.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD CET 2024 ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">RSMSSB Exam Services</h3>
                <div class="row">
                    $current_kw = "cet admit card 2024";
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
