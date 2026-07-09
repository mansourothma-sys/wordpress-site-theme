<?php
/**
 * SEO: meta description, Open Graph, Twitter cards, hreflang, canonical
 * and Schema.org structured data (JSON-LD).
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

function sirte_elc_current_url(): string
{
    $request = isset($_SERVER['REQUEST_URI'])
        ? sanitize_text_field(wp_unslash($_SERVER['REQUEST_URI']))
        : '/';

    return home_url($request);
}

function sirte_elc_meta_description(): string
{
    return sirte_elc_t(
        'البوابة الرسمية لمركز التعليم الإلكتروني بجامعة سرت: الدخول إلى المنصة التعليمية، المقررات الإلكترونية، الدعم الفني، والحوكمة.',
        'The official portal of the E-Learning Center at Sirte University: learning platform access, online courses, technical support, and governance.'
    );
}

function sirte_elc_meta_title(): string
{
    return sirte_elc_t(
        'مركز التعليم الإلكتروني - جامعة سرت',
        'E-Learning Center - Sirte University'
    );
}

function sirte_elc_head_meta(): void
{
    $url = sirte_elc_current_url();
    $canonical = remove_query_arg('lang', $url);
    ?>
    <meta name="description" content="<?php echo esc_attr(sirte_elc_meta_description()); ?>">
    <meta name="theme-color" content="#123b5d">
    <meta property="og:site_name" content="<?php echo esc_attr(sirte_elc_meta_title()); ?>">
    <meta property="og:title" content="<?php echo esc_attr(sirte_elc_meta_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr(sirte_elc_meta_description()); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:locale" content="<?php echo esc_attr(sirte_elc_lang() === 'en' ? 'en_US' : 'ar_LY'); ?>">
    <meta property="og:locale:alternate" content="<?php echo esc_attr(sirte_elc_lang() === 'en' ? 'ar_LY' : 'en_US'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr(sirte_elc_meta_title()); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(sirte_elc_meta_description()); ?>">
    <link rel="canonical" href="<?php echo esc_url($canonical); ?>">
    <link rel="alternate" hreflang="ar" href="<?php echo esc_url(add_query_arg('lang', 'ar', $canonical)); ?>">
    <link rel="alternate" hreflang="en" href="<?php echo esc_url(add_query_arg('lang', 'en', $canonical)); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($canonical); ?>">
    <?php
}
add_action('wp_head', 'sirte_elc_head_meta', 1);

function sirte_elc_schema_org(): void
{
    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'EducationalOrganization',
                '@id' => home_url('/#organization'),
                'name' => sirte_elc_meta_title(),
                'description' => sirte_elc_meta_description(),
                'url' => home_url('/'),
                'email' => 'elcsupport@su.edu.ly',
                'foundingDate' => '2022',
                'parentOrganization' => [
                    '@type' => 'CollegeOrUniversity',
                    'name' => sirte_elc_t('جامعة سرت', 'Sirte University'),
                    'url' => 'https://su.edu.ly/',
                ],
                'sameAs' => [
                    'https://e-learning.su.edu.ly/',
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => home_url('/#website'),
                'name' => sirte_elc_meta_title(),
                'url' => home_url('/'),
                'inLanguage' => ['ar', 'en'],
                'publisher' => ['@id' => home_url('/#organization')],
            ],
        ],
    ];

    printf(
        '<script type="application/ld+json">%s</script>' . "\n",
        wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    );
}
add_action('wp_head', 'sirte_elc_schema_org', 2);
