<!-- container end -->
</div>

<footer>
  <div class="footer-background"> 
    <div class="footer-container">
      <?php dynamic_sidebar( 'footer_area_one' ); ?>
      <?php dynamic_sidebar( 'footer_area_two' ); ?>
    </div>
      <?php dynamic_sidebar( 'footer_area_three' ); ?>
  </div>
</footer>

<!-- brings scripts and hooks and other wordpress functionalities needed that are loaded at the bottom -->
<?php wp_footer(); ?>  
 
</body>
</html>