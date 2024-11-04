<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$language = isset($_GET['lang']) ? $_GET['lang'] : '';
$metaGeneratorContent = 'Nicepage 6.21.1, nicepage.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = $metaGeneratorContent;
}
$metaReferrer = '';
$meta_referrer = '';
if ($metaReferrer) {
    if (theme_woocommerce_enabled() && is_cart()) {
        $meta_referrer = '';
        $GLOBALS['meta_referrer'] = '';
    } else {
        $meta_referrer = '<meta name="referrer" content="origin" />' . "\n";
        $GLOBALS['meta_referrer'] = $metaReferrer;
    }
}
$hideHeader = false; // default header is visible
global $hideFooter;
$hideFooter = false; // default footer is visible
$pageBlog = is_home();
$pagePost = is_single();
$page404 = is_404();
$pageLogin = is_wplogin();
$pageProducts = theme_woocommerce_enabled() ? is_shop() || is_product_category() : false;
$pageProduct = theme_woocommerce_enabled() ? is_product() : false;
$pageCart = theme_woocommerce_enabled() ? is_cart() : false;
$pageCheckout = theme_woocommerce_enabled() ? is_checkout() : false;
$defaultPath = $pageProducts || $pageProduct || $pageCart || $pageCheckout ? '/woocommerce' : '';
if ($pageBlog) {
    $template = 'blog';
}
if ($pagePost) {
    $template = 'post';
}
if ($page404) {
    $template = 'page404';
}
if ($pageLogin) {
    $template = 'pageLogin';
}
if ($pageProducts) {
    $template = 'products';
}
if ($pageProduct) {
    $template = 'product';
}
if ($pageCart) {
    $template = 'cart';
}
if ($pageCheckout) {
    $template = 'checkout';
}
$wpCustomTemplate = false;
global $isWpCustomTemplate, $blog_custom_template, $post_custom_template;
if ($isWpCustomTemplate) {
    $template = $blog_custom_template ? $blog_custom_template : $post_custom_template;
    if ($template) {
        $wpCustomTemplate = true;
    }
}
ob_start();
if ($pageBlog || $pagePost || $page404 || $pageLogin || $pageProducts || $pageProduct || $pageCart || $pageCheckout || $wpCustomTemplate) {
    $defaultName = $pageCart ? '‌shoppingCart' : $template;
    global ${$template . "_custom_template"};
    ${$template . "_custom_template"} = ${$template . "_custom_template"} ? ${$template . "_custom_template"} : $defaultName . 'Template';
    $customPath = $wpCustomTemplate ? $template : ${$template . "_custom_template"};
    $fileWithOptions = get_template_directory() . $defaultPath . '/template-parts/' . $customPath . '/custom-template-options.php';
    if ( file_exists( $fileWithOptions ) ) {
        include_once $fileWithOptions;
    }
} ?>
<!DOCTYPE html>
<html <?php theme_language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator, $meta_referrer; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?> <?php body_data_attributes(); ?>>
<?php if (version_compare( $wp_version, '5.2', '>=' )) { wp_body_open(); } ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'restique' ); ?></a>
    <?php if (!$hideHeader) {
    $translations = '';
    if ($language) {
        if (file_exists(get_template_directory() . '/' . 'template-parts/' . '/translations/' . $language .'/header-content' . '.php')) {
            $translations = '/translations/' . $language;
        }
    }
    get_template_part('template-parts' . $translations . '/header-content'); ?>
    <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-payment-dialog u-valign-middle u-dialog-section-2" id="sec-56e0">
  <div class="u-align-center u-container-align-center u-container-style u-dialog u-radius-25 u-shape-round u-white u-dialog-1">
    <div class="u-container-layout u-valign-top u-container-layout-1">
      <h5 class="u-align-left u-text u-text-1">Buy Now</h5>
      <div class="u-expanded-width u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-items-per-page="1">
        <div class="u-list-control"></div>
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-products-item u-repeater-item" data-product-id="1">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h5 class="u-align-left u-product-control u-text u-text-2">
                <a class="u-product-title-link" href="#">Basic Black</a>
              </h5>
              <div class="u-align-left u-product-control u-product-desc u-text u-text-3">Basic Black Restique Multi-purpose Wrist Rest</div>
              <div class="u-align-left u-product-control u-product-quantity u-product-quantity-1">
                <div class="u-hidden u-quantity-label">Quantity</div>
                <div class="u-border-1 u-border-grey-30 u-quantity-input u-radius-50">
                  <a class="disabled minus u-button-style u-quantity-button u-text-body-color">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m 4 8 h 8" fill="none" stroke="currentColor" stroke-width="1" fill-rule="evenodd"></path></svg>
                  </a>
                  <input class="u-input" type="text" value="1" pattern="[0-9]+">
                  <a class="plus u-button-style u-quantity-button u-text-body-color">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m 4 8 h 8 M 8 4 v 8" fill="none" stroke="currentColor" stroke-width="1" fill-rule="evenodd"></path></svg>
                  </a>
                </div>
              </div>
              <div data-add-zero-cents="true" class="u-align-left u-product-control u-product-price u-product-price-1">
                <div class="u-price-wrapper u-spacing-10">
                  <div class="u-old-price" style="text-decoration: line-through !important;">₱800.00</div>
                  <div class="u-price" style="font-size: 1.25rem; font-weight: 700;">₱700.00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list-control"></div>
      </div>
      <div class="u-expanded-width u-payment-services u-tab-links-align-justify u-tab-payment u-tab-vertical u-tabs u-payment-services-1" data-payment-order-approved-message="Your order has been approved. Thank you!" data-payment-order-cancelled-message="Unable to process your order. Please try again later." data-payment-service="bd8179d3a3c4893119a36c2dee7b7219" data-paypal-hidden-buttons="">
        <ul class="u-tab-list u-unstyled" role="tablist"><li class="u-tab-item" role="presentation"><a class="active u-active-grey-10 u-button-style u-payment-paypal u-tab-link u-text-body-color" id="link-tab-9cb3" href="#tab-9cb3" role="tab" aria-controls="tab-9cb3" aria-selected="true"><input type="radio" class="u-field-input u-grey-15 u-radius-15" name="payment-group" checked="checked"><span>Paypal</span><svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"><path fill="#009EE3" d="M11,5.9H18c3.8,0,5.2,1.9,4.9,4.7c-0.3,4.7-3.2,7.2-6.9,7.2h-1.9c-0.5,0-0.8,0.3-0.9,1.3l-0.8,4.3
  c-0.1,0.3-0.2,0.5-0.5,0.6H7.6c-0.4,0-0.5-0.3-0.4-1l2.6-16C9.9,6.3,10.2,5.9,11,5.9z"></path><path fill="#113984" d="M6.7,0h7.1c2,0,4.3,0.1,5.9,1.5c1.1,0.9,1.6,2.4,1.5,4c-0.4,5.4-3.7,8.5-8,8.5H9.6c-0.6,0-0.9,0.4-1.2,1.5
  l-0.9,5.1C7.4,21,7.3,21.3,7,21.3H2.6C2,21.3,1.9,21,2,20.1L5.2,1.3C5.3,0.4,5.7,0,6.7,0z"></path><path fill="#172C70" d="M8.6,14.8l1.3-7.9c0.1-0.7,0.5-1,1.3-1h7.1c1.2,0,2.1,0.2,2.8,0.5c-0.7,4.8-3.8,7.5-7.9,7.5H9.6
  C9.1,13.9,8.8,14.1,8.6,14.8z"></path></svg>
</a>
</li><li class="u-tab-item" role="presentation"><a class="u-active-grey-10 u-button-style u-payment-stripe u-tab-link u-text-body-color" id="link-tab-ab80" href="#tab-ab80" role="tab" aria-controls="tab-ab80" aria-selected="false"><input type="radio" class="u-field-input u-grey-15 u-radius-15" name="payment-group">Stripe<svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"><path fill="#635BFF" d="M14,9.2c-2.3-0.8-3.4-1.5-3.4-2.4c0-0.8,0.8-1.3,2-1.3c2.3,0,4.7,0.8,6.4,1.6l0.9-5.5
  c-1.3-0.5-4-1.6-7.7-1.6C9.6,0,7.5,0.7,5.8,1.9C4.1,3.2,3.4,4.9,3.4,7.2c0,4,2.6,5.7,6.8,7.2c2.7,0.9,3.6,1.6,3.6,2.5
  c0,0.9-0.9,1.6-2.4,1.6c-1.9,0-5.2-0.9-7.3-2.1L3,22c1.8,0.9,5.1,2,8.7,2c2.8,0,5.1-0.7,6.6-1.9c1.8-1.3,2.7-3.2,2.7-5.7
  C20.9,12.3,18.2,10.7,14,9.2L14,9.2z"></path></svg>
</a>
</li></ul>
        <div class="u-tab-content">
          <div class="u-container-style u-payment-paypal u-tab-active u-tab-pane" id="tab-9cb3" role="tabpanel" aria-labelledby="link-tab-9cb3">
            <div class="u-container-layout u-payment-services-inner u-container-layout-3">Loading...</div>
          </div>
          <div class="u-container-style u-payment-stripe u-tab-pane" id="tab-ab80" role="tabpanel" aria-labelledby="link-tab-ab80">
            <div class="u-container-layout u-container-layout-4">
              <a href="#" class="u-btn u-button-style u-stripe-button u-btn-1">Pay with Stripe</a>
            </div>
          </div>
        </div>
      </div>
    </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
  </div>
  <style>.u-dialog-section-2 .u-dialog-1 {
  width: 570px;
  min-height: 578px;
  height: auto;
  box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.2);
  margin: 60px auto;
}

