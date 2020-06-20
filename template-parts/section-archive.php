
<!-- Show all the posts in a category -->
  
  <?php if (have_posts()) : $postCount = 0; while (have_posts()) : $postCount++; the_post();?>
    
    <div class="archive-container">
      <!-- If first post, show the category title -->
      <?php if($postCount == 1):?>
        <div class="page-title">
          <h1><?php echo single_cat_title(); ?></h1>
        </div>
      <?php endif;?>
      <div class="archive-container__inner">

          <h2><?php the_title(); ?></h2>
         
          <?php the_content(); ?>
                  
      </div>
    </div>  
  <?php endwhile; else: endif; ?>
