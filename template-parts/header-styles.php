<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 226px;
}
.u-header .u-image-1 {
  width: 256px;
  height: 256px;
  margin: -32px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-shopping-cart-1 {
  height: 24px;
  width: 24px;
  margin: -154px 13px 0 auto;
}
.u-header .u-icon-1 {
  padding: 0;
}
.u-header .u-menu-1 {
  margin: -30px 70px 60px auto;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
@media (max-width: 1199px) {
  .u-header .u-shopping-cart-1 {
    margin-top: -154px;
    margin-right: 13px;
  }
}
@media (max-width: 575px) {
  .u-header .u-image-1 {
    margin-top: -43px;
  }
  .u-header .u-shopping-cart-1 {
    margin-top: -131px;
    margin-right: 45px;
  }
}</style>
