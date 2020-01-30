<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>



	<footer id="colophon" role="contentinfo">
			<div id="site-generator">
				<small>&copy Copyright <?php echo date('Y') . " " . esc_attr( get_bloginfo( 'name', 'display' ) ); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'themename' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'themename' ), 'WordPress' ); ?></a></small>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
