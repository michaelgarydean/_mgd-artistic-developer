<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Artistic_Developer
 */

get_header();
?>

	<main id="primary" class="site-main" data-scroll>

		<?php

		/* Show the landing page */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>


		</div><!-- .landing-page-header -->

		<!-- Featured Content sections -->
		<?php
			/* @TODO
			 *
			 * User can choose these in the theme options.
			 * User can choose how many posts to feature in each section
			 */
			$categories_to_feature = array(
				'web-development',
				'creative-coding'
			);

			//tag each section id with the index its created by.
			$which_section = 1;

			foreach( $categories_to_feature as $category_slug ) {
				_mgd_artistic_developer_featured_posts( $category_slug, $which_section, 3 );

			}
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
