<?php 
include '../includes/header.php'; 
$page_title = "UGC NET Exam Admit Card - Download NTA University Hall Ticket"; 
$meta_description = "UGC NET Exam Admit Card Download. Get the direct link to access your NTA UGC NET examination hall ticket and check exam venue details."; 
$meta_keywords = "ugc net exam admit card, nta net hall ticket download, ugc net call letter, university eligibility test admit card"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">UGC NET Exam Admit Card</h1>
                    <p class="text-white-50 mb-0">National Testing Agency (NTA)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-bullhorn me-2"></i>
                        The UGC NET Exam Admit Card contains specific instructions for the computer-based test (CBT).
                    </div>

                    <div class="info-section">
                        <h3>Critical Instructions on NET Admit Card</h3>
                        <p>Applicants must carry a hard copy of the admit card to the hall, along with:</p>
                        <ul class="step-list">
                            <li>Original Aadhar Card or any Govt. ID.</li>
                            <li>Transparent water bottle (optional).</li>
                            <li>Simple transparent ballpoint pen.</li>
                            <li>Additional photo for attendance sheet.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>CHECK NET EXAM ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Higher Education Links</h3>
                <div class="row">
                    $current_kw = "ugc net exam admit card";
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
