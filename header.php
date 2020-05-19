<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Jutta Hyrskylahti</title>

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="container">
    
    <header>
      <div class="site-name">
        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jh_logo.svg" alt="Jutta Hyrskylahti logo"></a>
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


            <!-- <ul class="navigation-list"> -->
              <!-- poista li ja a classit ja käytä scss:ää tyylittelyyn eli navigation-list li a jne.  -->
              <!-- <li class="navigation-item"><a href="#" class="navigation-link">Home</a></li>
              <li class="navigation-item"><a href="#" class="navigation-link">CV</a></li>
              <li class="navigation-item"><a href="#" class="navigation-link">Work samples</a></li>
              <li class="navigation-item"><a href="#" class="navigation-link">Contact me</a></li>
            </ul> -->
          </nav>
      
        </div>
      </div>
    </header>




