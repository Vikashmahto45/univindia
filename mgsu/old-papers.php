<?php
require_once __DIR__ . '/../includes/config.php';
$title = "MGSU Old Papers PDF - Download Previous Year Question Papers";
$desc = "Download Maharaja Ganga Singh University (MGSU) Bikaner previous year question papers. Solved and unsolved papers for BA, BSc, BCom, MA, MSc exams.";
include __DIR__ . '/../includes/header.php';
?>

<main class="container page-content" style="padding: 40px 0;">
    <section class="breadcrumb" style="margin-bottom: 2rem; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>" style="color: var(--brand-secondary);">Home</a> > <span>Previous Year
            Papers</span>
    </section>

    <div class="result-header"
        style="background: var(--brand-white); padding: 3rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); margin-bottom: 3rem;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">MGSU Previous Year Question Papers</h1>
        <p style="color: #64748b; font-size: 1.1rem; max-width: 800px;">Boost your exam preparation by practicing with
            real and verified question papers from previous MGSU Bikaner examinations (2020-2025).</p>
    </div>

    <!-- Paper Grid -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <div class="u-card" style="text-align: left; padding: 2rem;">
            <h3><i class="fas fa-university"></i> Undergraduate (UG) Papers</h3>
            <ul style="list-style: none; line-height: 2.5; margin-top: 1rem;">
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i> BA
                        Part 3 History (2023)</a></li>
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i>
                        BSc Part 2 Chemistry (2024)</a></li>
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i>
                        BCom Part 1 Accountancy (2022)</a></li>
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i>
                        BCA Semester II Mathematics (2024)</a></li>
            </ul>
        </div>
        <div class="u-card" style="text-align: left; padding: 2rem;">
            <h3><i class="fas fa-graduation-cap"></i> Postgraduate (PG) Papers</h3>
            <ul style="list-style: none; line-height: 2.5; margin-top: 1rem;">
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i> MA
                        political Science (Final) 2024</a></li>
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i>
                        MSc Physics Semester IV (2023)</a></li>
                <li><a href="https://mgsubikaner.ac.in/previous-year-question-paper/"><i class="far fa-file-pdf"></i>
                        MCom Business Admin (2024)</a></li>
            </ul>
        </div>
    </div>

    <section class="content-body"
        style="margin-top: 4rem; background: #fff; padding: 3rem; border-radius: var(--radius-md);">
        <h2 style="margin-bottom: 1.5rem;">Why Practice with MGSU Old Papers?</h2>
        <p>Expert university toppers recommend solving at least the last 5 years' papers to understand the
            <strong>repeated question patterns</strong> and <strong>mark distribution</strong>. For 2026 exams, students
            should specifically look at the 2024 and 2025 papers as they follow the most recent NEP guidelines.</p>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>