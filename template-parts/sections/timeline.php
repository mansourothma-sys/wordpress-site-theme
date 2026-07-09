<?php
/**
 * Institutional history timeline (real, confirmed milestones only).
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$milestones = sirte_elc_history();
?>
<section class="section" id="history">
    <div class="container">
        <?php
        sirte_elc_section_heading(
            'المسيرة المؤسسية',
            'كيف بدأ المركز وكيف يعمل اليوم',
            'محطات رئيسية في تأسيس المركز وتطور دوره داخل جامعة سرت.'
        );
        ?>
        <ol class="timeline">
            <?php foreach ($milestones as $item) : ?>
                <li class="timeline-item">
                    <span class="timeline-year"><?php echo esc_html($item['year']); ?></span>
                    <div class="timeline-body">
                        <h3><?php echo esc_html($item['title']); ?></h3>
                        <p><?php echo esc_html($item['description']); ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
