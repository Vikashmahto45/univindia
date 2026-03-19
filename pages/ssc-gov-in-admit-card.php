<?php include '../header.php'; ?>
<?php 
$page_title = "SSC Gov In Admit Card Download - Staff Selection Commission Hall Ticket";
$meta_description = "Download SSC Gov In Admit Card for CGL, CHSL, MTS, and GD Constable. Get direct links for all SSC regional recruitment portals.";
$meta_keywords = "ssc gov in admit card, ssc admit card download, ssc official hall ticket, ssc regional portal links";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">SSC Gov In Admit Card</h1>
                    <p class="text-white-50 mb-0">Official Staff Selection Commission Portal</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-external-link-alt me-2"></i>
                        Access the new ssc.gov.in portal for latest notifications and e-admit card links.
                    </div>

                    <div class="info-section">
                        <h3>All SSC Regional Admit Card Links</h3>
                        <p>Search by your applied region to find the official hall ticket:</p>
                        <ul class="step-list">
                            <li><a href="https://sscnr.nic.in" target="_blank">SSC North Region</a></li>
                            <li><a href="https://sscsr.gov.in" target="_blank">SSC Southern Region</a></li>
                            <li><a href="https://ssc-cr.org" target="_blank">SSC Central Region</a></li>
                            <li><a href="https://sscwr.net" target="_blank">SSC Western Region</a></li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-home me-2"></i>SSC GOV IN HOME PORTAL
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Popular SSC Results</h3>
                <div class="row">
                    <?php 
                    $current_kw = "ssc gov in admit card";
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