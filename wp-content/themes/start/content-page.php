<?php 
$meta_title = get_post_meta($post->ID, 'Sidebar Title', true); 
$class = 'col-lg-9';
if (!$meta_title): 
	$class = 'col-lg-12';
endif; ?>
<div class="<?php echo $class; ?> col-md-9 col-sm-8 col-xs-12">
    <div class="content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <?php twentyfifteen_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(__('Edit', 'twentyfifteen')); ?>
    </div>
</div>

<?php if ($meta_title): ?>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
    <div class="well">
        <h3><?php echo get_post_meta($post->ID, 'Sidebar Title', true) ?></h3>
        <p><?php echo get_post_meta($post->ID, 'Sidebar Text', true); ?></p>
        <p> <a href="#" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
    </div>
</div>
<?php endif; ?>

