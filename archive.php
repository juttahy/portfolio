<?php get_header(); ?>

<main class="basic-page">
  <?php get_template_part('template-parts/section','archive'); ?>

  <?php previous_posts_link(); ?>
  <?php next_posts_link(); ?>
</main>

<?php get_footer(); ?>