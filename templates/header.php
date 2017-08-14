<!--     <a href="#" class="menu-btn">
    	<span id="one"></span>
    	<span id="two"></span>
    	<span id="three"></span>
    </a>
    <a href="<?php //echo get_site_url(); ?>" class="fixed-logo"><img src="/wp-content/uploads/2017/07/white-logo.png" class="img-fluid"></a>
<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <?php
      //if (has_nav_menu('primary_navigation')) :
       // wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
     // endif;
      ?>
    </nav>
  </div>
</header>
 -->

 <!-- <header class="header" id="nav-header">
    <div class="nav-wrap">
      <h1 id="nav-brand"><a href="<?php echo get_site_url(); ?>">Northbound</a></h1>
            <nav id="off-canvas-nav" class="primary-navigation">
                      <a id="nav-icon" href="#" class=""><span></span></a>
            <?php
            /*
                 wp_nav_menu( array(
                     'menu'              => 'Main Menu',
                     'theme_location'    => 'primary',
                     'menu_id'           => 'primary-menu',
                     'menu_class'        => 'menu dropdown',
                     'depth'             => 3
                 ));
            */
             ?> -->
             <!-- </nav>#off-canvas-nav -->
    <!-- </div>.wrap -->
<!-- </header>
<div class="overlay"></div> -->

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
            <!-- <a  class="hidden-md-up nav-number-mobile" href="tel:8663110003"><p>Call us <i class="fa fa-mobile"></i></p></a> -->
            <nav id="off-canvas-nav" class="primary-navigation">
                    <!-- <a class="nav-number-mobile" href="tel:8663110003"><i class="fa-mobile fa"></i> 866.311.0003</a> -->
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
