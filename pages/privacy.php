<?php 
/** 
 * privacy.php - Professional Privacy Policy
 */
require_once __DIR__ . '/../includes/header.php'; 
$title = "Privacy Policy";
?>

<div class="table-box" style="margin: 20px 10px; min-height: 500px; border: 1px solid #ddd; border-top: 3px solid #b30000; background: #fff;">
    <div class="column-title" style="background:#b30000; color:white; padding:15px; text-align:center; font-weight:bold; font-size: 20px;"><?php echo $title; ?></div>
    
    <div class="content-body" style="padding: 30px; line-height: 1.8; color: #444; font-size:14px;">
        <p>At <strong>univindia.online</strong>, accessible from http://localhost/univindia, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by univindia.online and how we use it.</p>

        <h3 style="color:#000080; margin-top:20px;">Log Files</h3>
        <p>univindia.online follows a standard procedure of using log files. These files log visitors when they visit websites. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks.</p>

        <h3 style="color:#000080; margin-top:20px;">Cookies and Web Beacons</h3>
        <p>Like any other website, univindia.online uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

        <h3 style="color:#000080; margin-top:20px;">Third Party Privacy Policies</h3>
        <p>univindia.online's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>

        <h3 style="color:#000080; margin-top:20px;">Consent</h3>
        <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

        <p style="margin-top:20px; border-top: 1px solid #eee; padding-top:20px;">Last updated: <?php echo date('F d, Y'); ?></p>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
