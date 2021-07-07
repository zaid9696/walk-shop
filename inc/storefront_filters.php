<?php 


add_filter('storefront_on_sale_products_args' , 'storefront_sale_product');

function storefront_sale_product($args) {

	$args['title'] = 'التخفيضات';
	
	return  $args;
}

add_filter('storefront_recent_products_args' , 'storefront_recent_product');

function storefront_recent_product($args) {

	$args['title'] = 'وصل حديثا';

	return  $args;
}


add_filter('storefront_popular_products_args', 'storefront_popular_product');

function storefront_popular_product($args) {

	$args['title'] = 'الاكثر شعبية';

	return $args;
}


add_filter('storefront_best_selling_products_args', 'storefront_selling_products', 10);

function storefront_selling_products($args) {

	$args['title'] = 'الاكثر مبيعا';

	return $args;
}