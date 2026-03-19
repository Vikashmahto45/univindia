<?php include '../header.php'; ?>
<?php 
$page_title = "RPF Admit Card 2024 Download - SI & Constable Hall Ticket Link";
$meta_description = "Download RPF Admit Card 2024. Get the direct link to access your Railway Protection Force exam hall ticket and shift timings.";
$meta_keywords = "rpf admit card 2024, rpf constable admit card download, rpf si hall ticket, railway rpf exam date 2024";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">RPF Admit Card 2024</h1>
                    <p class="text-white-50 mb-0">Railway Protection Force (RPF/RPSF)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        <strong>Latest:</strong> RPF 2024 Recruitment CBT phase-1 admit cards are being processed region-wise.
                    </div>

                    <div class="info-section">
                        <h3>RPF 2024 Call Letter Highlights</h3>
                        <ul class="step-list">
                            <li>Exam Type: Computer Based Test (CBT).</li>
                            <li>ID Requirement: Aadhar based biometric verification is mandatory.</li>
                            <li>Negative Marking: 1/3 mark deducted for each wrong answer.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD RPF 2024 ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Railway Support Services</h3>
                <div class="row">
                    <?php 
                    $current_kw = "rpf admit card 2024";
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