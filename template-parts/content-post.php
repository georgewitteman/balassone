
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-meta">
      <?php the_date('F j, Y', '<span class="entry-date">', '</span>'); ?>
      <span class="entry-author">By: <?php the_author(); ?></span>
      <?php edit_post_link( 'Edit post', '<span class="entry-edit">', '</span>'); ?>
    </div>
  </header>

	<div class="entry-content">
    <div class="entry-text">
  		<?php the_content(); ?>
    </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links"> Pages: ',
				'after'  => '</div>',
			) );

      // If comments are open or we have at least one comment, load up the comment template.
  		if ( comments_open() || get_comments_number() ) {
  			comments_template();
  		}
		?>
	</div>
</article>
