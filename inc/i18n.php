<?php
/**
 * Lightweight bilingual (Arabic / English) layer.
 *
 * Language is selected with the "?lang=ar|en" query parameter and then
 * persisted in a cookie, so all subsequent internal links keep the choice.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

const SIRTE_ELC_LANG_COOKIE = 'sirte_elc_lang';

function sirte_elc_supported_langs(): array
{
    return ['ar', 'en'];
}

function sirte_elc_lang(): string
{
    static $lang = null;

    if ($lang !== null) {
        return $lang;
    }

    $requested = isset($_GET['lang']) ? sanitize_key(wp_unslash($_GET['lang'])) : '';

    if (! in_array($requested, sirte_elc_supported_langs(), true)) {
        $requested = isset($_COOKIE[SIRTE_ELC_LANG_COOKIE])
            ? sanitize_key(wp_unslash($_COOKIE[SIRTE_ELC_LANG_COOKIE]))
            : '';
    }

    $lang = in_array($requested, sirte_elc_supported_langs(), true) ? $requested : 'ar';

    return $lang;
}

function sirte_elc_persist_lang(): void
{
    if (! isset($_GET['lang'])) {
        return;
    }

    $requested = sanitize_key(wp_unslash($_GET['lang']));

    if (in_array($requested, sirte_elc_supported_langs(), true) && ! headers_sent()) {
        setcookie(
            SIRTE_ELC_LANG_COOKIE,
            $requested,
            time() + YEAR_IN_SECONDS,
            defined('COOKIEPATH') && COOKIEPATH ? COOKIEPATH : '/',
            defined('COOKIE_DOMAIN') ? COOKIE_DOMAIN : '',
            is_ssl(),
            false
        );
    }
}
add_action('init', 'sirte_elc_persist_lang');

function sirte_elc_is_rtl(): bool
{
    return sirte_elc_lang() === 'ar';
}

function sirte_elc_dir(): string
{
    return sirte_elc_is_rtl() ? 'rtl' : 'ltr';
}

/**
 * Return the Arabic or English string for the active language.
 */
function sirte_elc_t(string $ar, string $en): string
{
    return sirte_elc_lang() === 'en' ? $en : $ar;
}

/**
 * Current URL with the "lang" query parameter set. Escape on output.
 */
function sirte_elc_lang_url(string $lang): string
{
    return add_query_arg('lang', in_array($lang, sirte_elc_supported_langs(), true) ? $lang : 'ar');
}

function sirte_elc_language_attributes(): string
{
    return sprintf('lang="%s" dir="%s"', esc_attr(sirte_elc_lang()), esc_attr(sirte_elc_dir()));
}
add_filter('language_attributes', 'sirte_elc_language_attributes');

function sirte_elc_body_lang_class(array $classes): array
{
    $classes[] = 'lang-' . sirte_elc_lang();
    $classes[] = sirte_elc_is_rtl() ? 'dir-rtl' : 'dir-ltr';

    return $classes;
}
add_filter('body_class', 'sirte_elc_body_lang_class');

/**
 * Bilingual labels for the site-wide navigation, keyed by page slug.
 */
function sirte_elc_nav_items(): array
{
    return [
        'about' => sirte_elc_t('عن المركز', 'About the Center'),
        'academics' => sirte_elc_t('الكليات والمقررات', 'Faculties & Courses'),
        'governance' => sirte_elc_t('الحوكمة والوثائق', 'Governance & Documents'),
        'news' => sirte_elc_t('الأخبار والفعاليات', 'News & Events'),
        'guides' => sirte_elc_t('أدلة الاستخدام', 'User Guides'),
        'contact' => sirte_elc_t('اتصل بنا', 'Contact Us'),
    ];
}
