<?php include '../header.php'; ?>
<?php 
$page_title = "NVS Admit Card Download - Navodaya Vidyalaya Samiti Hall Ticket";
$meta_description = "Download NVS Admit Card for TGT, PGT, and Principal recruitment. Get the direct hall ticket link from the official NVS portal.";
$meta_keywords = "nvs admit card, navodaya vidayalaya admit card download, nvs teacher hall ticket, nvs recruitment 2024";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">NVS Admit Card</h1>
                    <p class="text-white-50 mb-0">Navodaya Vidyalaya Samiti (NVS) Recruitment</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        <strong>Update:</strong> NVS has released the hall tickets for the direct recruitment drive (TGT/PGT).
                    </div>

                    <div class="info-section">
                        <h3>NVS Hall Ticket Download Instructions</h3>
                        <ul class="step-list">
                            <li>Visit the official NVS website: navodaya.gov.in.</li>
                            <li>Navigate to 'Recruitment' -> 'Admit Card'.</li>
                            <li>Select the link for TGT/PGT/Non-Teaching posts.</li>
                            <li>Enter your credentials to download.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD NVS ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Education Sector Recruitment</h3>
                <div class="row">
                    <?php 
                    $current_kw = "nvs admit card";
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