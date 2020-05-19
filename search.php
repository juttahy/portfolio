<?php get_header(); ?>

<h1>Search results for '<?php echo get_search_query();?>'</h1>

<?php get_template_part('template-parts/section','searchresults'); ?>

<?php previous_posts_link(); ?>
<?php next_posts_link(); ?>

<?php get_footer(); ?>