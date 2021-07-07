<?php 


				// $category_women = get_term_meta(17 , 'thumbnail_id', true);
				// $category_women_thumbnail = wp_get_attachment_url($category_women);
				// $category_women_name = get_term(17, 'product_cat', ARRAY_A);
				// $category_women_link = get_site_url() . '/index.php/women-products';

				// $category_men = get_term_meta(18 , 'thumbnail_id', true);
				// $category_men_thumbnail = wp_get_attachment_url($category_men);
				// $category_men_name = get_term(18, 'product_cat', ARRAY_A);
				// $category_men_link = get_site_url() . '/index.php/men-products';


function butterfly_storefront_homepage() {  ?>

		

		</main>
			</div> <!-- #primary -->
				</div>	<!-- .col-full -->

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
			<div class="hero__content">
				<h1><?php the_content(); ?></h1>
				<div class="hero__content-cta">
					<a href="<?php echo site_url('/?post_type=product') ?>"><button>تسوق الان</button></a>
				</div>
			</div>
		</div>

	<div class="col-full">
			<div class="content-area">
				<div class="site-main">

 <?php 

};


add_action('homepage', 'butterfly_storefront_homepage', 10);

// remove_action( 'homepage', 'storefront_homepage_content', 10);




