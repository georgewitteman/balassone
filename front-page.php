<?php get_header(); ?>

<!-- Hero -->
<?php
  if(has_post_thumbnail()) {
    $thumbnail_url = get_the_post_thumbnail_url();
    $hero_style = "background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" . $thumbnail_url . ");";
  } else {
    $hero_style = '';
  }

  // echo $hero_style;
 ?>
<section class="hero" style="<?php echo $hero_style; ?>">
  <h2 class="hero-title">Balassone Realty</h1>
  <p class="hero-caption">Serving everyone from first time buyers to serious investors.</p>
  <div class="hero-links">
    <a href="<?php echo home_url( '/listings' ) ?>" class="hero-button">View Listings</a>
    <a href="<?php echo home_url( '/contact-me' ) ?>" class="hero-button">Contact Me</a>
  </div>
</section>

<section class="front-recent-listings">
  <h2 class="section-title">Recent Listings</h2>
    <?php echo wp_listings_shortcode(array( 'limit' => '4' )); ?>
  <a href="<?php echo home_url( '/listings' ) ?>" class="front-read-more">View all listings</a>
</a>
</section>

<section class="front-recent-posts">
  <h2 class="section-title">Recent Posts</h2>
  <ul>
    <?php
    	$args = array( 'numberposts' => '3' );
    	$recent_posts = wp_get_recent_posts( $args );
    	foreach( $recent_posts as $recent ){
    		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
    	}
    	wp_reset_query();
    ?>
  </ul>
  <a href="<?php echo home_url( '/blog' ) ?>"class="front-read-more">View more posts</a>
</section>

<?php get_footer(); ?>
