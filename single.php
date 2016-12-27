<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Balassone
*/

get_header(); ?>

<main>

	<?php
	while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', get_post_format() ); ?>
<div class="page-content">
	<?php the_post_navigation(); ?>
</div>
<?php 
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main>
<?php get_footer(); ?>
