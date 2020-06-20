<!-- Show the main post of the category -->

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>

<div class="blog-post">
  <div class="blog-post__inner">
    <div class="page-title">
      <h1><?php the_title(); ?></h1>  
    </div> 
    <div>
    <?php the_content(); ?>

      <?php 
      $tags = get_the_tags();
      if($tags):
      foreach($tags as $tag):?>

        <a href="<?php echo get_tag_link($tag->term_id);?>">
          <?php echo $tag->name;?>
        </a>

      <?php endforeach; endif;?>
    
    </div> 
  </div>
</div>

<?php endwhile; else: endif; ?>

<!-- Show links to other posts in the same category -->
<?php
if ( is_single()) {
  $categories = get_the_category();
  if ($categories) {
    foreach ($categories as $category) {
      // echo "<pre>"; print_r($category); echo "</pre>";
      $cat = $category->cat_ID;
      $args=array(
        'cat' => $cat,   
        'order' => SORT_DESC,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 55,
        'caller_get_posts'=>1
      );
      $my_query = null;
      $my_query = new WP_Query($args);
      if( $my_query->have_posts() ) { ?>
        <div class="blog-post--links">
        <?php      
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
         <div class="blog-post--links__inner">
          <h2><?php _e('Other work samples', 'portfolio'); ?></h2> 
          <div class="blog-post--links__inner__excerpt">
            <?php if(has_post_thumbnail()):?>
            <div class="blog-excerpt-thumbnail">
              <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
            </div>
          <?php endif;?>
          
          <div class="blog-excerpt-text">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a class="btn-pink-readmore" href="<?php the_permalink() ?>" rel="bookmark">Read more</a>
          </div>

          </div>
         </div>
        <?php
        endwhile; ?>
        </div>
      <?php 
      } //if ($my_query)
    } //foreach ($categories
  } //if ($categories)
  wp_reset_query();  // Restore global post data stomped by the_post().
} //if (is_single())
             
?>
