<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    <div class="content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <?php twentyfifteen_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(__('Edit', 'twentyfifteen')); ?>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    <?php
    $custom = get_post_custom($post->ID);

    $sidebar_title_1 = get_post_meta($post->ID, 'sidebar_title_1', true);
    $sidebar_text_1 = get_post_meta($post->ID, 'sidebar_text_1', true);
    $sidebar_link_1 = get_post_meta($post->ID, 'sidebar_link_1', true);
    ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
            <div class="well">
                <h3><?php echo $sidebar_title_1; ?></h3>
                <p><?php echo $sidebar_text_1; ?></p>
                <p> <a href="<?php echo $sidebar_link_1; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
            <div class="well">
                <h3><?php echo $sidebar_title_1; ?></h3>
                <p><?php echo $sidebar_text_1; ?></p>
                <p> <a href="<?php echo $sidebar_link_1; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
            <div class="well">
                <h3><?php echo $sidebar_title_1; ?></h3>
                <p><?php echo $sidebar_text_1; ?></p>
                <p> <a href="<?php echo $sidebar_link_1; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
            </div>
        </div>
    </div>
</div>