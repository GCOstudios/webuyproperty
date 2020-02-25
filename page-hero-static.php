<?php
/**
 * Template Name: Hero Single Image
 * description: Page template with optional Hero
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

    <?php
      $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      $get_description = get_post(get_post_thumbnail_id())->post_excerpt;

      while ( have_posts() ) :
        the_post();
    ?>

    <?php if (has_post_thumbnail()) { ?>
      <div class="hero-treatment" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
        <?php
          if(!empty($get_description)){//If description is not empty show the div
            echo '<div class="featured-caption"><p>' . $get_description . '</p></div>';
          }

          echo '<div class="hero-form-container"><h3>For an initial <br>no obligation <span>cash offer</span></h3>'; ?>
          
          <form id="hero-form" class="post-code-submit" action="/postcode" method="get">
            <input type="text" name="postcode" pattern="[a-zA-Z0-9\s]+" placeholder="Enter your postcode" />

            <p class="submit-button">
              <input type="submit" value="Submit" />
            </p>
          </form>
        
        <?php
          echo '</div>';
        ?>
      </div>
    <?php } ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div class="entry-content">
        <?php
        the_content();

        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webuyproperty' ),
          'after'  => '</div>',
        ) );
        ?>
      </div><!-- .entry-content -->

      <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
          <?php
          edit_post_link(
            sprintf(
              wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Edit <span class="screen-reader-text">%s</span>', 'webuyproperty' ),
                array(
                  'span' => array(
                    'class' => array(),
                  ),
                )
              ),
              get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
          );
          ?>
        </footer><!-- .entry-footer -->
      <?php endif; ?>
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
 