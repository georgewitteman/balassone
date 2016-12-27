<?php
/**
 * Template part for displaying page content in page.php.
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	  if(has_post_thumbnail()) {
			$thumbnail_url = get_the_post_thumbnail_url();
	    $hero_style = "background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" . $thumbnail_url . ");";
	  } else {
	    $hero_style = '';
	  }

	  // echo $hero_style;
	 ?>

	<header class="page-header" style="<?php echo $hero_style; ?>">
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
		</div>
</article><!-- #post-## -->
