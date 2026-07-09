<?php
/**
 * Organisational units section (role-based, no personal names).
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$units = sirte_elc_org_units();
$documents = sirte_elc_documents();
$org_doc = $documents[0] ?? null;
?>
<section class="section section-soft" id="org-units">
    <div class="container">
        <div class="section-topline">
            <?php
            sirte_elc_section_heading(
                'هيكلة العمل الداخلي',
                'الوحدات التنظيمية للمركز',
                'يوزَّع العمل داخل المركز على أربع وحدات رئيسية تعمل بالتكامل لخدمة الطلاب وأعضاء هيئة التدريس.'
            );
            ?>
            <?php if ($org_doc) : ?>
                <a class="button button-outline" href="<?php echo esc_url($org_doc['url']); ?>">
                    عرض الهيكل التنظيمي الكامل
                    <?php echo sirte_elc_icon('arrow'); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="org-grid">
            <?php foreach ($units as $unit) : ?>
                <article class="org-card">
                    <div class="panel-icon"><?php echo sirte_elc_icon($unit['icon']); ?></div>
                    <h3><?php echo esc_html($unit['title']); ?></h3>
                    <p><?php echo esc_html($unit['description']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
