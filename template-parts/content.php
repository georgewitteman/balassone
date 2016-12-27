<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Balassone
 */

?>

<?php
  if(has_post_thumbnail()) {
    $thumbnail_url = get_the_post_thumbnail_url();
    $hero_style = "background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" . $thumbnail_url . ");";
  } else {
    $hero_style = '';
  }

  // echo $hero_style;
 ?>

<div class="page-header" style="<?php echo $hero_style; ?>">
 <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( 'Continue reading %s <span class="meta-nav">&rarr;</span>', array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . 'Pages:' ,
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php balassone_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
