<?php
/**
 * Faculties course portal section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}

$faculties = sirte_elc_faculties();
?>
<section class="section" id="faculties">
    <div class="container">
        <div class="section-topline">
            <?php
            sirte_elc_section_heading(
                'بوابة المقررات الرقمية',
                'الدخول إلى المقررات الدراسية',
                'اختر الكلية للوصول إلى المقررات والبرامج التعليمية المتاحة عبر منصة التعليم الإلكتروني.'
            );
            ?>
            <label class="faculty-search">
                <span class="screen-reader-text">البحث في الكليات</span>
                <input type="search" id="faculty-search" placeholder="ابحث عن كلية..." autocomplete="off">
            </label>
        </div>

        <div class="faculty-grid" id="faculty-grid">
            <?php foreach ($faculties as $faculty) : ?>
                <a class="faculty-card" href="<?php echo esc_url($faculty['url']); ?>" data-name="<?php echo esc_attr($faculty['name']); ?>">
                    <span class="faculty-logo">
                        <img src="<?php echo esc_url($faculty['logo']); ?>" alt="<?php echo esc_attr('شعار ' . $faculty['name']); ?>" loading="lazy">
                    </span>
                    <span class="faculty-name"><?php echo esc_html($faculty['name']); ?></span>
                    <span class="faculty-link">
                        دخول المقررات
                        <?php echo sirte_elc_icon('arrow'); ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

