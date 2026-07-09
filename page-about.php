<?php
/**
 * Template Name: صفحة عن المركز
 * Template Post Type: page
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'من نحن',
    'عن المركز',
    'مؤسسة تقنية تابعة لجامعة سرت، مسؤولة عن قيادة التحول الرقمي في العملية التعليمية وإدارة منصة التعليم الإلكتروني الموحدة.'
);
?>
<main id="primary" class="site-main">
    <section class="section about-band" id="mission">
        <div class="container about-grid">
            <div class="about-copy">
                <?php sirte_elc_section_heading('عن المركز', 'نقود التحول الرقمي في التعليم الجامعي'); ?>
                <p>
                    يشرف المركز على دمج تقنيات التعلم الإلكتروني والتعلم المدمج في جميع الكليات والأقسام، وإدارة المنصة التعليمية الرقمية التي توفر المقررات التفاعلية والأنشطة التعليمية عن بُعد.
                </p>
                <p>
                    كما يقدم الدعم الفني والتدريب المتخصص لأعضاء هيئة التدريس والطلاب لضمان استخدام فعال للتقنيات التعليمية وتحقيق تجربة تعليمية مرنة وعالية الجودة وفق المعايير الأكاديمية الحديثة.
                </p>
                <?php if (get_the_content()) : ?>
                    <div class="about-extra-content"><?php the_content(); ?></div>
                <?php endif; ?>
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

    <?php get_template_part('template-parts/sections/counters'); ?>

    <section class="section section-soft" id="vision">
        <div class="container">
            <?php sirte_elc_section_heading('وجهتنا المؤسسية', 'الرؤية والرسالة'); ?>
            <div class="vision-grid">
                <article class="feature-panel">
                    <div class="panel-icon"><?php echo sirte_elc_icon('target'); ?></div>
                    <h3>الرؤية</h3>
                    <p>تحقيق تميز مؤسسي في التعليم الرقمي، يرتقي بجودة التعلم والبحث والابتكار، ويمتثل للمعايير الوطنية والدولية.</p>
                </article>
                <article class="feature-panel feature-panel-dark">
                    <div class="panel-icon"><?php echo sirte_elc_icon('spark'); ?></div>
                    <h3>الرسالة</h3>
                    <p>تطوير بيئة تعليم رقمي متكاملة تعزز جودة التعلم والبحث والابتكار، من خلال بناء القدرات، وتطوير المحتوى الإلكتروني، وتوظيف التكنولوجيا التعليمية وفق المعايير الوطنية والدولية.</p>
                </article>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/timeline'); ?>
    <?php get_template_part('template-parts/sections/org-units'); ?>
    <?php
    get_template_part('template-parts/sections/cta-band', null, [
        'title' => 'اطّلع على وثائق الحوكمة الكاملة',
        'description' => 'الهيكل التنظيمي، اللوائح، والخطة الإستراتيجية متاحة للاطلاع والتحميل.',
        'button_label' => 'الحوكمة والوثائق',
        'button_url' => sirte_elc_page_url('governance'),
    ]);
    ?>
</main>
<?php
get_footer();
