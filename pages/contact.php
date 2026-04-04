<?php 
/** 
 * contact.php - Professional Contact Us Page
 */
require_once __DIR__ . '/../includes/header.php'; 
$title = "Contact Us";
?>

<div class="table-box" style="margin: 20px 10px; min-height: 500px; border: 1px solid #ddd; border-top: 3px solid #b30000; background: #fff;">
    <div class="column-title" style="background:#b30000; color:white; padding:15px; text-align:center; font-weight:bold; font-size: 20px;"><?php echo $title; ?></div>
    
    <div class="content-body" style="padding: 30px; line-height: 1.8; color: #444;">
        <p>We value your feedback and queries. If you have any questions regarding recruitment, results, or any other content on our portal, please feel free to reach out to us.</p>
        
        <div style="margin-top: 30px; border: 1px solid #eee; padding: 25px; border-radius: 8px; background: #fafafa;">
            <h3 style="color: #000080; margin-bottom: 20px;">Send Us a Message</h3>
            <form action="#" method="post" style="display: flex; flex-direction: column; gap: 15px;">
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Your Name:</label>
                    <input type="text" name="name" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;" placeholder="Enter your full name">
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Email Address:</label>
                    <input type="email" name="email" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;" placeholder="Enter your email address">
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Subject:</label>
                    <input type="text" name="subject" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;" placeholder="Message subject">
                </div>
                <div>
                    <label style="display:block; font-weight:bold; margin-bottom:5px;">Message:</label>
                    <textarea name="message" rows="5" style="width:100%; padding:10px; border:1px solid #ddd; border-radius:4px;" placeholder="Type your message here..."></textarea>
                </div>
                <button type="submit" style="background: #000080; color: white; border: none; padding: 12px 25px; font-weight: bold; border-radius: 4px; cursor: pointer; align-self: flex-start;">Submit Message</button>
            </form>
        </div>

        <div style="margin-top: 40px; text-align: center;">
            <p><strong>Official Email:</strong> <a href="mailto:support@univindia.online" style="color:#b30000;">support@univindia.online</a></p>
            <p style="font-size: 13px; color: #888; margin-top: 10px;">Note: We usually respond to all queries within 24-48 hours during business days.</p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
