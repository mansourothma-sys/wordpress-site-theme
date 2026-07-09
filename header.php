<?php
/**
 * Site header.
 *
 * @package Sirte_ELC
 */

?><!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="البوابة الرسمية لمركز التعليم الإلكتروني بجامعة سرت، وخدمات المنصة التعليمية والدعم الفني والحوكمة.">
    <title><?php echo esc_html((is_front_page() || is_home()) ? 'مركز التعليم الإلكتروني - جامعة سرت' : wp_get_document_title()); ?></title>
    <meta property="og:title" content="مركز التعليم الإلكتروني - جامعة سرت">
    <meta property="og:description" content="بوابة مركز التعليم الإلكتروني بجامعة سرت للدخول إلى المنصة والمقررات والخدمات الداعمة.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e('تجاوز إلى المحتوى', 'sirte-elc'); ?></a>
<header class="site-header" id="masthead">
    <div class="container header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('الصفحة الرئيسية', 'sirte-elc'); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="brand-mark" aria-hidden="true">س</span>
            <?php endif; ?>
            <span class="brand-text">
                <strong>مركز التعليم الإلكتروني</strong>
                <small>جامعة سرت</small>
            </span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
            <span></span><span></span><span></span>
            <span class="screen-reader-text"><?php esc_html_e('القائمة', 'sirte-elc'); ?></span>
        </button>

        <nav class="primary-nav" aria-label="<?php esc_attr_e('القائمة الرئيسية', 'sirte-elc'); ?>">
            <?php if (has_nav_menu('primary')) : ?>
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'menu',
                    'menu_id' => 'primary-menu',
                ]);
                ?>
            <?php else : ?>
                <?php sirte_elc_default_menu(); ?>
            <?php endif; ?>
        </nav>

        <a class="header-cta" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
            <?php echo sirte_elc_icon('graduation'); ?>
            <span>الدخول إلى المنصة</span>
        </a>
    </div>
</header>
<?php
function sirte_elc_default_menu(): void
{
    $is_front = is_front_page();

    $items = [
        ['href' => $is_front ? '#about' : sirte_elc_page_url('about'), 'label' => 'عن المركز'],
        ['href' => sirte_elc_page_url('academics'), 'label' => 'الكليات والمقررات'],
        ['href' => sirte_elc_page_url('governance'), 'label' => 'الحوكمة والوثائق'],
        ['href' => sirte_elc_page_url('news'), 'label' => 'الأخبار والفعاليات'],
        ['href' => sirte_elc_page_url('guides'), 'label' => 'أدلة الاستخدام'],
        ['href' => sirte_elc_page_url('contact'), 'label' => 'اتصل بنا'],
    ];

    echo '<ul id="primary-menu" class="menu">';
    foreach ($items as $item) {
        printf('<li><a href="%s">%s</a></li>', esc_url($item['href']), esc_html($item['label']));
    }
    echo '</ul>';
}
