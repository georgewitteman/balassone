<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <div class="entry-meta">
      <?php the_date('F j, Y', '<span class="entry-date">', '</span>'); ?>
      <span class="entry-author">By: <?php the_author(); ?></span>
      <?php edit_post_link( 'Edit post', '<span class="entry-edit">', '</span>'); ?>
    </div>
  </header>
	<div class="entry-text">
		<?php the_excerpt(); ?>
	</div>
</article>
