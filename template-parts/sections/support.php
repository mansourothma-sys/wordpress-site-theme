<?php
/**
 * Support section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="section support-section" id="support">
    <div class="container">
        <?php
        sirte_elc_section_heading(
            'خدمة ومساندة',
            'الدعم الفني',
            'فريق المركز جاهز لمساندة أعضاء هيئة التدريس والطلاب في استخدام المنصة والأدوات الرقمية.'
        );
        ?>
        <div class="support-grid">
            <a class="support-card whatsapp" href="https://wa.me/218922114086">
                <span class="support-icon"><?php echo sirte_elc_icon('message'); ?></span>
                <strong>تواصل عبر واتساب</strong>
                <span>دعم سريع لمشكلات الدخول واستخدام المقررات</span>
            </a>
            <a class="support-card email" href="mailto:elcsupport@su.edu.ly">
                <span class="support-icon"><?php echo sirte_elc_icon('mail'); ?></span>
                <strong>تواصل عبر البريد الإلكتروني</strong>
                <span>elcsupport@su.edu.ly</span>
            </a>
        </div>
    </div>
</section>

