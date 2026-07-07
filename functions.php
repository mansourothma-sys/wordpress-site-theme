<?php
/**
 * Theme setup and assets.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

define('SIRTE_ELC_VERSION', '1.0.0');

require_once get_template_directory() . '/inc/theme-data.php';
require_once get_template_directory() . '/inc/template-tags.php';

function sirte_elc_setup(): void
{
    load_theme_textdomain('sirte-elc', get_template_directory() . '/languages');

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

function sirte_elc_enqueue_assets(): void
{
    wp_enqueue_style(
        'sirte-elc-fonts',
        'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'sirte-elc-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['sirte-elc-fonts'],
        SIRTE_ELC_VERSION
    );

    wp_enqueue_script(
        'sirte-elc-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        SIRTE_ELC_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'sirte_elc_enqueue_assets');

function sirte_elc_document_title(array $title): array
{
    if (is_front_page() || is_home()) {
        $title['title'] = 'مركز التعليم الإلكتروني';
        $title['site'] = 'جامعة سرت';
    }

    return $title;
}
add_filter('document_title_parts', 'sirte_elc_document_title');

function sirte_elc_pre_document_title(string $title): string
{
    if (is_front_page() || is_home()) {
        return 'مركز التعليم الإلكتروني - جامعة سرت';
    }

    return $title;
}
add_filter('pre_get_document_title', 'sirte_elc_pre_document_title');

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
