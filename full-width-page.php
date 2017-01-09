<?php
/**
 * Template Name: Full Width Page (No Sidebar)
 *
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header(); ?>

<div class="hero-container">
  <header class="hero-text">
  	<h1 class="hero-title page-title"><?php the_title(); ?></h1>
  </header>
</div>

<div id="content" class="site-content">
  <div id="primary" class="content-area ca-no-sidebar">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="entry-text spage-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; else : ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </div>
</div>

<?php
get_footer();
