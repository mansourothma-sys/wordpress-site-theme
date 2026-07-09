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
                    <strong><?php echo esc_html(sirte_elc_t('مركز التعليم الإلكتروني', 'E-Learning Center')); ?></strong>
                    <small><?php echo esc_html(sirte_elc_t('جامعة سرت', 'Sirte University')); ?></small>
                </span>
            </a>
            <p><?php echo esc_html(sirte_elc_t('بوابة رسمية لخدمات التعليم الإلكتروني، والدخول إلى المنصة، والوثائق التنظيمية، والدعم الفني.', 'The official portal for e-learning services, platform access, governance documents, and technical support.')); ?></p>
        </div>
        <div>
            <h2><?php echo esc_html(sirte_elc_t('روابط سريعة', 'Quick links')); ?></h2>
            <ul>
                <?php foreach (sirte_elc_nav_items() as $sirte_elc_nav_key => $sirte_elc_nav_label) : ?>
                    <li><a href="<?php echo esc_url(sirte_elc_page_url($sirte_elc_nav_key)); ?>"><?php echo esc_html($sirte_elc_nav_label); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h2><?php echo esc_html(sirte_elc_t('تواصل', 'Contact')); ?></h2>
            <ul>
                <li><a href="mailto:elcsupport@su.edu.ly">elcsupport@su.edu.ly</a></li>
                <li><a href="https://wa.me/218922114086">WhatsApp: 218922114086</a></li>
                <li><a href="<?php echo esc_url(sirte_elc_platform_url()); ?>">e-learning.su.edu.ly</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>© <?php echo esc_html(date_i18n('Y')); ?> <?php echo esc_html(sirte_elc_t('مركز التعليم الإلكتروني - جامعة سرت. جميع الحقوق محفوظة.', 'E-Learning Center - Sirte University. All rights reserved.')); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
