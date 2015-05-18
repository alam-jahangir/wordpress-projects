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
            <div class="content">
                <h1><?php echo get_post_meta($post->ID, 'Main Title', true) ?></h1>
                <p><?php echo get_post_meta($post->ID, 'Sidebar Title', true) ?></p>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="content">
                        <h1><?php get_option('title_of_address'); ?></h1>
                        <address><?php get_option('address_detail'); ?></address></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><iframe style="border: 0;" src="<?php get_option('google_map_link'); ?>" width="100%" height="250px" frameborder="0"></iframe></div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h1><?php get_option('title_of_profile'); ?></h1>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img class="img-responsive" src="http://explorooo.com/startsite/wp-content/uploads/2015/05/about_us.jpg" alt="" /></a></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 style="margin-top: 0; color: #3a597d;"><?php get_option('manager_name'); ?></h3>
                    <h4><?php get_option('manager_designation'); ?></h4>
                    <?php get_option('manager_profile_des'); ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
