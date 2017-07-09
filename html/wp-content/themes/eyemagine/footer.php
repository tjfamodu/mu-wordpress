<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Eyemagine
 * @since Eyemagine 1.0
 */
?>

<!-- footer -->
<footer>
  <div class="row">
    <div class="small-12 medium-12 large-9 columns destination-links">
      <div class="website-sections">
        <ul>
          <li><a href="//blog.rendia.com">Blog</a></li>
        </ul>
      </div>
      <div class="general">
        <ul>
          <li><a href="//get.rendia.com/about/">About Us</a></li>
        </ul>
      </div>
      <div class="products">
        <ul>
          <li><a href="//get.rendia.com/">Rendia</a></li>

        </ul>
      </div>
    </div>
    <div class="small-12 medium-12 large-3 columns social-links">
      <ul>
        <li><a href="//www.twitter.com/goRendia" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
        <li><a href="//www.facebook.com/goRendia" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="//www.linkedin.com/company/rendia" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="//plus.google.com/+goRendia" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>
        <li><a href="//www.youtube.com/goRendia" target="_blank"><i class="fa fa-youtube fa-2x"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-6 large-3 columns">
      <form onsubmit="return checkemail()" id="newsletter-form" action="//em.eyemaginations.com/l/33332/2015-02-27/3lwch" method="post" class="row collapse">
          <div class="small-10 columns">
            <input type="text" placeholder="SIGN UP FOR OUR NEWSLETTER" name="email">
          </div>
          <div class="small-2 columns">
            <input type="Submit" class="button" value="SUBSCRIBE">
          </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-9 large-9 columns">
      <div class="copyright">
        © 1999–<?php echo date("Y"); ?> Rendia, Inc. <span><a href="//get.rendia.com/privacy/">Privacy Policy</a></span>
      </div>
    </div>
    <div class="small-12 medium-3 large-3 columns">
      <div class="small-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/rendia-logo-b.png" class="logo-footer" width="162" height="40" alt="Eyemaginations">
      </div>
    </div>
  </div>
</footer><!-- /.footer -->

<?php wp_footer(); ?>

  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rrssb.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
  <link rel="profile" href="//gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/modernizr/modernizr.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/bower_components/foundation/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/rrssb.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollgress.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!--<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script type="text/javascript">
  if ( !Modernizr.touch ) { // skrollr only if not touch
    var s = skrollr.init();
  }
</script>-->

<!-- Google Code for Remarketing Tag -->
<!--
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987605416;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/987605416/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-513795-24', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['get.rendia.com', 'go.rendia.com'] );
  ga('send', 'pageview');

</script>
<!-- begin Pardot Website Tracking code -->
<script type="text/javascript">
piAId = '34332';
piCId = '1788';

(function() {
function async_load(){
var s = document.createElement('script'); s.type = 'text/javascript';
s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
}
if(window.attachEvent) { window.attachEvent('onload', async_load); }
else { window.addEventListener('load', async_load, false); }
})();
</script>
<!-- end Pardot Website Tracking code -->
<!-- email validation -->
<script>
  var testresults
  function checkemail(){
  //var str=document.validation.emailcheck.value
  var str = $("#newsletter-form input[type=text]").val();
  var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
  if (filter.test(str))
  testresults=true
  else{
  alert("Please input a valid email address!")
  testresults=false
  }
  return (testresults)
  }
</script>
<!-- end email validation -->
</body>
</html>
