<?php include '../header.php'; ?>
<?php 
$page_title = "SSC CGL Admit Card Download - Combined Graduate Level Hall Ticket";
$meta_description = "Download SSC CGL Admit Card. Get the direct regional links to access your CGL Tier 1 and Tier 2 examination admit cards easily.";
$meta_keywords = "ssc cgl admit card, ssc cgl exam hall ticket, ssc admit card download, cgl hall ticket 2024 link";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">SSC CGL Admit Card</h1>
                    <p class="text-white-50 mb-0">Staff Selection Commission - Combined Graduate Level</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        <strong>Latest Update:</strong> All regional links for SSC CGL Tier 1 admit cards are now active.
                    </div>

                    <div class="info-section">
                        <h3>Instructions for SSC CGL Exam Hall Ticket</h3>
                        <p>Applicants must verify the following details on their call letter:</p>
                        <ul class="step-list">
                            <li>Exam Center Name and Code.</li>
                            <li>Candidate's Photograph and Signature.</li>
                            <li>Roll Number and Registration Number.</li>
                            <li>Exam Date, Shift Time, and Reporting Time.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD SSC CGL ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Trending Sector Hall Tickets</h3>
                <div class="row">
                    <?php 
                    $current_kw = "ssc cgl admit card";
                    $related_count = 0;
                    foreach($link_map as $kw => $url) {
                        if($kw != $current_kw && $related_count < 6) {
                            echo '<div class="col-md-6 mb-3"><div class="card-mini shadow-sm"><a href="'.$url.'">'.ucwords($kw).'</a></div></div>';
                            $related_count++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <?php include 'includes/sidebar.php'; ?>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
<?php include '../footer.php'; ?>