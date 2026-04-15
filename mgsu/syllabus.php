<?php
require_once __DIR__ . '/../includes/config.php';
$title = "MGSU Syllabus 2025-26 PDF Download - BA, BSc, BCom, MA (NEP 2020)";
$desc = "Download Maharaja Ganga Singh University (MGSU) Bikaner Syllabus 2025-26. Latest NEP 2020 semester-wise syllabus PDF for UG and PG courses.";
include __DIR__ . '/../includes/header.php';
?>

<main class="container page-content" style="padding: 40px 0;">
    <section class="breadcrumb" style="margin-bottom: 2rem; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>" style="color: var(--brand-secondary);">Home</a> > <span>Syllabus
            2025-26</span>
    </section>

    <div class="result-header"
        style="background: var(--brand-white); padding: 3rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); margin-bottom: 3rem;">
        <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">MGSU Bikaner Syllabus Hub (NEP 2020)</h1>
        <p style="color: #64748b; font-size: 1.1rem; max-width: 800px;">Maharaja Ganga Singh University has updated its
            curriculum to align with the National Education Policy (NEP) 2020. Download the latest semester-wise PDF
            below.</p>
    </div>

    <!-- Syllabus Categories -->
    <div class="syllabus-grid"
        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        <!-- Faculty of Arts -->
        <div class="u-card" style="text-align: left; padding: 2rem;">
            <h3 style="border-bottom: 2px solid var(--brand-bg); padding-bottom: 0.5rem; margin-bottom: 1.5rem;"><i
                    class="fas fa-book-open"></i> Faculty of Arts (BA / MA)</h3>
            <ul style="list-style: none; line-height: 2.5;">
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">BA Part 1 English Literature
                        (Semester I & II)</a></li>
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">BA Part 2 Hindi Sahitya (Semester III
                        & IV)</a></li>
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">MA Political Science (Semester
                        System)</a></li>
            </ul>
        </div>

        <!-- Faculty of Science -->
        <div class="u-card" style="text-align: left; padding: 2rem;">
            <h3 style="border-bottom: 2px solid var(--brand-bg); padding-bottom: 0.5rem; margin-bottom: 1.5rem;"><i
                    class="fas fa-flask"></i> Faculty of Science (BSc / MSc)</h3>
            <ul style="list-style: none; line-height: 2.5;">
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">BSc Physics / Chemistry (Semester 1
                        TO 4)</a></li>
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">BSc Zoology / Botany (NEP
                        Pattern)</a></li>
                <li><i class="fas fa-file-pdf" style="color: #ef4444;"></i> <a
                        href="https://mgsubikaner.ac.in/syllabus/" target="_blank">MSc Computer Science (CBCS
                        Scheme)</a></li>
            </ul>
        </div>
    </div>

    <!-- Important Information about CBCS/NEP -->
    <section class="content-body"
        style="margin-top: 4rem; background: #fff; padding: 3rem; border-radius: var(--radius-md);">
        <h2 style="margin-bottom: 1.5rem;">Understanding MGSU New Exam Pattern 2026</h2>
        <p>Under the NEP 2020 guidelines, MGSU has introduced a credit-based evaluation system. Key elements include:
        </p>
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <div style="flex: 1; background: #f8fafc; padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--brand-primary);">Internal (30%)</h4>
                <p style="font-size: 0.9rem;">Based on college-level assignments, mid-term tests, and classroom
                    attendance.</p>
            </div>
            <div style="flex: 1; background: #f8fafc; padding: 1.5rem; border-radius: 8px;">
                <h4 style="color: var(--brand-primary);">Theory (70%)</h4>
                <p style="font-size: 0.9rem;">Conducted as End-Semester Examinations (ESE) by the University.</p>
            </div>
        </div>
        <p style="margin-top: 2rem;">Students are advised to download and read the <strong>Scheme of
                Examination</strong> provided at the beginning of each syllabus PDF to understand the minimum passing
            marks and credit distribution.</p>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>