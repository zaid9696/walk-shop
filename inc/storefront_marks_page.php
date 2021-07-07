<?php 



function storefront_marks_page() {

	$cats = get_categories(array(

		'parent' => 20,
		'hide_empty' => 0,
		'taxonomy' => 'product_cat'

	) );

	echo '<div class="marks">';

	foreach ($cats as $cat ) { 

		$marks_covers_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
		$marks_covers = wp_get_attachment_url($marks_covers_id);
		$marks_links = get_term_link($cat->term_id, 'product_cat');
		?>
		
		<div class="marks__content">
			<a href="<?php echo $marks_links ?>">
				<img src="<?php echo $marks_covers ?>" alt="Logo">
			</a>
		</div>
		
	<?php 	
	}

	echo '</div>';
}

add_shortcode( 'markspage', 'storefront_marks_page' );
