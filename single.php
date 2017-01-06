<?php get_header(); ?>

<div class="hero-container">
  <header class="hero-text">
  </header>
</div>

<div id="content" class="site-content">
  <div id="primary" class="content-area">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'post' ); ?>
    <?php endwhile; else : ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </div>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
