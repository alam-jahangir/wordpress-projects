<?php get_header(); ?>

<section class="slider"> 
<img class="img-responsive banner" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.jpg" alt="" />
  <div class="container">
    <div class="jumbotron"> 
    <img style="width:100%;" class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sborder.jpg" alt="">
      <?php dynamic_sidebar('home1'); ?>
    </div>
  </div>
</section>
<section class="home_body">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('home2'); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
