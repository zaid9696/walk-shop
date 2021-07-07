<?php 





function storefront_homepage_category() {


				$category_women = get_term_meta(18 , 'thumbnail_id', true);
				$category_women_thumbnail = wp_get_attachment_url($category_women);
				$category_women_name = get_term(18, 'product_cat', ARRAY_A);
				$category_women_link = get_term_link( 18, 'product_cat' );

				$category_men = get_term_meta(17 , 'thumbnail_id', true);
				$category_men_thumbnail = wp_get_attachment_url($category_men);
				$category_men_name = get_term(17, 'product_cat', ARRAY_A);
				$category_men_link = get_term_link( 17, 'product_cat' );

				$category_kids = get_term_meta(19 , 'thumbnail_id', true);
				$category_kids_thumbnail = wp_get_attachment_url($category_kids);
				$category_kids_name = get_term(19, 'product_cat', ARRAY_A);
				$category_kids_link = get_term_link( 19, 'product_cat' );

	?>

	<div class="category">
		<div class="category__card" style="background-image: url(<?php echo $category_kids_thumbnail; ?>);">
			<div class="category__card-content">

			<h2><?php echo $category_kids_name['name']; ?></h2>
			<a href="<?php echo $category_kids_link ?>"><button>
				تسوق الان
			</button></a>
			</div>
		</div>

			<div class="category__card" style="background-image: url(<?php echo $category_women_thumbnail; ?>);">
				<div class="category__card-content">

				<h2><?php echo $category_women_name['name']; ?></h2>
				<a href="<?php echo $category_women_link ?>"><button>
					تسوق الان
				</button></a>
				</div>
		</div>

			<div class="category__card" style="background-image: url(<?php echo $category_men_thumbnail; ?>);">
				<div class="category__card-content">
					
				<h2><?php echo $category_men_name['name']; ?></h2>
				<a href="<?php echo $category_men_link ?>"><button>
					تسوق الان
				</button></a>
				</div>	
		</div>
	</div>

	<?php
}

add_action('homepage', 'storefront_homepage_category', 20);




?>