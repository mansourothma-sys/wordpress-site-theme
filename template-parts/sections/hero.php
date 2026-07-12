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
    <div class="container hero-layout">
        <div class="hero-content">
            <span class="kicker hero-kicker"><?php echo esc_html(sirte_elc_t('البوابة الرسمية لجامعة سرت', 'The official Sirte University portal')); ?></span>
            <h1><?php echo esc_html(sirte_elc_t('تعليم رقمي أقرب، أذكى، وأكثر أثرًا', 'Digital learning that is closer, smarter, and more impactful')); ?></h1>
            <p class="hero-lead">
                <?php
                echo esc_html(sirte_elc_t(
                    'منصة موحدة للمقررات الإلكترونية، وأدلة الاستخدام، والوثائق التنظيمية، والدعم الفني للطلاب وأعضاء هيئة التدريس.',
                    'One gateway for online courses, user guides, governance documents, and technical support for students and faculty.'
                ));
                ?>
            </p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
                    <?php echo sirte_elc_icon('graduation'); ?>
                    <span><?php echo esc_html(sirte_elc_t('الدخول إلى المنصة', 'Enter the platform')); ?></span>
                </a>
                <a class="button button-light" href="<?php echo esc_url(sirte_elc_page_url('guides')); ?>">
                    <?php echo sirte_elc_icon('book'); ?>
                    <span><?php echo esc_html(sirte_elc_t('أدلة الاستخدام', 'User guides')); ?></span>
                </a>
            </div>
            <div class="hero-trust" aria-label="<?php echo esc_attr(sirte_elc_t('مزايا البوابة', 'Portal highlights')); ?>">
                <span><?php echo sirte_elc_icon('shield'); ?><?php echo esc_html(sirte_elc_t('بوابة رسمية', 'Official portal')); ?></span>
                <span><?php echo sirte_elc_icon('users'); ?><?php echo esc_html(sirte_elc_t('للطلاب وأعضاء هيئة التدريس', 'For students and faculty')); ?></span>
            </div>
        </div>

        <aside class="hero-panel" aria-label="<?php echo esc_attr(sirte_elc_t('وصول سريع', 'Quick access')); ?>">
            <div class="hero-panel-heading">
                <span class="hero-panel-icon"><?php echo sirte_elc_icon('spark'); ?></span>
                <div>
                    <strong><?php echo esc_html(sirte_elc_t('وصول سريع', 'Quick access')); ?></strong>
                    <small><?php echo esc_html(sirte_elc_t('ابدأ من وجهتك مباشرة', 'Go straight to your destination')); ?></small>
                </div>
            </div>
            <div class="hero-quick-links">
                <a href="<?php echo esc_url(sirte_elc_page_url('academics')); ?>">
                    <span><?php echo sirte_elc_icon('graduation'); ?></span>
                    <strong><?php echo esc_html(sirte_elc_t('الكليات والمقررات', 'Faculties & courses')); ?></strong>
                    <?php echo sirte_elc_icon('arrow'); ?>
                </a>
                <a href="<?php echo esc_url(sirte_elc_page_url('governance')); ?>">
                    <span><?php echo sirte_elc_icon('shield'); ?></span>
                    <strong><?php echo esc_html(sirte_elc_t('الوثائق والحوكمة', 'Documents & governance')); ?></strong>
                    <?php echo sirte_elc_icon('arrow'); ?>
                </a>
                <a href="#support">
                    <span><?php echo sirte_elc_icon('message'); ?></span>
                    <strong><?php echo esc_html(sirte_elc_t('الدعم الفني', 'Technical support')); ?></strong>
                    <?php echo sirte_elc_icon('arrow'); ?>
                </a>
            </div>
        </aside>
    </div>
</section>

<div class="service-ribbon" aria-label="<?php echo esc_attr(sirte_elc_t('خدمات المركز', 'Center services')); ?>">
    <div class="container service-ribbon-grid">
        <div><span><?php echo sirte_elc_icon('book'); ?></span><strong><?php echo esc_html(sirte_elc_t('مقررات إلكترونية', 'Online courses')); ?></strong></div>
        <div><span><?php echo sirte_elc_icon('users'); ?></span><strong><?php echo esc_html(sirte_elc_t('تدريب وتطوير', 'Training & development')); ?></strong></div>
        <div><span><?php echo sirte_elc_icon('message'); ?></span><strong><?php echo esc_html(sirte_elc_t('دعم فني', 'Technical support')); ?></strong></div>
        <div><span><?php echo sirte_elc_icon('shield'); ?></span><strong><?php echo esc_html(sirte_elc_t('حوكمة رقمية', 'Digital governance')); ?></strong></div>
    </div>
</div>

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
