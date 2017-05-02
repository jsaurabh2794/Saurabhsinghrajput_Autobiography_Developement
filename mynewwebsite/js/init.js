(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
    $('.materialboxed').materialbox();
  });
       
	var $divs = $('div'),
    $buttons = $('button'),
    $hb = $('html, body');



 $(document).ready(function() {
    $('select').material_select();
	

  });
 
 $(document).ready(function() {
 $('#textarea1').val('');
  $('#textarea1').trigger('autoresize');
 });
  
  $(document).ready(function() {
    $('#textarea1').characterCounter();
  });
  
  $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 600, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});

$(document).ready(function(){
  
  $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        });
	});