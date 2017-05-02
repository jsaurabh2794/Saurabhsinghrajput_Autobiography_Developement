$('#loader').hide();
$('#loader1').hide();
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
$("li a").on('click', function(event) {

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

$(window).on('load',function() { // makes sure the whole site is loaded
$('#status').fadeOut(); // will first fade out the loading animation
$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
$('body').delay(350).css({'overflow':'visible'});
});
});

$(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();
});


$(document).ready(function(){

$('#dalo').on("click",function(event){
if(document.getElementById("first_name").value==''||document.getElementById("mob").value==''||document.getElementById("email").value==''||document.myForm.sex.value=='-1'||document.getElementById("message").value=='')
{

}
else{
event.preventDefault();
$('#loader').show();
$.post(
"action.php",
{first_name: $('#first_name').val(),mob: $('#mob').val(),email: $('#email').val(),sex: $('#sex').val(),message: $('#message').val()},
function(data)
{
$('#print').fadeIn();
$('#loader').hide();
document.getElementById("print").innerHTML = data;

$('#print').delay(3000).fadeOut('slow');

});
}
});
});


$(document).ready(function(){

$('#send1').click(function(event){

var x = document.getElementById("email1").value;
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
event.preventDefault();		 
$('#print3').fadeIn();
document.getElementById("print3").innerHTML = "Not a valid email address.";
$('#print3').delay(3000).fadeOut('slow'); 
}
else
{
event.preventDefault();
$('#loader1').show();


$.post(
"cv_download.php",
{email1: $('#email1').val()},
function(data)
{
$('#print3').fadeIn();
$('#loader1').hide();
document.getElementById("print3").innerHTML = data;
$('#print3').delay(5000).fadeOut('slow');
$('#cv_download').delay(5000).hide();

});

$.ajax({
url: 'demo.php',
type: 'POST',
success: function() {
window.location = 'demo.php';

}
});
}
});
});






