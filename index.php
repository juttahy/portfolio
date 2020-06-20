<?php get_header(); ?>

<main class="basic-page">
 
  <?php
		if ( have_posts() ) {

			// Load the posts 
			while ( have_posts() ) {
				the_post();
				get_template_part('template-parts/section','content');
			}

		} else {

			// If no content is found include the error page template.
			get_template_part( 'template-parts/section', 'errorpage' );

		}
	?>

</main>

<?php get_footer(); ?>