.u-dialog-section-2 .u-container-layout-1 {
  padding: 34px 35px;
}

.u-dialog-section-2 .u-text-1 {
  font-weight: 700;
  margin: 0 165px 0 0;
}

.u-dialog-section-2 .u-products-1 {
  margin-top: 30px;
  margin-bottom: 0;
}

.u-dialog-section-2 .u-repeater-1 {
  grid-template-columns: 100%;
  min-height: 206px;
  grid-gap: 10px;
}

.u-dialog-section-2 .u-container-layout-2 {
  padding: 0 0 30px;
}

.u-dialog-section-2 .u-text-2 {
  background-image: none;
  margin: 0;
}

.u-dialog-section-2 .u-text-3 {
  font-size: 0.875rem;
  margin: 20px 0 0;
}

.u-dialog-section-2 .u-product-quantity-1 {
  width: 125px;
  margin: 30px auto 0 0;
}

.u-dialog-section-2 .u-product-price-1 {
  margin: -34px 0 0 auto;
}

.u-dialog-section-2 .u-payment-services-1 {
  min-height: 250px;
  min-width: 50px;
  margin: 0;
}

.u-dialog-section-2 .u-container-layout-3 {
  padding: 20px 0 0;
}

.u-dialog-section-2 .u-container-layout-4 {
  padding: 20px 0 0;
}

.u-dialog-section-2 .u-btn-1 {
  width: 100%;
  margin: 0 auto;
}

.u-dialog-section-2 .u-icon-1 {
  width: 20px;
  height: 20px;
  left: auto;
  top: 36px;
  position: absolute;
  right: 35px;
  padding: 0;
}

@media (max-width: 1199px) {
  .u-dialog-section-2 .u-text-1 {
    margin-right: 165px;
  }

  .u-dialog-section-2 .u-payment-services-1 {
    margin-right: initial;
    margin-left: initial;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-2 .u-container-layout-1 {
    padding: 30px;
  }

  .u-dialog-section-2 .u-container-layout-3 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-2 .u-container-layout-4 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-2 .u-icon-1 {
    top: 32px;
    right: 30px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-2 .u-dialog-1 {
    width: 540px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-2 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-2 .u-container-layout-1 {
    padding-left: 20px;
    padding-right: 20px;
  }

  .u-dialog-section-2 .u-text-1 {
    margin-right: 5px;
  }

  .u-dialog-section-2 .u-icon-1 {
    right: 20px;
  }
}</style>
</section>
    <?php } ?>
    <div id="content">
<?php $header = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($header, '', 'echo', 'header');
} else {
    echo $header;
} ?>