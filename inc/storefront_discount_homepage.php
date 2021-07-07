<?php 
	
	global $post;
	$discount_cover = get_field('discount_field');

function storefront_discount_homepage() { ?>

	<div class="discount">
		<div class="discount__cover" style="background-image: url(<?php echo get_field('discount_field');?>);"></div>
	</div>

<?php
	
};

add_action( 'homepage', 'storefront_discount_homepage', 25);


// add_filter('storefront_popular_products_args', 'storefront_recent_products');

// function storefront_recent_products($args) {

// 	$args['title'] = 'الاكثر شعبية';

// 	return $args;
// }