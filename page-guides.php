<?php
/**
 * Template Name: صفحة أدلة الاستخدام
 * Template Post Type: page
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'تعلم واستخدم بثقة',
    'أدلة الاستخدام',
    'أدلة مبسّطة وفيديوهات تعريفية لاستخدام منصة التعليم الإلكتروني، موجهة للطلاب وأعضاء هيئة التدريس على حد سواء.'
);
?>
<main id="primary" class="site-main">
    <?php get_template_part('template-parts/sections/guides'); ?>
    <?php get_template_part('template-parts/sections/faq'); ?>
    <?php
    get_template_part('template-parts/sections/cta-band', null, [
        'title' => 'لم تجد ما تبحث عنه في الأدلة؟',
        'description' => 'راسلنا مباشرة وسيتولى فريق الدعم الفني الرد على استفسارك.',
        'button_label' => 'تواصل مع الدعم الفني',
        'button_url' => sirte_elc_page_url('contact'),
    ]);
    ?>
</main>
<?php
get_footer();
