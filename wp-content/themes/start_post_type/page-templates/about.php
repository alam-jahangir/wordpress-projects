<?php
/**
 * Template Name: About Us
 */
get_header();
?>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            while (have_posts()) : the_post();
                get_template_part('content', 'about');
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
