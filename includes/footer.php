    <?php include_once __DIR__ . '/link_map.php'; ?>
    <section class="interlinking-section" style="background: var(--nav-color); padding: 50px 0; border-top: 5px solid var(--secondary-color);">
        <div class="container">
            <h3 style="color: #fff; margin-bottom: 25px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Related Results & Fast-Track Gateways</h3>
            <div class="link-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 12px;">
                <?php 
                if(isset($link_map)) {
                    $count = 0;
                    foreach($link_map as $kw => $url) {
                        echo '<a href="' . BASE_URL . $url . '" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.85rem; padding: 8px 12px; border-radius: 4px; background: rgba(255,255,255,0.05); transition: all 0.3s;" onmouseover="this.style.color=\'#fff\'; this.style.background=\'rgba(255,255,255,0.15)\'" onmouseout="this.style.color=\'rgba(255,255,255,0.8)\'; this.style.background=\'rgba(255,255,255,0.05)\'">' . ucwords($kw) . '</a>';
                        $count++;
                        if($count >= 60) break;
                    }
                }
                ?>
                <a href="<?php echo BASE_URL; ?>results.php" style="color: var(--secondary-color); font-weight: 800; padding: 8px 12px; text-decoration: none;">VIEW ALL 1000+ RESULTS &rarr;</a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="<?php echo BASE_URL; ?>about-us.php">About Us</a>
                <span class="footer-divider">|</span>
                <a href="<?php echo BASE_URL; ?>privacy-policy.php">Privacy Policy</a>
                <span class="footer-divider">|</span>
                <a href="<?php echo BASE_URL; ?>contact-us.php">Contact Us</a>
                <span class="footer-divider">|</span>
                <a href="<?php echo BASE_URL; ?>disclaimer.php">Disclaimer</a>
                <span class="footer-divider">|</span>
                <a href="<?php echo BASE_URL; ?>terms-and-conditions.php">Terms & Conditions</a>
            </div>
            <p class="copyright">&copy; <?php echo date("Y"); ?> Univindia.online - Your Trusted University Educational Portal</p>
            <p class="disclaimer-text">Disclaimer: This is NOT an official university website. It is an educational portal providing information for students.</p>
        </div>
    </footer>
</body>
</html>
