<?php
/**
 * Template Name: صفحة الحوكمة والوثائق
 * Template Post Type: page
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'حوكمة وتطوير مستمر',
    'الحوكمة والوثائق',
    'وثائق تنظيمية واستراتيجية توضح آليات العمل والمسؤوليات ومسار التطوير المؤسسي بمركز التعليم الإلكتروني.'
);
$documents = sirte_elc_documents();
?>
<main id="primary" class="site-main">
    <section class="section" id="documents">
        <div class="container">
            <?php
            sirte_elc_section_heading(
                'الوثائق الرسمية',
                'نظام الحوكمة والإدارة الاستراتيجية بالمركز',
                'يمكن الاطلاع على كل وثيقة أو تحميلها مباشرة.'
            );
            ?>
            <div class="document-grid">
                <?php foreach ($documents as $document) : ?>
                    <article class="document-card">
                        <div class="document-icon"><?php echo sirte_elc_icon($document['icon']); ?></div>
                        <h3><?php echo esc_html($document['title']); ?></h3>
                        <p><?php echo esc_html($document['description']); ?></p>
                        <a href="<?php echo esc_url($document['url']); ?>">
                            عرض الوثيقة
                            <?php echo sirte_elc_icon('arrow'); ?>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/org-units'); ?>

    <?php if (get_the_content()) : ?>
    <section class="section section-soft">
        <div class="container page-body">
            <?php the_content(); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php
    get_template_part('template-parts/sections/cta-band', null, [
        'title' => 'لديك استفسار حول لائحة أو سياسة معينة؟',
        'description' => 'تواصل مع فريق المركز وسنساعدك في العثور على الإجابة المناسبة.',
        'button_label' => 'اتصل بنا',
        'button_url' => sirte_elc_page_url('contact'),
    ]);
    ?>
</main>
<?php
get_footer();
