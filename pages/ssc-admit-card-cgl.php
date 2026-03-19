<?php 
include '../header.php'; 
$page_title = "SSC Admit Card CGL - Download Tier 1 & 2 Hall Tickets"; 
$meta_description = "SSC Admit Card CGL Download. Access region-wise direct links to download your SSC Combined Graduate Level (CGL) examination hall ticket."; 
$meta_keywords = "ssc admit card cgl, ssc cgl hall ticket, download cgl admit card, ssc cgl tier 1 admit card download"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">SSC CGL Admit Card Download</h1>
                    <p class="text-white-50 mb-0">Regional SSC Hall Ticket Access</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        Candidates can now check their SSC CGL exam status and download their admit cards.
                    </div>

                    <div class="info-section">
                        <h3>SSC CGL Admit Card Download Links</h3>
                        <p>Applicants can visit the specific regional website link below to fetch the call letter:</p>
                        <ul class="step-list">
                            <li>North Eastern Region (Guwahati): sscner.org.in</li>
                            <li>Eastern Region (Kolkata): sscer.org</li>
                            <li>MP Sub-Region (Raipur): sscmpr.org</li>
                            <li>North Western Region (Chandigarh): sscnwr.org</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD CGL ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">More SSC Resources</h3>
                <div class="row">
                    $current_kw = "ssc admit card cgl";
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
