<?php 
include '../includes/header.php'; 
$page_title = "Admit Card for SBI PO Exam - Download Probationary Officer Hall Ticket"; 
$meta_description = "Download Admit Card for SBI PO Exam. Get the direct link to access your State Bank of India Probationary Officer prelims & mains hall tickets."; 
$meta_keywords = "admit card for sbi po exam, sbi po hall ticket download, sbi po call letter link, sbi exam center"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">Admit Card: SBI PO Exam</h1>
                    <p class="text-white-50 mb-0">State Bank of India - Probationary Officer (PO)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        Attention! The SBI PO Preliminary/Main Exam Call Letter is now available for registered candidates.
                    </div>

                    <div class="info-section">
                        <h3>SBI PO Call Letter Download Steps</h3>
                        <ul class="step-list">
                            <li>Visit sbi.co.in/web/careers.</li>
                            <li>Go to 'Current Openings' section.</li>
                            <li>Find 'Recruitment of Probationary Officers (CRP PO)'.</li>
                            <li>Click on 'Download Online Exam Call Letter'.</li>
                            <li>Enter Registration No and Password/DOB.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD SBI PO ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">More SBI Recruitment</h3>
                <div class="row">
                    $current_kw = "admit card for sbi po exam";
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
