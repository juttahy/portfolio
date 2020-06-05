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
   <!-- <div class="footer-background">
      <div class="footer-container">
        <div class="footer-content-one">
              <h2>Send me a message</h2>
              <p>lomake</p>
              <input type="submit" value="Send message" class="btn-pink">
        </div>
        <div class="footer-content-two">
          <h2>Contact me</h2>
          <p>
            <a href="#">
              <span class="icons"><i class="fas fa-envelope"></i></span> jutta.hyrskylahti@gmail.com
            </a>
          </p>
          <p>
            <a href="#">
              <span class="icons"><i class="fab fa-linkedin"></i></span> linkedin.com/in/jutta-hyrskylahti 
            </a>
          </p>
          <p>
            <a href="#">
              <span class="icons"><i class="fab fa-github"></i></span> github.com/juttahy
            </a>
          </p>
        </div> 
      </div>
      <div class="copyright">&copy; Jutta Hyrskylahti 2020</div>
    </div> -->
</footer>

<!-- brings scripts and hooks and other wordpress functionalities needed that are loaded at the bottom -->
<?php wp_footer(); ?>  
 
</body>
</html>