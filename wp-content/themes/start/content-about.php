<div class="clearfix">&nbsp;</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="content">
                        <h1><?php echo get_post_meta($post->ID, 'Title of Address', true) ?></h1>
                        <address><?php echo get_post_meta($post->ID, 'Detail Address', true) ?></address></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><iframe style="border: 0;" src="<?php echo get_post_meta($post->ID, 'Google Map Link', true) ?>" width="100%" height="250px" frameborder="0"></iframe></div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <h1><?php echo get_post_meta($post->ID, 'Title of Profile', true) ?></h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img class="img-responsive" src="http://explorooo.com/startsite/wp-content/uploads/2015/05/about_us.jpg" alt="" /></a></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 style="margin-top: 0; color: #3a597d;"><?php echo get_post_meta($post->ID, 'Manager Name', true) ?></h3>
                    <h4><?php echo get_post_meta($post->ID, 'Manager Designation', true) ?></h4>
                    <?php echo get_post_meta($post->ID, 'Manager Profile Description', true) ?>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</div>