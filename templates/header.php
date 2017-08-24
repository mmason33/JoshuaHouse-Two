<header class="header container" id="nav-header">
<div class="row justify-content-end nav-wrap">
  <div class="col-4 text-right">
    <a  class="nav-number" href="tel:8663110003"><i class="fa fa-mobile"></i> 866.311.0003</a>
  </div>
</div>
    <div class="nav-wrap row">
    <div class="col-2">
      <h1 id="nav-brand"><a href="<?php echo get_site_url(); ?>">Northbound</a></h1>
    </div>
    <div class="col-10">
            <nav id="off-canvas-nav" class="primary-navigation">
                      <a id="nav-icon" href="#" class=""><span></span></a>
            <?php
                 wp_nav_menu( array(
                     'menu'              => 'Main Menu',
                     'theme_location'    => 'primary',
                     'menu_id'           => 'primary-menu',
                     'menu_class'        => 'menu dropdown',
                     'depth'             => 3
                 ));
             ?>
             </nav><!-- #off-canvas-nav -->
    </div>
    </div><!-- .wrap -->
</header>
<div class="overlay"></div>
