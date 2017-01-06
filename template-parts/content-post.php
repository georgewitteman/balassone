
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
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
		?>
	</div>
</article>
