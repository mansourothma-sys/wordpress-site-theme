<?php
/**
 * Generic page template (used when no page-*.php template is assigned).
 *
 * @package Sirte_ELC
 */

get_header();

while (have_posts()) :
    the_post();
    sirte_elc_page_header('صفحة', get_the_title());
    ?>
    <main id="primary" class="site-main">
        <section class="section">
            <div class="container page-body">
                <?php the_content(); ?>
            </div>
        </section>
    </main>
    <?php
endwhile;

get_footer();
