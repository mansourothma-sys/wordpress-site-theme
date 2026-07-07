<?php
/**
 * Fallback template.
 *
 * @package Sirte_ELC
 */

get_header();
?>
<main id="primary" class="site-main content-area">
    <section class="section">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_title('<h1>', '</h1>');
                    the_content();
                endwhile;
            else :
                echo '<h1>' . esc_html__('مركز التعليم الإلكتروني', 'sirte-elc') . '</h1>';
            endif;
            ?>
        </div>
    </section>
</main>
<?php
get_footer();

