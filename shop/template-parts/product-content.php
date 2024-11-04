<?php $skip_min_height = false; ?><section class="u-align-center u-clearfix u-container-align-center u-section-1" id="sec-53b7">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--product--><!--product_options_json--><!--{"source":"1"}--><!--/product_options_json--><!--product_item-->
    <div class="u-container-style u-expanded-width u-product u-shape-rectangle u-product-1" data-products-datasource="site" data-product-id="1">
      <div class="u-container-layout u-container-layout-1"><!--product_gallery--><!--options_json--><!--{"maxItems":""}--><!--/options_json-->
        <?php 
                    if (isset($maxItemsProductgallery) && isset($galleryImages) && $maxItemsProductgallery && count($galleryImages) > (int) $maxItemsProductgallery) {
                        $galleryImages = array_slice($galleryImages, 0, (int) $maxItemsProductgallery);
                    }
                    if (count($galleryImages) < 1): ?><style>
                    .u-gallery-1 *{
                        display: none !important;
                    }
                    </style><?php endif; ?><div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-bdb0">
          <div class="u-carousel-inner u-gallery-inner" role="listbox"><!--product_gallery_item-->
            <?php foreach($galleryImages as $index => $galleryImage): ?><div class=" u-carousel-item u-gallery-item<?php echo ($index === 0 ? " u-active": ""); ?>">
              <div class="u-back-slide">
                <img class="u-back-image u-expanded u-image-contain" src="<?php echo $galleryImage; ?>">
              </div>
              <div class="u-over-slide u-over-slide-1">
                <h3 class="u-gallery-heading">Sample Title</h3>
                <p class="u-gallery-text">Sample Text</p>
              </div>
            </div><?php endforeach; ?><!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item--><!--product_gallery_item-->
            <!--/product_gallery_item-->
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-1" href="#carousel-bdb0" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-2" href="#carousel-bdb0" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
          </a>
          <ol class="u-carousel-thumbnails u-spacing-20 u-carousel-thumbnails-1"><!--product_gallery_thumbnail-->
            <?php foreach($galleryImages as $key => $galleryImage): ?><li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-bdb0" data-u-slide-to="<?php echo $key; ?>">
              <img class="u-carousel-thumbnail-image u-image" src="<?php echo $galleryImage; ?>">
            </li><?php endforeach; ?><!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail--><!--product_gallery_thumbnail-->
            <!--/product_gallery_thumbnail-->
          </ol>
        </div><!--/product_gallery--><!--product_title-->
        <h2 class="u-product-control u-text u-text-1">
          <a class="u-product-title-link" href="<?php echo $productData['productUrl']; ?>"><?php echo $productData['title']; ?></a>
        </h2><!--/product_title--><!--product_price-->
        <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
          <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
            <div class="u-old-price" style="text-decoration: line-through !important;"><?php echo $productData['price_old']; ?></div><!--/product_old_price--><!--product_regular_price-->
            <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;"><?php echo $productData['price']; ?></div><!--/product_regular_price-->
          </div>
        </div><!--/product_price--><!--product_content-->
        <div class="u-product-control u-product-desc u-text u-text-2"><?php echo $productData['shortDesc']; ?></div><!--/product_content--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":""}--><!--/options_json-->
        <a href="#sec-56e0" class="u-black u-btn u-button-style u-product-control u-btn-1 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="<?php echo $productId; ?>" data-product="<?php echo $productJson; ?>"><!--product_button_content-->Add to Cart<!--/product_button_content--></a><!--/product_button--><!--product_description-->
        <div class="u-product-control u-product-full-desc u-text u-text-3"><?php echo $productData['fullDesc']; ?></div><!--/product_description-->
      </div>
    </div><!--/product_item--><!--/product-->
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>
