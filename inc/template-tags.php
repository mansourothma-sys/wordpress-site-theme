<?php
/**
 * Small reusable render helpers.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

function sirte_elc_icon(string $name): string
{
    $icons = [
        'arrow' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 12H5m0 0 6 6m-6-6 6-6"/></svg>',
        'book' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"/></svg>',
        'calendar' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 2v4m8-4v4M3 10h18M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/></svg>',
        'graduation' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m22 10-10-5-10 5 10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/><path d="M22 10v6"/></svg>',
        'mail' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/><path d="m22 6-10 7L2 6"/></svg>',
        'message' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/></svg>',
        'network' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14m-7-7h14"/><circle cx="12" cy="5" r="3"/><circle cx="5" cy="12" r="3"/><circle cx="19" cy="12" r="3"/><circle cx="12" cy="19" r="3"/></svg>',
        'shield' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-5"/></svg>',
        'spark' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2 3 14h8l-1 8 11-14h-8z"/></svg>',
        'target' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/></svg>',
        'users' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
    ];

    return $icons[$name] ?? $icons['spark'];
}

function sirte_elc_section_heading(string $kicker, string $title, string $description = ''): void
{
    ?>
    <div class="section-heading">
        <span class="kicker"><?php echo esc_html($kicker); ?></span>
        <h2><?php echo esc_html($title); ?></h2>
        <?php if ($description) : ?>
            <p><?php echo esc_html($description); ?></p>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Inner-page hero with breadcrumb, used by every page-*.php template.
 */
function sirte_elc_page_header(string $kicker, string $title, string $description = ''): void
{
    ?>
    <section class="page-hero">
        <div class="container">
            <nav class="breadcrumb" aria-label="<?php echo esc_attr(sirte_elc_t('مسار التصفح', 'Breadcrumb')); ?>">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(sirte_elc_t('الرئيسية', 'Home')); ?></a>
                <span aria-hidden="true">/</span>
                <span aria-current="page"><?php echo esc_html($title); ?></span>
            </nav>
            <span class="kicker page-hero-kicker"><?php echo esc_html($kicker); ?></span>
            <h1><?php echo esc_html($title); ?></h1>
            <?php if ($description) : ?>
                <p class="page-hero-lead"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <?php
}

/**
 * A single stat card driven by a real, countable number (never a guessed
 * marketing figure) — e.g. count(sirte_elc_faculties()).
 */
function sirte_elc_counter_card(string $icon, int $number, string $suffix, string $label): void
{
    ?>
    <article class="counter-card">
        <span class="counter-icon"><?php echo sirte_elc_icon($icon); ?></span>
        <strong class="counter-number" data-count-to="<?php echo (int) $number; ?>">0<?php echo esc_html($suffix); ?></strong>
        <span><?php echo esc_html($label); ?></span>
    </article>
    <?php
}

