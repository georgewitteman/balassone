<?php
/**
 * Template Name: Large Hero
 */
?>

<?php get_header(); ?>

<!-- Hero -->
<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php
    $thumbnail_url = get_template_directory_uri() . '/images/default-hero-optimized.jpg';
    if(has_post_thumbnail()) { $thumbnail_url = get_the_post_thumbnail_url(); }
    ?>
    <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo $thumbnail_url; ?>)">
      <h2 class="hero-title"><?php the_title();?></h1>
      <?php the_content(); ?>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
