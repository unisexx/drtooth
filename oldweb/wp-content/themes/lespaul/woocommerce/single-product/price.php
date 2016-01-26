<?php
/**
* Single Product Price, including microdata for SEO
*
* @author  WooThemes
* @package WooCommerce/Templates
* @version 2.0.0
*
* Edited by WebMan
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $product;
?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

	<?php if ( $product->get_price_html() ) { ?>
	<p itemprop="price" class="price"><?php echo $product->get_price_html(); ?></p>

	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<?php } ?>
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>