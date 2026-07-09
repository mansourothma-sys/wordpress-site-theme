<?php
/**
 * Governance documents section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$documents = sirte_elc_documents();
?>
<section class="section section-soft" id="governance">
    <div class="container">
        <?php
        sirte_elc_section_heading(
            'حوكمة وتطوير مستمر',
            'نظام الحوكمة والإدارة الاستراتيجية بالمركز',
            'وثائق تنظيمية واستراتيجية توضح آليات العمل والمسؤوليات ومسار التطوير المؤسسي.'
        );
        ?>
        <div class="document-grid">
            <?php foreach ($documents as $document) : ?>
                <article class="document-card">
                    <div class="document-icon"><?php echo sirte_elc_icon($document['icon']); ?></div>
                    <h3><?php echo esc_html($document['title']); ?></h3>
                    <p><?php echo esc_html($document['description']); ?></p>
                    <a href="<?php echo esc_url($document['url']); ?>">
                        عرض الوثيقة
                        <?php echo sirte_elc_icon('arrow'); ?>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="section-more">
            <a class="button button-outline" href="<?php echo esc_url(sirte_elc_page_url('governance')); ?>">
                عرض صفحة الحوكمة الكاملة
                <?php echo sirte_elc_icon('arrow'); ?>
            </a>
        </div>
    </div>
</section>

