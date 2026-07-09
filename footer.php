<?php
/**
 * Site footer.
 *
 * @package Sirte_ELC
 */

?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <a class="brand footer-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <span class="brand-mark" aria-hidden="true">س</span>
                <span class="brand-text">
                    <strong>مركز التعليم الإلكتروني</strong>
                    <small>جامعة سرت</small>
                </span>
            </a>
            <p>بوابة رسمية لخدمات التعليم الإلكتروني، والدخول إلى المنصة، والوثائق التنظيمية، والدعم الفني.</p>
        </div>
        <div>
            <h2>روابط سريعة</h2>
            <ul>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('about')); ?>">عن المركز</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('academics')); ?>">الكليات والمقررات</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('governance')); ?>">الحوكمة والوثائق</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('news')); ?>">الأخبار والفعاليات</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('guides')); ?>">أدلة الاستخدام</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_page_url('contact')); ?>">اتصل بنا</a></li>
            </ul>
        </div>
        <div>
            <h2>تواصل</h2>
            <ul>
                <li><a href="mailto:elcsupport@su.edu.ly">elcsupport@su.edu.ly</a></li>
                <li><a href="https://wa.me/218922114086">WhatsApp: 218922114086</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_platform_url()); ?>">e-learning.su.edu.ly</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>© <?php echo esc_html(date_i18n('Y')); ?> مركز التعليم الإلكتروني - جامعة سرت. جميع الحقوق محفوظة.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
