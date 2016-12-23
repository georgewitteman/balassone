<?php
/**
 * Template part for displaying page content in page.php.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $thumbnail_url = get_template_directory_uri() . '/images/default-hero-optimized.jpg'; ?>
	<header class="page-header" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(<?php echo $thumbnail_url; ?>)">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>

	<div class="page-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . 'Pages:',
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="page-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						'Edit %s',
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
