//Tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));


//Zoom Image
$(function () {
  $(document).on("click", ".wp-block-gallery .wp-block-image", function () {
    $(this).find('img').cpLightimg();
  });
});


//Parallax Mouse
$( document ).mousemove( function( e ) {
    $( '.graphic-01' ).parallax( -80, e );
    $( '.graphic-02' ).parallax( 30, e );
    $( '.graphic-03' ).parallax( 60, e );
});


//Screen Login
/*$('.page-login').ready(function() {
  var screenHeight = $(window).height() - 38 + 'px';
  
  //$('.page-login .form').css('height', screenHeight);
  $('.page-login .row').css('height', screenHeight);
});*/