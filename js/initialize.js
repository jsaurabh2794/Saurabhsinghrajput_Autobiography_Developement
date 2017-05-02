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
    $('#n_error').hide();
    $('#e_error').hide();
    $('#m_error').hide();
    $('#s_error').hide();
    $('#t_error').hide();
    
    
        var n=false;
        var m=false;
        var e=false;
        var s=false;
        var t=false;
    $('#dalo').on("click",function(e){
       e.preventDefault();
       n=check_name();
       m=check_mob();
       e=check_email();
       s=check_sex();
       t=check_message();
        if(n==false||m==false||e==false||s==false||t==false)
       {
           
           return false;
           
       }else
       {
           $('#loader').show();
           $.ajax({
               type:'post',
               url:'action.php',
               data:{first_name: $('#first_name').val(),mob: $('#mob').val(),email: $('#email').val(),sex: $('#sex').val(),message: $('#message').val()},
               success:function(data)
               {
                $('#print').fadeIn();
                $('#loader').hide();
                document.getElementById("print").innerHTML = data;
                document.getElementById("contact_frm").reset();
                $('#print').stop(true).delay(3000).fadeOut(300); 
               }
           });
           
       }
   
       
        
    });
 function check_name()
{
   var name= $('#first_name').val();
   if(name.length<3)
   {
       $('#n_error').html("Length should be greater than 3");
       $('#n_error').show();
       $('#n_error').stop(true).delay(2000).fadeOut(300);
       return false;
   }else
   {
       return true; 
   }
  
}
function check_mob()
{
  var mob=$('#mob').val(); 
  if(mob.length!==10)
  {
     $('#m_error').html("Length should be equal to 10");
     $('#m_error').show();
     $('#m_error').stop(true).delay(2000).fadeOut(300);
     return false; 
  }else
  {
     return true; 
  }
  
}
function check_email()
{
  var email=$('#email').val(); 
  var pattern=/^([a-zA-Z0-9._'])+@([a-zA-Z])+\.([a-zA-Z])/;
  if(!pattern.test(email))
  {
     $('#e_error').html("Enter valid email");
     $('#e_error').show();
     $('#e_error').stop(true).delay(2000).fadeOut(300);
     return false; 
  }else
  {
     return true; 
  }
   
}
function check_sex()
{
  var sex=$('#sex').val(); 
  
  if(sex=="")
  {
     $('#s_error').html("Select Gender");
     $('#s_error').show();
     $('#s_error').stop(true).delay(2000).fadeOut(300);
     return false; 
  }else
  {
      return true; 
  }
  
}
function check_message()
{
    var m=$('#message').val(); 
    if(m=="")
    {
     $('#t_error').html("Write reason to contact me.");
     $('#t_error').show();
     $('#t_error').stop(true).delay(2000).fadeOut(300);
     return false;
    }else
    {
       return true; 
    }
    
}
   
});



$(document).ready(function () {
    $('#send1').click(function (event) {
        var x = document.getElementById("email1").value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
        {
            event.preventDefault();
            $('#print3').fadeIn();
            document.getElementById("print3").innerHTML = "Not a valid email address.";
            $('#print3').delay(3000).fadeOut('slow');
        } else {
            event.preventDefault();
            $('#loader1').show();

            $.ajax({
                type: 'post',
                url: 'cv_download.php',
                data: {email1: $('#email1').val()},
                success: function (data)
                {   
                   // $('#print3').fadeIn();
                    $('#loader1').hide();
                    $('#cv_download').delay(5000).hide();
                    $('#leg_head').hide();
                    document.getElementById("print3").innerHTML = data;
                    //$('#print3').delay(5000).fadeOut('slow');
                    //window.location.href='demo.php';
                }

            });




        }
    });
});

