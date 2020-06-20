<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Prevent iPhone from adding links to numbers that look like telephone numbers --> 
  <meta name="format-detection" content="telephone=no">

  <title>Portfolio - Jutta Hyrskylahti</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="container">
    
  <header>
    <div class="site-name">
      <a href="<?php echo get_home_url(); ?>">Jutta Hyrskylahti</a>
    </div>
    <div class="menu">
      <div class="navigation">
        <input type="checkbox" class="navigation-checkbox" id="navi-toggle">
        <label for="navi-toggle" class="navigation-button">
          <span class="navigation-icon"></span>
        </label>
    
        <div class="navigation-background"></div>
    
        <nav class="navigation-nav">

          <!-- include main navigation -->
          <?php wp_nav_menu (

            array(
              'theme_location' => 'top-menu',
              'menu_class' => 'navigation-list'
            )

          ); ?>

        </nav>
    
      </div>
    </div>
  </header>




