<?php  /* The template for displaying all pages */

get_header(); ?>

	<main class="site-content<?php if (function_exists('brideliness_main_content_class')) brideliness_main_content_class(); ?>" itemscope="itemscope" itemprop="mainContentOfPage"><!-- Main content -->

		<?php // Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
					get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>

	</main><!-- #content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
