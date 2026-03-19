<?php include '../header.php'; ?>
<?php 
$page_title = "Jawahar Navodaya Vidyalaya Admit Card Download - JNVST Hall Ticket";
$meta_description = "Download Jawahar Navodaya Vidyalaya (JNV) Admit Card. Get direct links for Class 6th and 9th JNVST entrance exam hall tickets.";
$meta_keywords = "jawahar navodaya vidyalaya admit card, jnvst hall ticket download, jnv class 6 admit card, navodaya school admit card 2024";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">JNV Admit Card</h1>
                    <p class="text-white-50 mb-0">Jawahar Navodaya Vidyalaya Selection Test (JNVST)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-school me-2"></i>
                        <strong>Notice:</strong> NVS header activated the download link for Class VI and IX entrance exams.
                    </div>

                    <div class="info-section">
                        <h3>JNVST Hall Ticket Download Guide</h3>
                        <ul class="step-list">
                            <li>Visit the NVS Portal: navodaya.gov.in.</li>
                            <li>Click on 'Click here to download the Admit Cards for Class VI/IX JNVST'.</li>
                            <li>Enter your Registration Number and Date of Birth.</li>
                            <li>Verify the arithmetic captcha and click 'Sign In'.</li>
                            <li>Download the admit card and check your JNV exam center.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD JNV ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">School Entrance Links</h3>
                <div class="row">
                    <?php 
                    $current_kw = "jawahar navodaya vidyalaya admit card";
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