<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package webuyproperty
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-top-row">
      <div class="">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" />
      </div>
    </div><!-- .footer-top-row -->
    <div class="footer-bottom-row">
      <?php if( dynamic_sidebar( 'footer-widget-1' ) ) : endif ?>
      <?php if( dynamic_sidebar( 'footer-widget-2' ) ) : endif ?>
      <?php if( dynamic_sidebar( 'footer-widget-3' ) ) : endif ?>
      <?php if( dynamic_sidebar( 'footer-widget-4' ) ) : endif ?>
    </div><!-- .footer-bottom-row -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
