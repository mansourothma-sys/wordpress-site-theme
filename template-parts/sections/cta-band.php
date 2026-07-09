<?php
/**
 * Reusable closing call-to-action band.
 * Usage: get_template_part('template-parts/sections/cta-band', null, [
 *   'title' => '...', 'description' => '...', 'button_label' => '...', 'button_url' => '...',
 * ]);
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$title = $args['title'] ?? 'هل تحتاج مساعدة إضافية؟';
$description = $args['description'] ?? 'فريق الدعم الفني بمركز التعليم الإلكتروني جاهز للإجابة عن استفساراتك.';
$button_label = $args['button_label'] ?? 'الدخول إلى المنصة';
$button_url = $args['button_url'] ?? sirte_elc_platform_url();
?>
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2><?php echo esc_html($title); ?></h2>
            <p><?php echo esc_html($description); ?></p>
        </div>
        <a class="button button-light" href="<?php echo esc_url($button_url); ?>">
            <?php echo sirte_elc_icon('arrow'); ?>
            <span><?php echo esc_html($button_label); ?></span>
        </a>
    </div>
</section>
