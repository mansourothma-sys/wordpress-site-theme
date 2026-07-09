<?php
/**
 * Site header.
 *
 * @package Sirte_ELC
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>(function(){try{var t=localStorage.getItem('sirte-theme');if(t==='dark'||(!t&&window.matchMedia('(prefers-color-scheme: dark)').matches)){document.documentElement.setAttribute('data-theme','dark');}}catch(e){}})();</script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php echo esc_html(sirte_elc_t('تجاوز إلى المحتوى', 'Skip to content')); ?></a>
<header class="site-header" id="masthead">
    <div class="container header-inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php echo esc_attr(sirte_elc_t('الصفحة الرئيسية', 'Homepage')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="brand-mark" aria-hidden="true">س</span>
            <?php endif; ?>
            <span class="brand-text">
                <strong><?php echo esc_html(sirte_elc_t('مركز التعليم الإلكتروني', 'E-Learning Center')); ?></strong>
                <small><?php echo esc_html(sirte_elc_t('جامعة سرت', 'Sirte University')); ?></small>
            </span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
            <span></span><span></span><span></span>
            <span class="screen-reader-text"><?php echo esc_html(sirte_elc_t('القائمة', 'Menu')); ?></span>
        </button>

        <nav class="primary-nav" aria-label="<?php echo esc_attr(sirte_elc_t('القائمة الرئيسية', 'Primary menu')); ?>">
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

        <div class="header-controls">
            <?php $sirte_elc_switch_to = sirte_elc_lang() === 'ar' ? 'en' : 'ar'; ?>
            <a
                class="lang-switch"
                href="<?php echo esc_url(sirte_elc_lang_url($sirte_elc_switch_to)); ?>"
                lang="<?php echo esc_attr($sirte_elc_switch_to); ?>"
                hreflang="<?php echo esc_attr($sirte_elc_switch_to); ?>"
                aria-label="<?php echo esc_attr(sirte_elc_t('التبديل إلى الإنجليزية', 'Switch to Arabic')); ?>"
            ><?php echo esc_html('en' === $sirte_elc_switch_to ? 'EN' : 'عربي'); ?></a>

            <button class="theme-toggle" type="button" aria-pressed="false" aria-label="<?php echo esc_attr(sirte_elc_t('تبديل الوضع الداكن', 'Toggle dark mode')); ?>">
                <svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z"/></svg>
                <svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M4.9 4.9l1.4 1.4m11.4 11.4 1.4 1.4M2 12h2m16 0h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
            </button>

            <a class="header-cta" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
                <?php echo sirte_elc_icon('graduation'); ?>
                <span><?php echo esc_html(sirte_elc_t('الدخول إلى المنصة', 'Enter the platform')); ?></span>
            </a>
        </div>
    </div>
</header>
<?php
function sirte_elc_default_menu(): void
{
    $is_front = is_front_page();
    $labels = sirte_elc_nav_items();

    echo '<ul id="primary-menu" class="menu">';
    foreach ($labels as $key => $label) {
        $href = ('about' === $key && $is_front) ? '#about' : sirte_elc_page_url($key);
        printf('<li><a href="%s">%s</a></li>', esc_url($href), esc_html($label));
    }
    echo '</ul>';
}
