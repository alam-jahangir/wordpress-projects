<?php get_header(); ?>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="row">
        <?php
        while (have_posts()) : the_post();
            get_template_part('inhalt-detail', get_post_format());
        endwhile;
        ?>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<?php get_footer(); ?>
