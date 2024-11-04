<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 999.3.0
 */

defined( 'ABSPATH' ) || exit; ?>
<script type="text/javascript">
    if (window.sessionStorage) {
        window.sessionStorage.setItem('wc_cart_created', '');
    }
</script>
<a class="u-shopping-cart " data-payment-service="{&quot;id&quot;:&quot;bd8179d3a3c4893119a36c2dee7b7219&quot;,&quot;formServices&quot;:[&quot;886623b2-e59b-5428-69e6-6f02ca38ff7c&quot;],&quot;paymentMethods&quot;:[{&quot;id&quot;:&quot;ebd3a5cfc615f07e3293614b54b3ad5b&quot;,&quot;clientId&quot;:&quot;&quot;,&quot;type&quot;:&quot;paypal&quot;,&quot;disableFunding&quot;:&quot;&quot;}],&quot;userToken&quot;:&quot;ff078477-0eba-480a-a179-0eab9d6698af&quot;}" href="<?php echo wc_get_cart_url(); ?>"><span class="u-icon u-shopping-cart-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xlink:href="#svg-44b8"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-44b8"><path d="M14.5,3l-2.1,5H6.1L5.9,7.6L4,3H14.5 M0,0v1h2.1L5,8l-2,4h11v-1H4.6l1-2H13l3-7H3.6L2.8,0H0z M12.5,13
	c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5S13.3,13,12.5,13L12.5,13z M4.5,13C3.7,13,3,13.7,3,14.5S3.7,16,4.5,16
	S6,15.3,6,14.5S5.3,13,4.5,13L4.5,13z"></path></svg>
        <span class="u-icon-circle u-palette-1-base u-shopping-cart-count" style="font-size: 0.75rem;"><?php $count = WC()->cart->get_cart_contents_count(); $count = isset($count) ? $count : 0; echo $count; ?></span>
    </span>
    </a>
