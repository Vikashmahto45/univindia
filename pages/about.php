<?php 
/** 
 * about.php - Professional About Us Page
 */
require_once __DIR__ . '/../includes/header.php'; 
$title = "About Us";
?>

<div class="table-box" style="margin: 20px 10px; min-height: 500px; border: 1px solid #ddd; border-top: 3px solid #b30000; background: #fff;">
    <div class="column-title" style="background:#b30000; color:white; padding:15px; text-align:center; font-weight:bold; font-size: 20px;"><?php echo $title; ?></div>
    
    <div class="content-body" style="padding: 30px; line-height: 1.8; color: #444;">
        <h2 style="color: #000080; margin-bottom: 20px;">Welcome to univindia.online</h2>
        <p><strong>UnivIndia</strong> is a premier online portal dedicated to providing the most accurate and timely information regarding <strong>University Exams, Government Jobs (Sarkari Naukri), Admit Cards, Results,</strong> and <strong>Admissions</strong> across India.</p>
        
        <p style="margin-top: 15px;">Our mission is to empower students and job seekers by simplifying the process of finding critical notifications. We understand the importance of time in the competitive world of education and careers, which is why our team works tirelessly to aggregate data from hundreds of official university and government sources into one easy-to-navigate platform.</p>

        <h3 style="color: #000080; margin-top: 25px;">What We Provide:</h3>
        <ul style="margin-left: 20px; margin-top: 10px;">
            <li>Daily updates on latest Government Job vacancies (SSC, UPSC, Bank, Railway, etc).</li>
            <li>Direct links to download Admit Cards and Hall Tickets.</li>
            <li>Fastest University Result updates for all major Indian states.</li>
            <li>Comprehensive Syllabus and Answer Key downloads.</li>
            <li>Admission alerts for top colleges and universities.</li>
        </ul>

        <p style="margin-top: 20px;">At <strong>univindia.online</strong>, we prioritize accuracy. However, we always encourage our users to cross-verify information with the official websites mentioned in our posts. Our goal is to be your most trusted companion in your journey toward a successful career.</p>
        
        <p style="margin-top: 20px; font-weight: bold; color: #b30000;">Thank you for choosing UnivIndia!</p>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
