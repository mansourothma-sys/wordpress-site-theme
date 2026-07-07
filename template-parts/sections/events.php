<?php
/**
 * Events section.
 *
 * @package Sirte_ELC
 */

if (! defined('ABSPATH')) {
    exit;
}
?>
<section class="section events-section" id="events">
    <div class="container events-grid">
        <div>
            <?php
            sirte_elc_section_heading(
                'الفعاليات والأنشطة العلمية',
                'ورش العمل والدورات واللقاءات العلمية',
                'مساحة موحدة للإعلانات العلمية، الورش التدريبية، اللقاءات الافتراضية، والأنشطة التي يديرها مركز التعليم الإلكتروني وكليات الجامعة.'
            );
            ?>
        </div>
        <a class="event-card" href="https://e-learning.su.edu.ly/course/index.php?categoryid=655">
            <span class="event-icon"><?php echo sirte_elc_icon('calendar'); ?></span>
            <strong>الدخول إلى الفعاليات والأنشطة</strong>
            <span>عرض التفاصيل واللقاءات المتاحة</span>
            <em>
                فتح البوابة
                <?php echo sirte_elc_icon('arrow'); ?>
            </em>
        </a>
    </div>
</section>

