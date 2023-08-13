<?php // if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?>

<?php
// Add custom Theme Functions here
// 

add_action( 'woocommerce_single_product_summary', 'add_marketplace_button', 60, 0 );
add_action( 'woocommerce_single_product_summary', 'add_whatsapp_button', 70, 0 );

function add_marketplace_button() { 
    /**
     * EXAMPLE :
     * $my_custom_link = home_url('/my_page_slug/');
     * echo '<a class="btn-atc" href="' . esc_url( $my_custom_link ) .'">' . __( "My text button", "my_theme_slug" )  . '</a>';
     * 
     */
	$tokopedia = get_field('tokopedia');
	$shopee = get_field('shopee');
	$blibli = get_field('blibli');
	
	if( $tokopedia || $shopee || $blibli ) {
		echo '<div class="marketplace">';
		echo '<p>Klik link di bawah ini untuk pembelian di marketplace :</p>';
		if (get_field('tokopedia')) {
			echo '<a href="'. $tokopedia .'" class="btn-marketplace btn-tokopedia" target="_blank">Purchase Now via Tokopedia<i class="icon-angle-right"></i></a>';
		}
		if (get_field('shopee')) {
			echo '<a href="'. $shopee .'" class="btn-marketplace btn-shopee" target="_blank">Purchase Now via Shopee<i class="icon-angle-right"></i></a>';
		}
		if (get_field('blibli')) {
			echo '<a href="'. $blibli .'" class="btn-marketplace btn-blibli" target="_blank">Purchase Now via Blibli<i class="icon-angle-right"></i></a>';
		}
		echo '</div>';
	}
}; 

function add_whatsapp_button() { 
    $whatsapp_1 = get_field('whatsapp_cs_1');
	$whatsapp_2 = get_field('whatsapp_cs_2');
	$whatsapp_3 = get_field('whatsapp_cs_3');
	$whatsapp_4 = get_field('whatsapp_cs_4');
	$url = urlencode( get_permalink($product_id) );
	$name = urlencode( get_the_title($product_id) );
	$before_url = 'https://api.whatsapp.com/send?phone=62';
	$after_url = '&text=Halo%2C%20saya%20mau%20tanya%20untuk%20produk%3A%20%0A%0A*'. $name . '*%0A' . $url;
		
	if( $whatsapp_1 || $whatsapp_2 || $whatsapp_3 || $whatsapp_4 ) {
		echo '<div class="whatsapp">';
		echo '<p>Chat dengan customer service kami :</p>';
		if ($whatsapp_1) {
			$wa_url = $before_url . $whatsapp_1 . $after_url;
			echo '<a href="'. $wa_url . '" class="btn-whatsapp btn-whatsapp-1" target="_blank">Customer Service';
			if($whatsapp_2) { echo ' 1'; }
			echo '<i class="icon-angle-right"></i></a>';
		}
		if ($whatsapp_2) {
			$wa_url = $before_url . $whatsapp_2 . $after_url;
			echo '<a href="'. $wa_url .'" class="btn-whatsapp btn-whatsapp-2" target="_blank">Customer Service';
			if($whatsapp_1) { echo ' 2'; }
			echo '<i class="icon-angle-right"></i></a>';
		}
		echo '</div>';
	}
}; 

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie', 'product' ) );
