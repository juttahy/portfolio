<?php get_header(); ?>

<main>

  <!-- the_title brings the title of the page dynamically -->
  <h1><?php the_title(); ?></h1>

  <?php if(has_post_thumbnail()):?>
  <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
  <?php endif;?>

  <?php get_template_part('template-parts/section','content'); ?>

</main>

<?php get_footer(); ?>