<?php
/**
 * Template Name: Hero Slideshow
 * description: Page template with optional Hero
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

    <?php
      if ( shortcode_exists( 'slick-slider' )) {
        echo do_shortcode('[slick-slider design="design-1"]');
        echo 'The shortcode exists';
      }
    ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
 