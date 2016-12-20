<?php get_header(); ?>

<!-- Hero -->
<?php $thumbnail_url = get_template_directory_uri() . '/images/default-hero-optimized.jpg'; ?>
<section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(<?php echo $thumbnail_url; ?>)">
  <h2 class="hero-title">Balassone Realty</h1>
  <p class="hero-caption">Serving everyone from first time buyers to serious investors.</p>
  <div class="hero-links">
    <a href="<?php echo home_url( '/listings' ) ?>" class="hero-button">View Listings</a>
    <a href="<?php echo home_url( '/contact-me' ) ?>" class="hero-button">Contact Me</a>
  </div>
</section>

<?php get_footer(); ?>
