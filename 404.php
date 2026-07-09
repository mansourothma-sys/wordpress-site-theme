<?php
/**
 * 404 template.
 *
 * @package Sirte_ELC
 */

get_header();
?>
<main id="primary" class="site-main">
    <section class="section error-404">
        <div class="container error-404-inner">
            <span class="kicker">خطأ 404</span>
            <h1>هذه الصفحة غير موجودة</h1>
            <p>الرابط الذي حاولت الوصول إليه غير متاح أو تم نقله. جرّب العودة إلى الصفحة الرئيسية أو استخدم الروابط أدناه.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo sirte_elc_icon('arrow'); ?>
                    <span>العودة إلى الرئيسية</span>
                </a>
                <a class="button button-outline" href="<?php echo esc_url(sirte_elc_page_url('contact')); ?>">
                    <?php echo sirte_elc_icon('message'); ?>
                    <span>تواصل مع الدعم الفني</span>
                </a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
