<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rrssb.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/main.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <link rel="profile" href="//gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/modernizr/modernizr.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header -->
<header id="header-menu" class="dropdown-menu">
  <div class="row header-container">
    <div class="small-12 medium-6 large-8 columns logo-header">
      <a href="/">
      	<img id="em-logo" src="<?php echo get_template_directory_uri(); ?>/img/em-logo-white.png" class="logo" width="270" height="62" alt="Eyemaginations, Educate Patients">
      </a>
    </div>
    <div class="medium-6 large-4 hide-for-small-only columns sign-up" data-reveal-id="sign-in-echo-modal">
      <a id="signup" target="_blank" href="//showecho.com" class="button [tiny small large] sign-up-button">
        Sign In to ECHO
      </a>
    </div>
  </div>
</header><!-- /.header -->

<nav id="top-banner"></nav>

<!-- banner -->
<section id="banner">
<!--
	".inner" is set up as an inline-block so it automatically expands
	in both directions to fit whatever's inside it. This means it won't
	automatically wrap lines, so be sure to use line breaks where
	appropriate (<br />).
-->
<div id="inner-banner" class="inner" data-0="opacity: 1;" data-200="opacity: 0;">
	<div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/echo-logo-w.png" class="logo" width="270" height="62" alt="ECHO">
	</div>
	<p>The best way to educate your patients</p>
  <a href="#learn-echo" class="button">
    Learn More
  </a>
</div>

</section>
<!-- /.banner -->

<div class="sign-up-mobile-small" data-reveal-id="sign-up-modal">
  <a id="signup" href="#" class="button [tiny small large] sign-up-button">
    Sign Up for Email Updates
  </a>
</div>



<div id="main" class="row">
  <?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', 'page' ); ?>
		<?php /*comments_template( '', true ); */?>
	<?php endwhile; // end of the loop. ?>
</div>

<?php /*get_sidebar();*/ ?>
<?php get_footer(); ?>