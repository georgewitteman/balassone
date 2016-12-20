<?php
function archive_listing_loop() {

	global $post;

	// Start the Loop.
	while ( have_posts() ) : the_post();

	$loop = sprintf( '<div class="listing-widget-thumb"><a href="%s" class="listing-image-link">%s</a>', get_permalink(), get_the_post_thumbnail( $post->ID, 'listings' ) );

	if ( '' != wp_listings_get_status() ) {
		$loop .= sprintf( '<span class="listing-status %s">%s</span>', strtolower(str_replace(' ', '-', wp_listings_get_status())), wp_listings_get_status() );
	}

	$loop .= sprintf( '<div class="listing-thumb-meta">' );

	if ( '' != get_post_meta( $post->ID, '_listing_text', true ) ) {
		$loop .= sprintf( '<span class="listing-text">%s</span>', get_post_meta( $post->ID, '_listing_text', true ) );
	} elseif ( '' != wp_listings_get_property_types() ) {
		$loop .= sprintf( '<span class="listing-property-type">%s</span>', wp_listings_get_property_types() );
	}

	if ( '' != get_post_meta( $post->ID, '_listing_price', true ) ) {
		$loop .= sprintf( '<span class="listing-price">%s</span>', get_post_meta( $post->ID, '_listing_price', true ) );
	}

	$loop .= sprintf( '</div><!-- .listing-thumb-meta --></div><!-- .listing-widget-thumb -->' );

	if ( '' != get_post_meta( $post->ID, '_listing_open_house', true ) ) {
		$loop .= sprintf( '<span class="listing-open-house">Open House: %s</span>', get_post_meta( $post->ID, '_listing_open_house', true ) );
	}

	$loop .= sprintf( '<div class="listing-widget-details"><h3 class="listing-title"><a href="%s">%s</a></h3>', get_permalink(), get_the_title() );
	$loop .= sprintf( '<p class="listing-address"><span class="listing-address">%s</span><br />', wp_listings_get_address() );
	$loop .= sprintf( '<span class="listing-city-state-zip">%s, %s %s</span></p>', wp_listings_get_city(), wp_listings_get_state(), get_post_meta( $post->ID, '_listing_zip', true ) );

	if ( '' != get_post_meta( $post->ID, '_listing_bedrooms', true ) || '' != get_post_meta( $post->ID, '_listing_bathrooms', true ) || '' != get_post_meta( $post->ID, '_listing_sqft', true )) {
		$loop .= sprintf( '<ul class="listing-beds-baths-sqft"><li class="beds">%s<span>Beds</span></li> <li class="baths">%s<span>Baths</span></li> <li class="sqft">%s<span>Sq ft</span></li></ul>', get_post_meta( $post->ID, '_listing_bedrooms', true ), get_post_meta( $post->ID, '_listing_bathrooms', true ), get_post_meta( $post->ID, '_listing_sqft', true ) );
	}

	$loop .= sprintf('</div><!-- .listing-widget-details -->');

	$loop .= sprintf( '<a href="%s" class="button btn-primary more-link">%s</a>', get_permalink(), __( 'View Listing', 'wp-listings' ) );

	/** wrap in div with column class, and output **/
	printf( '<article id="post-%s" class="listing entry archive-listing"><div class="listing-wrap">%s</div><!-- .listing-wrap --></article><!-- article#post-## -->', get_the_id(), apply_filters( 'wp_listings_featured_listings_widget_loop', $loop ) );

	endwhile;

}


get_header(); ?>

<main class="main-content">

			<?php if ( have_posts() ) : ?>

				<header class="archive-header">
					<?php
					$object = get_queried_object();

					if ( !isset($object->label) ) {
						$title = '<h1 class="archive-title">' . $object->name . '</h1>';
					} else {
						$title = '<h1 class="archive-title">' . get_bloginfo('name') . ' Listings</h1>';
					}

					echo $title; ?>
				</header><!-- .archive-header -->


			<div class="archive-row">
			<?php archive_listing_loop(); ?>
		 </div>

		 <?php wp_listings_paging_nav(); ?>
		 <?php
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;

			?>

</main>

<?php
get_footer();
