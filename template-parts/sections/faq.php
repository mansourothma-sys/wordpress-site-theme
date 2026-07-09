<?php
/**
 * FAQ accordion section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$faqs = sirte_elc_faq();
?>
<section class="section section-soft" id="faq">
    <div class="container">
        <?php
        sirte_elc_section_heading(
            'أسئلة متكررة',
            'إجابات سريعة قبل التواصل معنا',
            'إن لم تجد إجابتك هنا، يسعد فريق الدعم الفني بمساعدتك عبر واتساب أو البريد الإلكتروني.'
        );
        ?>
        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false" aria-controls="faq-answer-<?php echo (int) $index; ?>">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <?php echo sirte_elc_icon('arrow'); ?>
                    </button>
                    <div class="faq-answer" id="faq-answer-<?php echo (int) $index; ?>">
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
