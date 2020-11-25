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

	<main id="primary" class="site-main">

		<?php

		/* Show the landing page */
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>


		</div><!-- .landing-page-header -->

		<!-- THESE TWO SECTIONS ARE THE SAME AND SHOULD BE IN A DIFFERNT FILE -->
		<!-- SET ID BY NUMBER OF SECTIONS -->

		<!-- First section of featured content -->
		<section id="projects" class="featured-content-section">

			<!-- section title -->
	    	<div class="scrolling-titles">
	    		<?php
		    		$category = get_category_by_slug('web-development'); 
					$category_name = $category->name;
	    		?>
	    		<h2><?php echo $category->name;	?></h2>
	    	</div><!-- .scrolling-titles -->

	    	<!-- grid layout with posts -->
	    	<div id="featured-content-grid-wrapper-1" class="featured-content-grid-wrapper">
			<?php

				/* 
				* @TODO
				* This should be a theme option, including the id of the section 
				*/

				/* get posts from the category for section 1 */
				_mgd_artistic_developer_featured_posts_from_category( 'web-development' );

				?>
			</div><!-- .featured-content-grid-wrapper -->
				        
		</section>

		<!-- Second section of featured content -->
		<section id="artworks" class="featured-content-section">
			<!-- section title -->
	    	<div class="scrolling-titles">
	    		<?php
		    		$category = get_category_by_slug('creative-coding'); 
					$category_name = $category->name;
	    		?>
	    		<h2><?php echo $category->name;	?></h2>
	    	</div><!-- .scrolling-titles -->

	    	<!-- grid layout with posts -->
	    	<div class="featured-content-grid-wrapper">
	    		<article class="featured-post">
				<?php

				/* 
				* @TODO
				* This should be a theme option, including the id of the section 
				*/

				/* get posts from the category for section 1 */
				_mgd_artistic_developer_featured_posts_from_category( 'creative-coding' );

				?>
				</article><!-- .featured-post -->
			</div><!-- .featured-content-grid-wrapper -->
				        
		</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
