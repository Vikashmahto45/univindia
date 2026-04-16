<?php require_once 'config.php'; ?>
<footer>
    <div class="nav-container" style="flex-direction: column;">
        <h2 class="logo" style="margin-bottom: 20px;">UnivIndia</h2>
        <p style="max-width: 600px; margin: 0 auto;">Your premium source for MGSU Results, Admit Cards, and Educational Updates. Providing expert guidance for Maharaja Ganga Singh University students.</p>
        
        <div class="footer-nav">
            <a href="<?php echo htmlspecialchars($site_url); ?>/index.php">Home</a>
            <a href="<?php echo htmlspecialchars($site_url); ?>/mgsu-results.php">MGSU Results</a>
            <a href="<?php echo htmlspecialchars($site_url); ?>/about-us.php">About Us</a>
            <a href="<?php echo htmlspecialchars($site_url); ?>/contact-us.php">Contact Us</a>
            <a href="<?php echo htmlspecialchars($site_url); ?>/privacy-policy.php">Privacy Policy</a>
            <a href="<?php echo htmlspecialchars($site_url); ?>/terms.php">Terms of Service</a>
        </div>
        
        <span class="copyright">
            &copy; <?php echo date("Y"); ?> UnivIndia. All Rights Reserved. Not affiliated officially with MGSU Bikaner.
        </span>
    </div>
</footer>
</body>
</html>
