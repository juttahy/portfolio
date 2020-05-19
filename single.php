<?php get_header(); ?>

<div>
<?php if(has_post_thumbnail()):?>

  <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">

<?php endif;?>

<!-- the_title brings the title of the page dynamically -->
<h1><?php the_title(); ?></h1>

<?php get_template_part('template-parts/section','blogcontent'); ?>

</div>

<?php get_footer(); ?>