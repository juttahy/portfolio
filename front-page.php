<?php get_header(); ?>

<main>

  <?php get_search_form(); ?>

  <!-- the_title brings the title of the page dynamically -->
  <h1><?php the_title(); ?></h1>

  <?php get_template_part('template-parts/section','content'); ?>

</main>

<?php get_footer(); ?>