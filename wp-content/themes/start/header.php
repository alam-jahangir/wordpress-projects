<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
                <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body>
        <img class="img-responsive" style="width:100%;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/bar.jpg" alt="">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt=""></a> </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>uber-uns">Über Uns</a></li>
                                <li class="dropdown"> <a href="<?php echo esc_url(home_url('/')); ?>" data-toggle="dropdown">Inhalt <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        $args = array(
                                            'post_type' => 'inhalt',
                                            'order' => 'ASC',
                                            'posts_per_page' => 10
                                        );

                                        $loop = new WP_Query($args);
                                        while ($loop->have_posts()) : $loop->the_post();    
                                        ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
