<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main>

  <?php
    if(has_post_thumbnail()) {
      $thumbnail_url = get_the_post_thumbnail_url();
      $hero_style = "background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url(" . $thumbnail_url . ");";
    } else {
      $hero_style = '';
    }

    // echo $hero_style;
   ?>
  <div class="page-header" style="<?php echo $hero_style; ?>">
    <h1 class="page-title"><?php the_title(); ?></h1>
  </div>

	<div class="page-content">

		<ul>
			<?php wp_get_archives('type=postbypost'); ?>
		</ul>

	</div>
</main>

<?php get_footer(); ?>
