<!-- esimerkki postsejen tuomisesta, eka tarkistetaan onko niitä ja sit luupataan ne jotka määritelty etusivulle -->
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

  <?php the_content(); ?>

<?php endwhile; else: endif; ?>