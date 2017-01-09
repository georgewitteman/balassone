<?php
get_header(); ?>

<div class="hero-container">
  <header class="hero-text hero-front">
  	<h1 class="hero-title">Balassone Realty</h1>
    <p class="hero-subtitle">Serving everyone from first time buyers to serious investors.</p>
  </header>
</div>

<div id="content" class="site-content">

  <div id="primary" class="content-area">

    <?php if( function_exists('wp_listings_shortcode') ) : ?>
    <section class="recent-listings">
      <h2 class="section-title">Recent Listings</h2>
      <?php echo wp_listings_shortcode(array( 'limit' => '4', 'columns' => '2' )); ?>
    </section>
    <?php endif; ?>

    <?php
    $loop = new WP_Query( 'posts_per_page=3' );
    if($loop->have_posts()) :
    ?>

    <section class="recent-posts">
      <h2 class="section-title">Recent Posts</h2>

      <?php
      while ($loop -> have_posts()) : $loop -> the_post();

        get_template_part('template-parts/content','archive');

      endwhile;

      ?>
      <div class="navigation pagination">
        <div class="nav-links">
          <a class="page-numbers" href="<?php echo home_url( '/blog/' ); ?>">See all entries</a>
        </div>
      </div>
    </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
  </div>

  <?php get_sidebar(); ?>

</div>

<?php
get_footer();
