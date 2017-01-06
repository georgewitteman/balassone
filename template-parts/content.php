<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Balassone_Realty
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta">
		<?php the_date('m d, Y', '<span class="entry-date">', '</span>'); ?>
		<?php
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
		    echo esc_html( $categories[0]->name );
		}
		?>
		<span class="entry-author"><?php the_author(); ?></span>
	</div>
	<div class="entry-content">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</article>
