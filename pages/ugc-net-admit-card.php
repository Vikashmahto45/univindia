<?php 
include '../includes/header.php'; 
$page_title = "UGC NET Admit Card Download - NTA National Eligibility Test Hall Ticket"; 
$meta_description = "Download UGC NET Admit Card. Access direct links for JRF and Assistant Professor eligibility exam hall tickets from NTA portal."; 
$meta_keywords = "ugc net admit card, nta ugc net hall ticket download, net exam date, ugc net jrf admit card link"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">UGC NET Admit Card</h1>
                    <p class="text-white-50 mb-0">Entrance for JRF & Assistant Professor</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        The UGC NET hall ticket is released separately for each subject and phase. Download yours now.
                    </div>

                    <div class="info-section">
                        <h3>UGC NET Call Letter Download Guide</h3>
                        <ul class="step-list">
                            <li>Visit the official portal at ugcnet.nta.nic.in.</li>
                            <li>Download the exam schedule PDF to find your shift date.</li>
                            <li>Access 'Candidate Activity Board' -> 'Admit Card'.</li>
                            <li>Login to download and check the self-declaration requirements.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD UGC NET ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Elite Exam Hall Tickets</h3>
                <div class="row">
                    $current_kw = "ugc net admit card";
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
