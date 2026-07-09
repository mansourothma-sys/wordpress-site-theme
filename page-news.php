<?php
/**
 * Template Name: صفحة الأخبار والفعاليات
 * Template Post Type: page
 *
 * Lists real WordPress posts (Articles > Add New) so no content here is
 * invented — publish a post and it appears automatically.
 *
 * @package Sirte_ELC
 */

get_header();
sirte_elc_page_header(
    'الفعاليات والأنشطة العلمية',
    'الأخبار والفعاليات',
    'آخر إعلانات المركز، وورش العمل، والأنشطة العلمية الموجهة لأعضاء هيئة التدريس والطلاب.'
);

$news_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 9,
    'ignore_sticky_posts' => true,
]);
?>
<main id="primary" class="site-main">
    <section class="section" id="news-list">
        <div class="container">
            <?php if ($news_query->have_posts()) : ?>
                <div class="news-grid">
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <article class="news-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <a class="news-thumb" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </a>
                            <?php endif; ?>
                            <span class="news-date"><?php echo esc_html(get_the_date()); ?></span>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
                            <a class="faculty-link" href="<?php the_permalink(); ?>">
                                قراءة المزيد
                                <?php echo sirte_elc_icon('arrow'); ?>
                            </a>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <?php
                $big_pagination = paginate_links([
                    'total' => $news_query->max_num_pages,
                    'prev_text' => 'السابق',
                    'next_text' => 'التالي',
                ]);
                if ($big_pagination) :
                    ?>
                    <nav class="pagination" aria-label="التنقل بين الصفحات"><?php echo wp_kses_post($big_pagination); ?></nav>
                <?php endif; ?>
            <?php else : ?>
                <div class="empty-state">
                    <h3>لا توجد أخبار منشورة بعد</h3>
                    <p>عند نشر أول مقال من لوحة التحكم (مقالات &gt; أضف جديد) سيظهر هنا تلقائيًا.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="section section-soft events-section" id="events">
        <div class="container events-grid">
            <div>
                <?php
                sirte_elc_section_heading(
                    'الفعاليات على المنصة',
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
</main>
<?php
get_footer();
