<section class="more_info">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('footerbar'); ?>
    </div>
  </div>
</section>
<section class="footer_body">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="footer_menu">
          <h3>Footer Menu</h3>
          <?php wp_nav_menu(array('menu' => 'Footer Menu')); ?>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
        <div class="footer_middle">
          <?php dynamic_sidebar('ftext'); ?>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 ">
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      
       <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/flogo.png" class="img-responsive" alt="" /></a> </div>
    </div>
  </div>
</section>
<section class="footer_bg"> <img style="width:100%;" class="img-responsive" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/fbg.png" alt="" /> </section>
<section class="footer_copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <p class="text-center"> Copyright © 2015 Zae Vers Inc. All rights reserved. &nbsp;&nbsp;<a href="<?php echo esc_url(home_url('/')); ?>privacy-policy">Privacy Policy</a>&nbsp;&nbsp;<a href="<?php echo esc_url(home_url('/')); ?>terms-of-use">Term of Use</a></p>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
</body></html>