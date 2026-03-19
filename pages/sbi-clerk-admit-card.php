<?php 
include '../includes/header.php'; 
$page_title = "SBI Clerk Admit Card Download - State Bank Clerk Prelims Hall Ticket"; 
$meta_description = "Download SBI Clerk Admit Card. Get direct links for Junior Associate (JA) preliminary and main exam hall tickets with shift timings."; 
$meta_keywords = "sbi clerk admit card, sbi clerk hall ticket download, sbi ja prelims admit card, sbi clerk exam date 2024"; 
?>

<main class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="result-card shadow-sm">
                <div class="card-header-custom p-4">
                    <h1 class="h2 mb-0">SBI Clerk Admit Card</h1>
                    <p class="text-white-50 mb-0">Junior Associates (Customer Support & Sales)</p>
                </div>
                
                <div class="card-body p-4">
                    <div class="announcement-bar mb-4">
                        <i class="fas fa-piggy-bank me-2"></i>
                        SBI has officially released the call letters for the upcoming Junior Associate recruitment.
                    </div>

                    <div class="info-section">
                        <h3>SBI Clerk Call Letter Download Instructions</h3>
                        <ul class="step-list">
                            <li>Visit sbi.co.in/careers.</li>
                            <li>Go to 'Join SBI' -> 'Current Openings'.</li>
                            <li>Find the link for 'Download Call Letter' under JA recruitment.</li>
                            <li>Login with Registration No and DOB.</li>
                            <li>Download the hall ticket and check reporting instructions.</li>
                        </ul>
                    </div>

                    <div class="mt-5 text-center">
                        <a href="#" class="btn btn-primary btn-lg px-5 py-3 shadow">
                            <i class="fas fa-download me-2"></i>DOWNLOAD SBI CLERK ADMIT CARD
                        </a>
                    </div>
                </div>
            </article>

            <div class="related-sections mt-5">
                <h3 class="premium-title">Recent SBI Hall Tickets</h3>
                <div class="row">
                    $current_kw = "sbi clerk admit card";
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
