<?php
/**
 * Homepage template.
 *
 * @package Sirte_ELC
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/vision');
    get_template_part('template-parts/sections/faculties');
    get_template_part('template-parts/sections/governance');
    get_template_part('template-parts/sections/events');
    get_template_part('template-parts/sections/support');
    ?>
</main>
<?php
get_footer();

