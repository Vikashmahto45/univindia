<?php
http_response_code(404);
$title = '404 - Page Not Found | UnivIndia';
$meta_description = 'The page you are looking for does not exist. Please visit UnivIndia homepage for latest results, admit cards and job notifications.';
$meta_keywords = 'UnivIndia, 404, Page Not Found';
require_once __DIR__ . '/../includes/header.php';
?>

<main style="text-align:center; padding: 60px 20px;">
    <h1 style="font-size:72px; color:#800000; margin-bottom:10px;">404</h1>
    <h2 style="font-size:24px; color:#333; margin-bottom:20px;">Page Not Found</h2>
    <p style="font-size:16px; color:#666; margin-bottom:30px;">
        Sorry, the page you are looking for does not exist or has been moved.<br>
        Please check the URL or go back to the homepage.
    </p>
    <div style="margin-bottom:30px;">
        <a href="<?php echo SITE_URL; ?>" style="background:#800000; color:#fff; padding:12px 30px; text-decoration:none; font-weight:bold; font-size:16px;">
            ← Go to Homepage
        </a>
    </div>
    <div style="margin-top:20px;">
        <p style="color:#888; font-size:14px;">Looking for something? Try these popular pages:</p>
        <ul style="list-style:none; padding:0; margin-top:10px;">
            <li><a href="<?php echo SITE_URL; ?>pages/result.php" style="color:#0000ff; font-weight:bold;">📋 Latest Results</a></li>
            <li style="margin-top:8px;"><a href="<?php echo SITE_URL; ?>pages/admit-card.php" style="color:#0000ff; font-weight:bold;">🪪 Admit Card</a></li>
            <li style="margin-top:8px;"><a href="<?php echo SITE_URL; ?>pages/latest-job.php" style="color:#0000ff; font-weight:bold;">💼 Latest Jobs</a></li>
            <li style="margin-top:8px;"><a href="<?php echo SITE_URL; ?>pages/answer-key.php" style="color:#0000ff; font-weight:bold;">🔑 Answer Key</a></li>
        </ul>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
