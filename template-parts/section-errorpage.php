<!-- 404 error page template -->

<div class="wider-at-right--top">
  <div class="inner-content center-text">
    <h1 class="page-title"><?php _e( 'Sorry, but the content was not found', 'portfolio' ); ?></h1>
    <figure class="error-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/error-page.png" alt="Content was not found"></figure>
    <p>
      <?php _e( 'Perhaps go back to the home page?', 'portfolio' ); ?>
      <a href="<?php echo get_home_url(); ?>"><?php _e( 'Go home >', 'portfolio' ); ?></a>
    </p>
  </div>
</div>