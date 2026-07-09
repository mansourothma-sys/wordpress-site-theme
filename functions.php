<?php
/**
 * Theme setup and assets.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

define('SIRTE_ELC_VERSION', '3.0.0');

require_once get_template_directory() . '/inc/i18n.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/theme-data.php';
require_once get_template_directory() . '/inc/template-tags.php';

function sirte_elc_setup(): void
{
    load_theme_textdomain('sirte-elc', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height' => 80,
        'width' => 220,
        'flex-width' => true,
        'flex-height' => true,
    ]);

    register_nav_menus([
        'primary' => __('القائمة الرئيسية', 'sirte-elc'),
        'footer' => __('روابط التذييل', 'sirte-elc'),
    ]);
}
add_action('after_setup_theme', 'sirte_elc_setup');

/**
 * Preconnect to the fonts CDN so the first render is not blocked on DNS/TLS.
 */
function sirte_elc_resource_hints(array $urls, string $relation_type): array
{
    if ('preconnect' === $relation_type) {
        $urls[] = ['href' => 'https://fonts.googleapis.com'];
        $urls[] = [
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        ];
    }

    return $urls;
}
add_filter('wp_resource_hints', 'sirte_elc_resource_hints', 10, 2);

function sirte_elc_enqueue_assets(): void
{
    wp_enqueue_style(
        'sirte-elc-fonts',
        'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Tajawal:wght@400;500;700&family=Inter:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'sirte-elc-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['sirte-elc-fonts'],
        SIRTE_ELC_VERSION
    );

    wp_enqueue_style(
        'sirte-elc-visual-upgrade',
        get_template_directory_uri() . '/assets/css/visual-upgrade.css',
        ['sirte-elc-main'],
        SIRTE_ELC_VERSION
    );

    wp_enqueue_style(
        'sirte-elc-pages',
        get_template_directory_uri() . '/assets/css/pages.css',
        ['sirte-elc-visual-upgrade'],
        SIRTE_ELC_VERSION
    );

    wp_enqueue_style(
        'sirte-elc-modern',
        get_template_directory_uri() . '/assets/css/modern.css',
        ['sirte-elc-pages'],
        SIRTE_ELC_VERSION
    );

    $script_args = [
        'in_footer' => true,
        'strategy' => 'defer',
    ];

    wp_enqueue_script(
        'sirte-elc-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        SIRTE_ELC_VERSION,
        $script_args
    );

    wp_enqueue_script(
        'sirte-elc-scroll-reveal',
        get_template_directory_uri() . '/assets/js/scroll-reveal.js',
        [],
        SIRTE_ELC_VERSION,
        $script_args
    );

    wp_enqueue_script(
        'sirte-elc-interactions',
        get_template_directory_uri() . '/assets/js/interactions.js',
        [],
        SIRTE_ELC_VERSION,
        $script_args
    );

    wp_enqueue_script(
        'sirte-elc-theme-toggle',
        get_template_directory_uri() . '/assets/js/theme-toggle.js',
        [],
        SIRTE_ELC_VERSION,
        $script_args
    );
}
add_action('wp_enqueue_scripts', 'sirte_elc_enqueue_assets');

function sirte_elc_document_title(array $title): array
{
    if (is_front_page() || is_home()) {
        $title['title'] = sirte_elc_t('مركز التعليم الإلكتروني', 'E-Learning Center');
        $title['site'] = sirte_elc_t('جامعة سرت', 'Sirte University');
    }

    return $title;
}
add_filter('document_title_parts', 'sirte_elc_document_title');

function sirte_elc_pre_document_title(string $title): string
{
    if (is_front_page() || is_home()) {
        return sirte_elc_t('مركز التعليم الإلكتروني - جامعة سرت', 'E-Learning Center - Sirte University');
    }

    return $title;
}
add_filter('pre_get_document_title', 'sirte_elc_pre_document_title');

/**
 * Handle the "اتصل بنا" form: verifies nonce + honeypot, sends an email to
 * the support address, then redirects back with a status flag.
 */
function sirte_elc_handle_contact_form(): void
{
    $redirect = wp_get_referer() ? wp_get_referer() : home_url('/');

    $nonce_ok = isset($_POST['sirte_elc_contact_nonce'])
        && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['sirte_elc_contact_nonce'])), 'sirte_elc_contact');

    $honeypot_filled = ! empty($_POST['sirte_elc_website']);

    $name = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $subject = isset($_POST['subject']) ? sanitize_text_field(wp_unslash($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

    $is_valid = $nonce_ok && ! $honeypot_filled && $name && is_email($email) && $subject && $message;

    if ($is_valid) {
        $to = 'elcsupport@su.edu.ly';
        $mail_subject = sprintf('[نموذج اتصل بنا] %s', $subject);
        $body = sprintf(
            "الاسم: %s\nالبريد الإلكتروني: %s\n\nالرسالة:\n%s",
            $name,
            $email,
            $message
        );
        $headers = ['Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email];

        $sent = wp_mail($to, $mail_subject, $body, $headers);
        $redirect = add_query_arg('sirte_elc_contact', $sent ? 'success' : 'error', $redirect);
    } else {
        $redirect = add_query_arg('sirte_elc_contact', 'error', $redirect);
    }

    wp_safe_redirect($redirect);
    exit;
}
add_action('admin_post_sirte_elc_contact', 'sirte_elc_handle_contact_form');
add_action('admin_post_nopriv_sirte_elc_contact', 'sirte_elc_handle_contact_form');

function sirte_elc_trim_legacy_builder_assets(): void
{
    if (! is_front_page() && ! is_home()) {
        return;
    }

    $script_handles = [
        'elementor-frontend',
        'elementor-webpack-runtime',
        'elementor-frontend-modules',
        'elementor-waypoints',
        'hfe-frontend-js',
    ];

    foreach ($script_handles as $handle) {
        wp_dequeue_script($handle);
        wp_deregister_script($handle);
    }
}
add_action('wp_enqueue_scripts', 'sirte_elc_trim_legacy_builder_assets', 100);
