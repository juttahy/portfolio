<?php get_header(); ?>

<h1><?php echo single_cat_title(); ?></h1>

<?php get_template_part('template-parts/section','archive'); ?>

<?php previous_posts_link(); ?>
<?php next_posts_link(); ?>

<?php get_footer(); ?>