<?php get_header(); ?>
<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="row">
        <?php
        while (have_posts()) : the_post();
            get_template_part('content', 'page');
        endwhile;
        ?>
    </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<?php get_footer(); ?>
