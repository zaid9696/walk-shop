<?php 

// All Js and CSS scripts
require get_stylesheet_directory() . '/inc/enqueue.php';

// Adding a custom hero scetion
require get_stylesheet_directory() . '/inc/storefront_homepage.php';

// Removing unwanted Action;
require get_stylesheet_directory() . '/inc/storefront_remove_actions.php';

// adding to category homepage
require get_stylesheet_directory() . '/inc/storefront_homepage_category.php';

// // Editing product item 
// require get_stylesheet_directory() . '/inc/storefront_product_item.php';

// Adding Discount Section to homepage
require get_stylesheet_directory() . '/inc/storefront_discount_homepage.php';

// Adding Discount Section to homepage
require get_stylesheet_directory() . '/inc/storefront_filters.php';

// Editing Footer 
require get_stylesheet_directory() . '/inc/storefront_footer.php';

// // Shortcode for marks page
require get_stylesheet_directory() . '/inc/storefront_marks_page.php';

// // Shortcode for women page
// require get_stylesheet_directory() . '/inc/storefront_women_category.php';

// Shortcode for singl page
require get_stylesheet_directory() . '/inc/storefront_single_page.php';

// Snippets 
require get_stylesheet_directory() . '/inc/snippets_codes.php';

// add Ajax Search 
require get_stylesheet_directory() . '/inc/storefront_add_search_action.php';



