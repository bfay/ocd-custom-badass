<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'calypso_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://www.eighthloop.com/', 'calypso' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'calypso' ); ?>"><?php printf( __( 'Proudly designed by %s', 'calypso' ), 'Eighth Loop' ); ?></a>
					</div><!-- .site-info -->
		</div><!-- #main .wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>