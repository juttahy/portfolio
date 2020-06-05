
<!-- <div class="archive-all"> -->
  
  <?php if (have_posts()) : $postCount = 0; while (have_posts()) : $postCount++; the_post();?>
    
    <div class="archive-container">
      <?php if($postCount == 1):?>
        <div class="page-title">
          <h1><?php echo single_cat_title(); ?></h1>
        </div>
      <?php endif;?>
      <div class="archive-container__inner">

        <?php if(has_post_thumbnail()):?>
          <div class="archive-post-thumbnail">
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
          </div>
        <?php endif;?>

        <div class="archive-post-text">
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="btn-pink-readmore">Read more</a>
        </div>
      
      </div>
    </div>  
  <?php endwhile; else: endif; ?>

<!-- </div> -->