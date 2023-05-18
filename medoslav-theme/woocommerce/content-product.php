<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<li <?php wc_product_class('product-list-item', $product); ?>>
	<div class="product-block">
		<div class="product-transition">
			<div class="product-image">
				<?php
				/**
				 * Hook: woocommerce_before_shop_loop_item_title.
				 *
				 * @hooked woocommerce_show_product_ ale_flash - 10
				 * @hooked woocommerce_template_loop_product_thumbnail - 10
				 */
				do_action('woocommerce_before_shop_loop_item_title');
				?>
			</div>
			<div class="group-action">
				<div class="shop-action">
					<button class="woosw-btn" type="submit"><img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/heart.png" width="14"
							height="14" alt="submit"></button>
					<button class="woosw-btn" type="submit"><img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/online-shopping.png"
							width="16" height="16" alt="submit"></button>
					<button class="woosw-btn" type="submit"><img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/ico/view.png" width="18"
							height="18" alt="submit"></button>
				</div>
			</div>
			<?php
			echo '<div class="medoslav-rating">';
			woocommerce_template_loop_rating();
			if ( $rating_cnt = $product->get_rating_count()) {
				echo '<span class="medoslav-rating-count"> <small>(' . $rating_cnt .')</small></span>';
			}
			echo '</div>';
			?>
		</div>

		<div class="volume-switch">
			<div class="volume-value">1000ml</div>
			<div class="volume-value">750ml</div>
			<div class="volume-value">300ml</div>
		</div>
		
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		do_action('woocommerce_before_shop_loop_item');
		?>
		<?php
		/**
		 * Hook: woocommerce_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_product_title - 10
		 */
		do_action('woocommerce_shop_loop_item_title');

		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		do_action('woocommerce_after_shop_loop_item_title');

		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		do_action('woocommerce_after_shop_loop_item');
		?>
	</div>
</li>