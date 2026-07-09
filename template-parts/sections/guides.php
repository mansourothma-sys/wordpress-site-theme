<?php
/**
 * Usage guides grid, grouped by audience.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$guides = sirte_elc_guides();
?>
<section class="section" id="guides-list">
    <div class="container">
        <div class="guide-grid">
            <?php foreach ($guides as $guide) : ?>
                <article class="guide-card">
                    <div class="document-icon"><?php echo sirte_elc_icon($guide['icon']); ?></div>
                    <span class="guide-audience"><?php echo esc_html($guide['audience']); ?></span>
                    <h3><?php echo esc_html($guide['title']); ?></h3>
                    <p><?php echo esc_html($guide['description']); ?></p>
                    <a href="<?php echo esc_url($guide['url']); ?>">
                        فتح الدليل
                        <?php echo sirte_elc_icon('arrow'); ?>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
