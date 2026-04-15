<?php
require_once __DIR__ . '/includes/config.php';
$title = "MGSU Bikaner Result 2026, Admit Card & Exam Form";
include __DIR__ . '/includes/header.php';
?>

<main>
    <!-- Hero Engine V2 -->
    <section class="hero-v2">
        <div class="container">
            <h1>MGSU Bikaner Portal 2026</h1>
            <p>Direct access to Maharaja Ganga Singh University results, hall tickets, and official notification for the
                2025-26 academic session.</p>
            <div class="search-container">
                <input type="text" placeholder="Search Result (e.g., BA Part 2 Result)...">
                <button type="submit">Search</button>
            </div>
        </div>
    </section>

    <!-- Utility Hub -->
    <section class="container">
        <div class="utility-grid">
            <div class="u-card">
                <i class="fas fa-poll-h"></i>
                <h3>MGSU Results</h3>
                <p>Check UG, PG, and Professional course results for March/April 2026 examinations.</p>
                <a href="<?php echo SITE_URL; ?>/mgsu/results" class="btn"
                    style="display:inline-block; margin-top:1rem;">Check Now</a>
            </div>
            <div class="u-card">
                <i class="fas fa-id-badge"></i>
                <h3>Download Admit Card</h3>
                <p>Get your theory and practical exam hall tickets for current 2026 exam cycle.</p>
                <a href="<?php echo SITE_URL; ?>/mgsu/admit-card" class="btn"
                    style="display:inline-block; margin-top:1rem;">Download</a>
            </div>
            <div class="u-card">
                <i class="fas fa-calendar-check"></i>
                <h3>Exam Time Tables</h3>
                <p>Latest date sheets for annual and semester examinations of MGSU Bikaner.</p>
                <a href="<?php echo SITE_URL; ?>/mgsu/time-table" class="btn"
                    style="display:inline-block; margin-top:1rem;">View All</a>
            </div>
        </div>
    </section>

    <!-- Live News Area -->
    <section class="container news-area">
        <div class="news-box">
            <div class="news-header">
                <h2>Latest Notifications & Alerts</h2>
                <span style="color: #64748b; font-size: 0.9rem;">Updated: April 15, 2026</span>
            </div>

            <!-- Real Data Research March/April 2026 -->
            <div class="news-item">
                <span class="badge-new">RECENT</span>
                <a href="#">MGSU BA Part 3 Main Examination Result 2026 (Declared) - Direct Link</a>
            </div>
            <div class="news-item">
                <span class="badge-new">RECENT</span>
                <a href="#">Download Hall Ticket for MGSU B.Ed / M.Ed Entrance Test 2026</a>
            </div>
            <div class="news-item">
                <span class="badge-new">UPDATE</span>
                <a href="#">MGSU M.Sc Chemistry / Physics Semester II Exam Form Last Date Extended</a>
            </div>
            <div class="news-item">
                <span class="badge-new">NOTICE</span>
                <a href="#">Notification regarding Practical Exam Center Change for UG Courses (2025-26)</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>