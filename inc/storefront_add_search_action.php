<?php

function storefront_header_add_search() {

	echo do_shortcode('[ivory-search id="19" title="Default Search Form"]');

};

function storefront_header_search() {

	remove_action( 'storefront_header', 'storefront_product_search', 40);
	add_action( 'storefront_header',  'storefront_header_add_search', 40);

}


add_action('storefront_header', 'storefront_header_search');
