<?php include '../header.php'; ?>
<?php 
$page_title = "RRB Bank Admit Card Download - IBPS RRB Officer & Assistant Hall Ticket";
$meta_description = "Download RRB Bank Admit Card (IBPS RRB). Get direct links for Office Assistant and Officer Scale I, II, III prelims and mains hall tickets.";
$meta_keywords = "rrb bank admit card, ibps rrb admit card download, rrb office assistant hall ticket, rrb officer scale 1 admit card";
include '../includes/header.php'; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">RRB Bank (IBPS) Admit Card</h1>
                    <p class="text-white-50 mb-0">Regional Rural Banks Recruitment Portal</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-university me-2"></i>
                        <strong>Latest:</strong> IBPS has activated the download link for RRB CRP XIII (Officer/Assistant) exams.
                    </div>

                    <div class="info-section">
                        <h3>Steps to Download IBPS RRB Hall Ticket</h3>
                        <ul class="step-list">
                            <li>Visit ibps.in.</li>
                            <li>Click on 'CRP RRBs' and select your specific cycle.</li>
                            <li>Click on the Online Preliminary/Main Exam Call Letter link.</li>
                            <li>Enter your Registration No and Password.</li>
                            <li>Choose language (English/Hindi) and download the file.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD RRB BANK ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Banking Sector Results</h3>
                <div class="row">
                    <?php 
                    $current_kw = "rrb bank admit card";
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