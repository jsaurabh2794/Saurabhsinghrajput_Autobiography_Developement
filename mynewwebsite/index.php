<?php
session_start();
$_SESSION['msg']="";
?>

<!DOCTYPE html>

<html >


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="saurabh.jpg" type="image/x-icon">
  <title>Saurabh Singh Rajput Welcomes you</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  </head>
  <body>
  
  
<!--        
   <nav>
    <div class="nav-wrapper" style="background-color:white">
      <a href="#" class="brand-logo" style="color:#27CFE7;font-size:30px;margin-left:25px">SAURABH</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="" style="color:black;font-size:18px;" >About Me</a></li>
        <li><a href="" style="color:black;font-size:18px;">Skills</a></li>
        <li><a href="" style="color:black;font-size:18px;">Curriculum Vitae</a></li>
		<li><a href="" style="color:black;font-size:18px;">Contact</a></li>
      </ul>
    </div>
  </nav> -->
  
  <nav class="white" role="navigation">
    <div class="nav-wrapper" style="background-color:white">
    <a id="logo-container" href="#" class="brand-logo" style="color:#27CFE7;font-size:30px;margin-left:20px">SAURABH</a>
      <ul   class="right hide-on-med-and-down">
        <li><a href="#about" class="smoothScroll" style="color:black;font-size:16px;" >ABOUT ME</a></li>
        <li><a href="#skill" style="color:black;font-size:16px;">SKILLS</a></li>
        <li><a href="#cv" style="color:black;font-size:16px;">CURRICULAM VITAE</a></li>
		<li><a href="#contact" style="color:black;font-size:16px;">CONTACT</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#about" style="color:black;font-size:16px;" >About Me</a></li>
        <li><a href="#skill" style="color:black;font-size:16px;">Skills</a></li>
        <li><a href="#cv" style="color:black;font-size:16px;">Curriculum Vitae</a></li>
		<li><a href="#contact" style="color:black;font-size:16px;">Contact</a></li>
      </ul>
     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
		
  <div  id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
       <div class="container">
			<br><br>
			<h1 class="header center teal-text text-lighten-2" style="font-size:bold"><span style="color:white">HI! I'M</span> SAURABH KUMAR</h1>
						<div class="row center">
								<h5 class="header col s12 light">A Student of Asansol Engineering College</h5>
						</div>
					<div class="row center">
					  <a href="#contact" id="download-button" class="btn-large waves-effect waves-light teal lighten-1"><i class="material-icons right">work</i>Hire Me</a>
					</div>
			<br><br>

       </div>
    </div>
    <div class="parallax" style="opacity: 0.8; filter: alpha(opacity=40); " ><img src="front_pic.jpg"   ></div>
  </div>
  

	<div class="container">
    <div class="section">

      <!--   about section  -->
      <div class="row" id="about">
        <div class="col s12 m4">
          <div class="icon-block" style="width:auto">
            <h2 class="center brown-text"><i class="material-icons">info_outline</i></h2>
            <h5 class="center">Introduction</h5>

            <p class="light" class="center" style="text-align:justify">This is Saurabh Kumar(Saurabh Singh Rajput). I am pursuing B.Tech course from Asansol Engineering College,Asansol. Now coming to my experiences.I know some coding in languages like C,C++,Java etc. I have also some ideas about how to create webpages,how we design webpages using css(Cascading Style Sheet). I have also used php,javascripts,jquery,sql etc to design a web application.</div>
        </div>

        <div class="col s12 m4">
					  <div class="icon-block">
						<h2 class="center brown-text"><i class="material-icons" style="color:">perm_identity </i></h2>
						<h5 class="center">Me</h5>
						<h5 class="center"><div style="border-radius:5px  black;"><img class="materialboxed" src="saurabh.jpg" width="100%"><div></h5>
					  </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block" style="margin-left:20px">
            <h2 class="center brown-text"><i class="material-icons">person_pin</i></h2>
            <h5 class="center">Personal Information</h5>

            
							<div class="center">
								<p class="light"><span class="light">Name :</span> <span style="color:blue">Saurabh Kumar<span></p>
								<p class="light"><span class="light">Age :</span> <span style="color:blue">23 Yrs.<span></p>
								<p class="light"><span class="light">Phone :</span><span style="color:blue"> +91-9851066082<span></p>
								<p class="light"><span class="light">Email :</span> <span style="color:blue">jsaurabh2794@gmail.com<span></p>
								<p class="light"><span class="light">Address :</span><span style="color:blue"> Asansol,WB<span></p>
							</div>
			
          </div>
        </div>
      </div>

    </div>
  </div>
   <!--   about section end  -->
  
   <!--   Skill section start -->
  <div  id="skill" class="parallax-container">
    <div class="section no-pad-bot">
       <div class="container">
			<br><br>
			<h1 class="header center teal-text text-lighten-2" style="font-size:bold"><span style="color:white">THIS IS MY</span> SKILLS</h1>
						<div class="row center" style="margin-top:50px">
								<h5 class="header col s12 light">See Carefully</h5>
						</div>
					
			<br><br>

       </div>
    </div>
    <div class="parallax" style="opacity: 0.8; filter: alpha(opacity=40); " ><img src="middle_img.jpg"   ></div>
  </div>
	 <!--   skill section end -->					
	 <!--   cv section  -->
	<div class="section white"  id="cv">
   	<div class="container">
    <div class="section">
               <div class="row">
							<div class="col s12 m4">
							<div class="card" style="hight:1850px;width:250px">
								<div class="card-image waves-effect waves-block waves-light">
								  <img class="activator" src="college-degree.jpg">
								</div>
								<div class="card-content">
								  <span class="card-title activator grey-text text-darken-4">Secondary<i class="material-icons right">more_vert</i></span>
								  
								</div>
								<div class="card-reveal">
								  <span class="card-title grey-text text-darken-4">Secondary(2008-2009)<i class="material-icons right">close</i></span>
								  <p>I have completed my secondary education from B.B.Collegiate Muzafferpur, Bihar. </p>
								</div>
								</div>
							  </div>
				  
				  
						  <div class="col s12 m4" >
						  <div class="card" style="hight:1850px;width:250px">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="college-degree.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Sr. Secondary<i class="material-icons right">more_vert</i></span>
							  
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Higher Secondary(2009-2011)<i class="material-icons right">close</i></span>
							  <p>I have completed my Higher secondary education from L.S.College Muzafferpur, Bihar.</p>
							</div>
						  </div>
						  </div>

						  <div class="col s12 m4">
						  <div class="card" style="hight:1850px;width:250px">
							<div class="card-image waves-effect waves-block waves-light">
							  <img class="activator" src="college-degree.jpg">
							</div>
							<div class="card-content">
							  <span class="card-title activator grey-text text-darken-4">Graduation<i class="material-icons right">more_vert</i></span>
							  
							</div>
							<div class="card-reveal">
							  <span class="card-title grey-text text-darken-4">Graduation(2013-2017)<i class="material-icons right">close</i></span>
							  <p>Currently, I am pursuing my graduation(Technical) degree from Asansol Enginering College,Asansol.</p>
							</div>
						  </div>
						  </div>
			 </div>
			</div>
		</div>
	 <div class="row container">
     <div class="center"><a class="waves-effect waves-light btn-large"><i class="material-icons right">play_for_work</i>Download My Curriculum Vitae</a></div>     
	</div>
    </div>	
			
	 <!--   cv section end  -->
	
	 <!--   Contact  section start-->
 
		<div class="row" style="background:url('middle_img.jpg');padding:20px;opacity: 0.8; filter: alpha(opacity=40);" id="contact">
		
		<div class="col s12 m6">
			
			<div class="col s12 m6">
				<h5 style="color:white;">Find Me</h5>
			</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8876224840824!2d86.9489577144362!3d23.71570679601883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f71f28112dc85f%3A0xc2814fdb4c367784!2sAsansol+Engineering+College!5e0!3m2!1sen!2sin!4v1460554615509" width="630" height="530" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			
			
			<div class="col s12 m6" style="overflow:hidden">
			
			<div class="col s12 m6">
				<h5 style="color:white;">Contact</h5>
			</div>
			<form method="post" action="action.php" class="col s12">
			    <div class="row">
					<div class="input-field col s6">
					<i class="material-icons prefix">account_circle</i>
						<input id="first_name" name="first_name" type="text" class="validate" required>
						<label for="first_name">Full Name</label>
					</div>
					
					<div class="input-field col s6">
					 <i class="material-icons prefix">stay_current_portrait</i>
						<input id="contact" name="mob" type="text" required pattern="\d{10}" class="validate">
						<label for="contact">Mobile</label>
					</div>
			    </div>
			  
				<div class="row">
					<div class="input-field col s12">
					<i class="material-icons prefix">email</i>
						<input id="email" name="email" type="email" class="validate" required>
						<label for="email">Email</label>
					</div>
				</div>
				
				<div class="row">
				<div class="input-field col s12">
				    <i class="material-icons prefix">perm_identity</i>
					<select id="sex"   type="select"  class="validate"  name="sex">
					  
					  <option value="" disabled selected></option>
					  <option value="male">Male</option>
					  <option value="female">Female</option>
					 
					</select>
					<label for="sex" >Sex</label>
				</div>		
				</div>
		
			    <div class="row">
					<div class="input-field col s12">
					<i class="material-icons prefix">mode_edit</i>
						<textarea id="msg" name="message"class="materialize-textarea" length="120"></textarea>
						<label for="msg">Reason for Contacting Me</label>
					</div>
				</div>
				
				<div class="row" style="text-align:center">
					<button class="btn-large waves-effect waves-light" type="submit" name="sub">Drop
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
			<h5 style="color:white;"><?php echo $_SESSION['msg']; ?></h5>
			</div>
			
		</div>

	
	 <!--   contact section end  -->					
						
						
						
						
						<footer class="page-footer">
						 <div class="footer-copyright">
							<div class="container">
							Copyright © 2016 Saurabh Singh Rajput. All Rights Reserved.All other trademarks and copyrights are the property of their respective holders.
                            Design and Developed by Saurabh Singh Rajput.
							
							</div>
						  </div>
						</footer>
						  
  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
 	  <script type="text/javascript" src="js/init.js"></script>
  </body>
</html>
