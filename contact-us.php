<?php
require_once __DIR__ . '/includes/config.php';
$title = "Contact Us";
include __DIR__ . '/includes/header.php';
?>

<main class="container page-content" style="padding: 60px 0;">
    <h1 style="font-size: 3rem; margin-bottom: 1rem;">Contact Us</h1>
    <p style="font-size: 1.2rem; color: #64748b; margin-bottom: 3rem;">If you have any questions regarding MGSU Bikaner
        results or exams, please use the official university contact details below.</p>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem;">
        <div class="contact-info"
            style="background: #fff; padding: 3rem; border-radius: 12px; box-shadow: var(--shadow-sm);">
            <h2 style="margin-bottom: 2rem;">University Helpdesk</h2>
            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--brand-primary);">Official Address</h4>
                <p>Maharaja Ganga Singh University<br>NH 15, Jaisalmer Road, Bikaner,<br>Rajasthan 334004, India</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--brand-primary);">Examination Help (IT)</h4>
                <p><i class="fas fa-phone"></i> 9982201201 (Sh. Rajesh Saharan)</p>
                <p><i class="fas fa-phone"></i> 9460713090 / 7230068203</p>
            </div>

            <div style="margin-bottom: 1.5rem;">
                <h4 style="color: var(--brand-primary);">General Enquiries</h4>
                <p><i class="fas fa-phone"></i>
                    <?php echo HELPLINE_NUMBER; ?>
                </p>
            </div>
        </div>

        <div class="portal-info"
            style="background: var(--brand-primary); color: #fff; padding: 3rem; border-radius: 12px;">
            <h2 style="margin-bottom: 2rem; color: var(--brand-secondary);">Submit an Inquiry</h2>
            <p style="margin-bottom: 2rem;">Please do not send your roll number or sensitive data to us. For official
                complaints, contact the University Registrar at <strong>registrar@mgsubikaner.ac.in</strong>.</p>

            <form style="display: grid; gap: 1rem;">
                <input type="text" placeholder="Your Name"
                    style="padding: 1rem; border-radius: 8px; border: none; background: #112240; color: #fff;">
                <input type="email" placeholder="Your Email"
                    style="padding: 1rem; border-radius: 8px; border: none; background: #112240; color: #fff;">
                <textarea placeholder="Your Message" rows="5"
                    style="padding: 1rem; border-radius: 8px; border: none; background: #112240; color: #fff;"></textarea>
                <button class="btn" type="button" style="padding: 1rem;">Send Message</button>
            </form>
        </div>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>