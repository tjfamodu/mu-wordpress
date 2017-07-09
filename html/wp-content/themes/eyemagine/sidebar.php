<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Eyemagine
 * @since Eyemagine 1.0
 */
?>


<?php $upload_dir = wp_upload_dir(); // assign the value of the upload folder ?>

<!-- sidebar body -->
<div class="large-4 medium-5 columns hide-for-small-only sidebar">

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">

      <?php if ( is_single() ) : ?>
        <div class="authors">
          <h5><?php the_author_meta('display_name'); ?></h5>
          <p><?php the_author_meta('description'); ?></p>
        </div>

      <?php else : ?>

        <!-- <div class="authors">
        <h5>
        <a href="http://blog.eyemaginations.com/?cat=12,18">
          Product News <i class="fa fa-arrow-right"></i>
        </a>
        <h5>
        </div>-->

        <div class="authors">

          <h5>Authors</h5>

          <a title="Smitha Gopal" href="<?php echo esc_url( home_url( '/' ) ); ?>author/sgopal/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2017/06/Gopal_Smitha-304x304.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Michael Sopher" href="<?php echo esc_url( home_url( '/' ) ); ?>author/msopher/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/msopher-150x150.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Brad Sopher" href="<?php echo esc_url( home_url( '/' ) ); ?>author/bsopher/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/07/Sopher_Brad-304x304.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Jordan Sopher" href="<?php echo esc_url( home_url( '/' ) ); ?>author/jsopher/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/09/Sopher_Jordan-304x304.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Brigitte Granger" href="<?php echo esc_url( home_url( '/' ) ); ?>author/bgranger/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/bgranger.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Julia Malanka" href="<?php echo esc_url( home_url( '/' ) ); ?>author/jmalanka/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2014/09/jmalanka-150x150.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Kristen Shaab" href="<?php echo esc_url( home_url( '/' ) ); ?>author/kshaab/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/07/Shaab_Kristen-304x304.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Rachel Bishop" href="<?php echo esc_url( home_url( '/' ) ); ?>author/rbishop/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/06/rbishop.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Quin Ashworth" href="<?php echo esc_url( home_url( '/' ) ); ?>author/qashworth/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/06/qashworth.jpg" class="avatar" height="120" width="120">
          </a>
          <a title="Katie Moyer" href="<?php echo esc_url( home_url( '/' ) ); ?>author/kmoyer/">
            <img alt="" src="<?php echo $upload_dir['baseurl']; ?>/2016/06/kmoyer.jpg" class="avatar" height="120" width="120">
          </a>

        </div>

      <?php endif; ?>

      <?php dynamic_sidebar( 'sidebar-1' ); ?>

  </div>
  <?php endif; ?>

</div><!-- /.sidebar body -->

</div><!-- /.blog & sidebar -->
