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

    $sidebar_title_2 = get_post_meta($post->ID, 'sidebar_title_2', true);
    $sidebar_text_2 = get_post_meta($post->ID, 'sidebar_text_2', true);
    $sidebar_link_2 = get_post_meta($post->ID, 'sidebar_link_2', true);

    $sidebar_title_3 = get_post_meta($post->ID, 'sidebar_title_3', true);
    $sidebar_text_3 = get_post_meta($post->ID, 'sidebar_text_3', true);
    $sidebar_link_3 = get_post_meta($post->ID, 'sidebar_link_3', true);

    $sidebar_title_4 = get_post_meta($post->ID, 'sidebar_title_4', true);
    $sidebar_text_4 = get_post_meta($post->ID, 'sidebar_text_4', true);
    $sidebar_link_4 = get_post_meta($post->ID, 'sidebar_link_4', true);

    $sidebar_title_5 = get_post_meta($post->ID, 'sidebar_title_5', true);
    $sidebar_text_5 = get_post_meta($post->ID, 'sidebar_text_5', true);
    $sidebar_link_5 = get_post_meta($post->ID, 'sidebar_link_5', true);

    $sidebar_title_6 = get_post_meta($post->ID, 'sidebar_title_6', true);
    $sidebar_text_6 = get_post_meta($post->ID, 'sidebar_text_6', true);
    $sidebar_link_6 = get_post_meta($post->ID, 'sidebar_link_6', true);

    $sidebar_title_7 = get_post_meta($post->ID, 'sidebar_title_7', true);
    $sidebar_text_7 = get_post_meta($post->ID, 'sidebar_text_7', true);
    $sidebar_link_7 = get_post_meta($post->ID, 'sidebar_link_7', true);

    $sidebar_title_8 = get_post_meta($post->ID, 'sidebar_title_8', true);
    $sidebar_text_8 = get_post_meta($post->ID, 'sidebar_text_8', true);
    $sidebar_link_8 = get_post_meta($post->ID, 'sidebar_link_8', true);

    $sidebar_title_9 = get_post_meta($post->ID, 'sidebar_title_9', true);
    $sidebar_text_9 = get_post_meta($post->ID, 'sidebar_text_9', true);
    $sidebar_link_9 = get_post_meta($post->ID, 'sidebar_link_9', true);

    $sidebar_title_10 = get_post_meta($post->ID, 'sidebar_title_10', true);
    $sidebar_text_10 = get_post_meta($post->ID, 'sidebar_text_10', true);
    $sidebar_link_10 = get_post_meta($post->ID, 'sidebar_link_10', true);
    
    ?>
    <?php
    if ($sidebar_title_1 != '' && $sidebar_text_1 != '' && $sidebar_link_1 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_1; ?></h3>
                    <p><?php echo $sidebar_text_1; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_1; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_2 != '' && $sidebar_text_2 != '' && $sidebar_link_2 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_2; ?></h3>
                    <p><?php echo $sidebar_text_2; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_2; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_3 != '' && $sidebar_text_3 != '' && $sidebar_link_3 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_3; ?></h3>
                    <p><?php echo $sidebar_text_3; ?></p>
                    <p> <a href="<?php echo $sidebar_link_3; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <?php
    if ($sidebar_title_4 != '' && $sidebar_text_4 != '' && $sidebar_link_4 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_4; ?></h3>
                    <p><?php echo $sidebar_text_4; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_4; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>

        <?php
    }
    ?>
    <?php
    if ($sidebar_title_5 != '' && $sidebar_text_5 != '' && $sidebar_link_5 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_5; ?></h3>
                    <p><?php echo $sidebar_text_5; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_5; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_6 != '' && $sidebar_text_6 != '' && $sidebar_link_6 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_6; ?></h3>
                    <p><?php echo $sidebar_text_6; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_6; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_7 != '' && $sidebar_text_7 != '' && $sidebar_link_7 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_7; ?></h3>
                    <p><?php echo $sidebar_text_7; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_7; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_8 != '' && $sidebar_text_8 != '' && $sidebar_link_8 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_8; ?></h3>
                    <p><?php echo $sidebar_text_8; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_8; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_9 != '' && $sidebar_text_9 != '' && $sidebar_link_9 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_9; ?></h3>
                    <p><?php echo $sidebar_text_9; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_9; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
    if ($sidebar_title_10 != '' && $sidebar_text_10 != '' && $sidebar_link_10 != '') {
        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sborder.jpg" alt="">
                <div class="well">
                    <h3><?php echo $sidebar_title_10; ?></h3>
                    <p><?php echo $sidebar_text_10; ?></p>
                    <p> <a target="_blink" href="<?php echo $sidebar_link_10; ?>" class="footer_btn">Mehr Informationen anfordern<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/arrow.png" alt="" /></a></p>
                </div>
            </div>
        </div>
    
    <?php
}
?>
</div>