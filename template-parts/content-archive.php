<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-meta">
		<?php the_date('F j, Y', '<p class="entry-date">', '</p>'); ?>
		<p class="entry-category"><?php the_category(); ?></p>
		<p class="entry-author">By: <?php the_author(); ?></p>
	</div>
	<div class="entry-content">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry-text">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
