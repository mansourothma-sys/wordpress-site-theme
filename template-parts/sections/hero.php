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
        <span class="kicker hero-kicker">البوابة الرسمية</span>
        <h1>مركز التعليم الإلكتروني بجامعة سرت</h1>
        <p class="hero-lead">
            مؤسسة تقنية متخصصة أنشئت بموجب قرار وزير التعليم العالي والبحث العلمي رقم (1620) لسنة 2022م، وتهدف إلى قيادة التحول الرقمي في العملية التعليمية داخل الجامعة.
        </p>
        <div class="hero-actions">
            <a class="button button-primary" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
                <?php echo sirte_elc_icon('graduation'); ?>
                <span>ادخل إلى منصتك التعليمية</span>
            </a>
            <a class="button button-light" href="#support">
                <?php echo sirte_elc_icon('message'); ?>
                <span>الدعم الفني</span>
            </a>
        </div>
    </div>
</section>

<section class="section about-band">
    <div class="container about-grid">
        <div class="about-copy">
            <?php sirte_elc_section_heading('عن المركز', 'نقود التحول الرقمي في التعليم الجامعي'); ?>
            <p>
                يشرف المركز على دمج تقنيات التعلم الإلكتروني والتعلم المدمج في جميع الكليات والأقسام، وإدارة المنصة التعليمية الرقمية التي توفر المقررات التفاعلية والأنشطة التعليمية عن بُعد.
            </p>
            <p>
                كما يقدم الدعم الفني والتدريب المتخصص لأعضاء هيئة التدريس والطلاب لضمان استخدام فعال للتقنيات التعليمية وتحقيق تجربة تعليمية مرنة وعالية الجودة وفق المعايير الأكاديمية الحديثة.
            </p>
        </div>
        <div class="stats-grid" aria-label="مجالات عمل المركز">
            <article class="stat-card">
                <?php echo sirte_elc_icon('spark'); ?>
                <strong>تحول رقمي</strong>
                <span>للعملية التعليمية</span>
            </article>
            <article class="stat-card">
                <?php echo sirte_elc_icon('book'); ?>
                <strong>تعلم مدمج</strong>
                <span>ومقررات تفاعلية</span>
            </article>
            <article class="stat-card">
                <?php echo sirte_elc_icon('users'); ?>
                <strong>دعم وتدريب</strong>
                <span>للطلبة وأعضاء هيئة التدريس</span>
            </article>
        </div>
    </div>
</section>

