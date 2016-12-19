<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Balassone
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf('Proudly powered by %s', 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( 'Theme: %1$s by %2$s.', 'balassone', '<a href="http://www.georgewitteman.me" rel="designer">George Witteman</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
