<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Eyemagine
 * @since Eyemagine 1.0
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="google-site-verification" content="5qNDiubpvHLaU_W8xKTNr2tcoEvuiFvFKystLhY0a_I" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/main.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">

  <?php wp_head(); ?>
  <!-- Begin Inspectlet Embed Code -->
  <script type="text/javascript" id="inspectletjs">
  window.__insp = window.__insp || [];
  __insp.push(['wid', 1590592162]);
  (function() {
  function __ldinsp(){var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
  document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', __ldinsp) : window.addEventListener('load', __ldinsp, false)) : __ldinsp();

  })();
  </script>
  <!-- End Inspectlet Embed Code -->
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header -->
<header id="header-menu" class="dropdown-menu">
  <div class="row header-container">
    <div class="small-12 medium-2 large-2 columns logo-header">
      <a href="//get.rendia.com/">
        <img id="em-logo" src="<?php echo get_template_directory_uri(); ?>/img/rendia-logo-white3.png" class="logo"alt="Rendia">
      </a>
    </div>
    <!--
    <div class="medium-6 large-4 hide-for-small-only columns sign-up">
      <a id="signup" href="#" class="button [tiny small large] sign-up-button" data-reveal-id="sign-up-modal">
        SIGN UP FOR OUR WEEKLY BLOG
      </a>
    </div>
    -->
     <div class="medium-10 large-10 hide-for-small-only columns headernav">
      <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Specialties&#9662;</a>
      <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
        <li><a href="https://get.rendia.com/optometry/" class="specialty-dropdown-link">Optometry</a></li>
        <li><a href="https://get.rendia.com/ophthalmology/" class="specialty-dropdown-link">Ophthalmology</a></li>
        <li><a href="https://get.rendia.com/otolaryngology/" class="specialty-dropdown-link">Otolaryngology</a></li>
        <li><a href="https://get.rendia.com/audiology/" class="specialty-dropdown-link">Audiology</a></li>
        <li><a href="https://get.rendia.com/facialaesthetics/" class="specialty-dropdown-link">Facial Aesthetics</a></li>
      </ul>
      <a href="//get.rendia.com/features/">Features</a>
      <a href="//get.rendia.com/pricing/">Pricing</a>
      <a href="//get.rendia.com/about/">About Us</a>
      <a href="//blog.rendia.com">Blog</a>
      <a href="//rendia.com/login">Log in</a>
      <a href="https://get.rendia.com/trial/" class="trial-button">Try it for free</a>
    </div>
  </div>
</header><!-- /.header -->

<!-- slider -->
<div id="sign-up-modal" class="reveal-modal" data-reveal>

    

  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- /.slider -->

<nav id="top-banner"></nav>

<!-- banner -->
<section id="banner">

</section>
<!-- /.banner -->

<div class="sign-up-mobile-small" data-reveal-id="sign-up-modal">
  <a id="signup" href="#" class="button [tiny small large] sign-up-button">
    SIGN UP FOR OUR MONTHLY NEWSLETTER
  </a>
</div>

<!-- blog & sidebar -->
<div id="blog-body" class="row blog-body">
