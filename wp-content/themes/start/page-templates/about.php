<?php

/**
 * Template Name: About Us2
 */
get_header();
?>

<?php

while (have_posts()) : the_post();
    get_template_part('content', 'about');
endwhile;
?>
<?php get_footer(); ?>
