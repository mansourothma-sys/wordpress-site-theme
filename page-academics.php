<?php
/**
 * Template Name: صفحة الكليات والمقررات
 * Template Post Type: page
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'بوابة المقررات الرقمية',
    'الكليات والمقررات',
    'اختر كليتك للوصول المباشر إلى المقررات والبرامج التعليمية المتاحة عبر منصة التعليم الإلكتروني بجامعة سرت.'
);
$faculties = sirte_elc_faculties();
?>
<main id="primary" class="site-main">
    <section class="section" id="faculties-directory">
        <div class="container">
            <div class="section-topline">
                <?php
                sirte_elc_section_heading(
                    'دليل الكليات',
                    'جميع الكليات المرتبطة بالمنصة',
                    'يضم الدليل ' . count($faculties) . ' كلية ومرحلة دراسية، مع رابط مباشر لتصنيف مقررات كل منها على Moodle.'
                );
                ?>
                <label class="faculty-search">
                    <span class="screen-reader-text">البحث في الكليات</span>
                    <input type="search" id="faculty-search" placeholder="ابحث عن كلية..." autocomplete="off">
                </label>
            </div>

            <div class="faculty-grid" id="faculty-grid">
                <?php foreach ($faculties as $faculty) : ?>
                    <a class="faculty-card" href="<?php echo esc_url($faculty['url']); ?>" data-name="<?php echo esc_attr($faculty['name']); ?>">
                        <span class="faculty-logo">
                            <img src="<?php echo esc_url($faculty['logo']); ?>" alt="<?php echo esc_attr('شعار ' . $faculty['name']); ?>" loading="lazy">
                        </span>
                        <span class="faculty-name"><?php echo esc_html($faculty['name']); ?></span>
                        <span class="faculty-link">
                            دخول المقررات
                            <?php echo sirte_elc_icon('arrow'); ?>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
            <p class="faculty-empty-state" id="faculty-empty-state" hidden>لا توجد كلية مطابقة لبحثك، جرّب اسمًا مختصرًا أو تحقق من الإملاء.</p>
        </div>
    </section>

    <?php
    get_template_part('template-parts/sections/cta-band', null, [
        'title' => 'تحتاج مساعدة في الوصول إلى مقرر معيّن؟',
        'description' => 'تواصل مع الدعم الفني وسنوجّهك إلى الكلية أو المقرر الصحيح على الفور.',
        'button_label' => 'تواصل مع الدعم الفني',
        'button_url' => sirte_elc_page_url('contact'),
    ]);
    ?>
</main>
<?php
get_footer();
