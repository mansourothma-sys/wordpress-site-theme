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
                <?php $sirte_elc_has_faculty_url = ! empty($faculty['url']); ?>
                <<?php echo $sirte_elc_has_faculty_url ? 'a' : 'article'; ?>
                    class="faculty-card<?php echo $sirte_elc_has_faculty_url ? '' : ' faculty-card-pending'; ?>"
                    <?php if ($sirte_elc_has_faculty_url) : ?>href="<?php echo esc_url($faculty['url']); ?>"<?php endif; ?>
                    data-name="<?php echo esc_attr($faculty['name']); ?>"
                >
                    <span class="faculty-logo">
                        <img src="<?php echo esc_url($faculty['logo']); ?>" alt="<?php echo esc_attr('شعار ' . $faculty['name']); ?>" loading="lazy">
                    </span>
                    <span class="faculty-name"><?php echo esc_html($faculty['name']); ?></span>
                    <span class="faculty-link">
                        <?php if ($sirte_elc_has_faculty_url) : ?>
                            دخول المقررات
                            <?php echo sirte_elc_icon('arrow'); ?>
                        <?php else : ?>
                            الرابط قيد التحقق
                        <?php endif; ?>
                    </span>
                </<?php echo $sirte_elc_has_faculty_url ? 'a' : 'article'; ?>>
            <?php endforeach; ?>
        </div>

        <div class="section-more">
            <a class="button button-outline" href="<?php echo esc_url(sirte_elc_page_url('academics')); ?>">
                عرض جميع الكليات والمقررات
                <?php echo sirte_elc_icon('arrow'); ?>
            </a>
        </div>
    </div>
</section>

