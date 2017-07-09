// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).ready(function(){

  // remove read more p tag
  // if ( $('.more-link').parent().is( "p" ) ) {
  //   $('.more-link').unwrap();
  // }

  // $('.single-post .media').each(function() { // the containers for all your galleries
  //   $(this).magnificPopup({
  //     delegate: 'a', // child items selector, by clicking on it popup will open
  //     type: 'image',
  //     // other options
  //     gallery:{
  //       enabled:true
  //     },
  //     image: {
  //       titleSrc: function(item) {
  //         //return item.el.attr('title') + '<small>by Andres Cano</small>';
  //         return item.el.attr('title');
  //       }
  //     }
  //   });
  // });

  // $('.single-post .image-pretty').magnificPopup({
  //     delegate: 'a', // child items selector, by clicking on it popup will open
  //     type: 'image',
  //     // other options
  //     gallery:{
  //       enabled:true
  //     },
  //     image: {
  //       titleSrc: function(item) {
  //         //return item.el.attr('title') + '<small>by Andres Cano</small>';
  //         return item.el.attr('title');
  //       }
  //     }
  //   });
  //
  // $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
	// 	disableOn: 700,
	// 	type: 'iframe',
	// 	mainClass: 'mfp-fade',
	// 	removalDelay: 160,
	// 	preloader: false,
  //
	// 	fixedContentPos: false
	// });

  //alert("scrolling took place");

	//alert("this will flre when the DOM is loaded.");

  // Header.
  // If the header is using "alt" styling and #banner is present, use scrollwatch
  // to revert it back to normal styling once the user scrolls past the banner.
  // Note: This is disabled on mobile devices.

  //  if (!skel.vars.isMobile
  //  &&  $header.hasClass('alt')
  //  &&  $banner.length > 0) {

  $(window).on('load', function() {

    $("#banner").scrollwatch({
      delay:    0,
      range:    1,
      anchor:   'top',
      on:     function() { $("#header-menu").removeClass('alt'); $("#em-logo").removeClass('alt');},
      off:    function() { $("#header-menu").addClass('alt'); $("#em-logo").addClass('alt');}
    });

    $("#top-banner").scrollwatch({
      delay:    0,
      range:    1,
      anchor:   'top',
      on:     function() { $("#inner-banner").removeClass('alt');},
      off:    function() { $("#inner-banner").addClass('alt');}
    });

  });




});
