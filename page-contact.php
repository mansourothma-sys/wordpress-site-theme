<?php
/**
 * Template Name: صفحة اتصل بنا
 * Template Post Type: page
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'نحن هنا لمساعدتك',
    'اتصل بنا',
    'راسلنا مباشرة، أو تواصل عبر واتساب والبريد الإلكتروني، وسيقوم فريق الدعم الفني بالرد في أقرب وقت ممكن.'
);

$status = isset($_GET['sirte_elc_contact']) ? sanitize_key(wp_unslash($_GET['sirte_elc_contact'])) : '';
?>
<main id="primary" class="site-main">
    <section class="section" id="contact">
        <div class="container contact-grid">
            <div class="contact-form-wrap">
                <?php if ('success' === $status) : ?>
                    <div class="form-notice form-notice-success" role="status">
                        تم إرسال رسالتك بنجاح، شكرًا لتواصلك معنا وسنعاود الرد عليك قريبًا.
                    </div>
                <?php elseif ('error' === $status) : ?>
                    <div class="form-notice form-notice-error" role="alert">
                        تعذّر إرسال الرسالة، يرجى التأكد من تعبئة جميع الحقول المطلوبة والمحاولة مرة أخرى.
                    </div>
                <?php endif; ?>

                <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="sirte_elc_contact">
                    <?php wp_nonce_field('sirte_elc_contact', 'sirte_elc_contact_nonce'); ?>
                    <div class="form-honeypot" aria-hidden="true">
                        <label>اتركه فارغًا<input type="text" name="sirte_elc_website" tabindex="-1" autocomplete="off"></label>
                    </div>

                    <div class="form-row">
                        <label for="contact-name">الاسم الكامل</label>
                        <input id="contact-name" type="text" name="name" required>
                    </div>
                    <div class="form-row">
                        <label for="contact-email">البريد الإلكتروني</label>
                        <input id="contact-email" type="email" name="email" required>
                    </div>
                    <div class="form-row">
                        <label for="contact-subject">الموضوع</label>
                        <input id="contact-subject" type="text" name="subject" required>
                    </div>
                    <div class="form-row">
                        <label for="contact-message">الرسالة</label>
                        <textarea id="contact-message" name="message" rows="5" required></textarea>
                    </div>

                    <button class="button button-primary" type="submit">
                        <?php echo sirte_elc_icon('mail'); ?>
                        <span>إرسال الرسالة</span>
                    </button>
                </form>
            </div>

            <aside class="contact-info">
                <?php sirte_elc_section_heading('طرق التواصل', 'الدعم الفني'); ?>
                <div class="support-grid contact-support-grid">
                    <a class="support-card whatsapp" href="https://wa.me/218922114086">
                        <span class="support-icon"><?php echo sirte_elc_icon('message'); ?></span>
                        <strong>تواصل عبر واتساب</strong>
                        <span>دعم سريع لمشكلات الدخول واستخدام المقررات</span>
                    </a>
                    <a class="support-card email" href="mailto:elcsupport@su.edu.ly">
                        <span class="support-icon"><?php echo sirte_elc_icon('mail'); ?></span>
                        <strong>البريد الإلكتروني</strong>
                        <span>elcsupport@su.edu.ly</span>
                    </a>
                    <a class="support-card" href="<?php echo esc_url(sirte_elc_platform_url()); ?>">
                        <span class="support-icon"><?php echo sirte_elc_icon('graduation'); ?></span>
                        <strong>منصة التعليم الإلكتروني</strong>
                        <span>e-learning.su.edu.ly</span>
                    </a>
                </div>
            </aside>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/faq'); ?>
</main>
<?php
get_footer();
