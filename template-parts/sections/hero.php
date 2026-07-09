<?php
/**
 * Hero and about section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$hero_image = 'https://e-learning.su.edu.ly/pluginfile.php/1/theme_degrade/editor_home/56619546/1111111111111.png';
?>
<section class="hero-section" id="about" style="--hero-image: url('<?php echo esc_url($hero_image); ?>')">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <span class="kicker hero-kicker"><?php echo esc_html(sirte_elc_t('البوابة الرسمية', 'Official Portal')); ?></span>
        <h1><?php echo esc_html(sirte_elc_t('مركز التعليم الإلكتروني بجامعة سرت', 'E-Learning Center at Sirte University')); ?></h1>
        <p class="hero-lead">
            <?php
            echo esc_html(sirte_elc_t(
                'مؤسسة تقنية متخصصة أنشئت بموجب قرار وزير التعليم العالي والبحث العلمي رقم (1620) لسنة 2022م، وتهدف إلى قيادة التحول الرقمي في العملية التعليمية داخل الجامعة.',
                'A specialized technology institution established by Decision No. (1620) of 2022 of the Minister of Higher Education and Scientific Research, leading the digital transformation of teaching and learning across the university.'
            ));
            ?>
        </p>
        <div class="hero-actions">
            <a class="button button-primary" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
                <?php echo sirte_elc_icon('graduation'); ?>
                <span><?php echo esc_html(sirte_elc_t('ادخل إلى منصتك التعليمية', 'Enter your learning platform')); ?></span>
            </a>
            <a class="button button-light" href="#support">
                <?php echo sirte_elc_icon('message'); ?>
                <span><?php echo esc_html(sirte_elc_t('الدعم الفني', 'Technical Support')); ?></span>
            </a>
        </div>
    </div>
</section>

<section class="section about-band">
    <div class="container about-grid">
        <div class="about-copy">
            <?php
            sirte_elc_section_heading(
                sirte_elc_t('عن المركز', 'About the Center'),
                sirte_elc_t('نقود التحول الرقمي في التعليم الجامعي', 'Leading digital transformation in university education')
            );
            ?>
            <p>
                <?php
                echo esc_html(sirte_elc_t(
                    'يشرف المركز على دمج تقنيات التعلم الإلكتروني والتعلم المدمج في جميع الكليات والأقسام، وإدارة المنصة التعليمية الرقمية التي توفر المقررات التفاعلية والأنشطة التعليمية عن بُعد.',
                    'The Center oversees the integration of e-learning and blended-learning technologies across all faculties and departments, and manages the digital learning platform that delivers interactive courses and remote learning activities.'
                ));
                ?>
            </p>
            <p>
                <?php
                echo esc_html(sirte_elc_t(
                    'كما يقدم الدعم الفني والتدريب المتخصص لأعضاء هيئة التدريس والطلاب لضمان استخدام فعال للتقنيات التعليمية وتحقيق تجربة تعليمية مرنة وعالية الجودة وفق المعايير الأكاديمية الحديثة.',
                    'It also provides technical support and specialized training for faculty members and students, ensuring effective use of educational technologies and a flexible, high-quality learning experience aligned with modern academic standards.'
                ));
                ?>
            </p>
        </div>
        <div class="stats-grid" aria-label="<?php echo esc_attr(sirte_elc_t('مجالات عمل المركز', 'Areas of work')); ?>">
            <article class="stat-card">
                <?php echo sirte_elc_icon('spark'); ?>
                <strong><?php echo esc_html(sirte_elc_t('تحول رقمي', 'Digital transformation')); ?></strong>
                <span><?php echo esc_html(sirte_elc_t('للعملية التعليمية', 'of the learning process')); ?></span>
            </article>
            <article class="stat-card">
                <?php echo sirte_elc_icon('book'); ?>
                <strong><?php echo esc_html(sirte_elc_t('تعلم مدمج', 'Blended learning')); ?></strong>
                <span><?php echo esc_html(sirte_elc_t('ومقررات تفاعلية', 'and interactive courses')); ?></span>
            </article>
            <article class="stat-card">
                <?php echo sirte_elc_icon('users'); ?>
                <strong><?php echo esc_html(sirte_elc_t('دعم وتدريب', 'Support & training')); ?></strong>
                <span><?php echo esc_html(sirte_elc_t('للطلبة وأعضاء هيئة التدريس', 'for students and faculty members')); ?></span>
            </article>
        </div>
    </div>
</section>
