<header class="u-clearfix u-header u-header" id="sec-9f0d">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/4.png",
            'default_url' => "#"
        )); $url = stripos($logo['url'], 'http') === 0 ? esc_url($logo['url']) : $logo['url']; ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo $url; ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="500" data-image-height="500">
      <img <?php if ($logo['svg']) { echo 'style="width:'.$logo['width'].'px"'; } ?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1">
    </a><!--shopping_cart-->
    <div class="u-shopping-cart u-shopping-cart-1"><div class="widget_shopping_cart_content"><?php theme_woocommerce_mini_cart(); ?></div></div><!--/shopping_cart-->
    <?php
            ob_start();
            ?><nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="primary menu">
      <div class="menu-collapse">
        <a class="u-button-style u-hamburger-link u-nav-link" href="#">
          <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-d63e"></use></svg>
          <svg class="u-svg-content" version="1.1" id="svg-d63e" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        {menu}
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><?php
            $menu_template = ob_get_clean();
            $menuPath = '/template-parts/menu/primary menu/';
            $processorPath = get_theme_file_path('/template-parts/menu/popups-render.php');
            if (file_exists($processorPath)) {
                include $processorPath;
            }
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-menu u-menu-one-level u-offcanvas u-menu-1',
                'menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-nav u-unstyled',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-9b27-76',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'is_mega_menu' => false,
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-9b27-78',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary menu',
                'template' => $menu_template,
                'mega_menu' => isset($megaMenu) ? $megaMenu : '{}',
            )); ?>
  </div>
</header>