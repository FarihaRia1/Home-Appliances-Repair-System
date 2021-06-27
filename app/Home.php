<?php session_start(); ?>
<?php require_once "../service/users_service.php"; ?>

<?php


$_SESSION['Customer']=null;
$_SESSION['Expert']=null;
$_SESSION['Admin']=null;
?>


<?php 
	//echo "<br/><br/><br/><br/> hello";
	//var_dump($_SERVER);
	
				$emailErr=false;
				$passErr=false;
	if($_SERVER['REQUEST_METHOD']=="POST")
			{
				$emailErr=true;
				$users=users_GetAll();
				$email=trim($_POST['email']);
				$pass=trim($_POST['password']);
				//var_dump($email);
				//var_dump($pass);
				foreach($users as $user)
				{
					//var_dump($user);
					echo "<br/>";
					if($user['Email']==$email)
					{
						$emailErr=false;
						if($user['Password']==$pass)
						{
							if($user['Type']=="Customer")
							{
								$_SESSION['Customer']=$user;
								
								echo "<script>				
										document.location='index.php';
									</script>";
							}
							if($user['Type']=="Admin")
							{
								$_SESSION['Admin']=$user;
								
								echo "<script>				
										document.location='index.php';
									</script>";
							}
							if($user['Type']=="Expert")
							{
								$_SESSION['Expert']=$user;
								
								echo "<script>				
										document.location='Dashboard.php';
									</script>";
							}
						}
						else
							$passErr=true;
					}
				}
				if($emailErr || $passErr) {?>
					<script> 
						$(function() {
							$("#loginmodal").modal('show');//if you want you can have a timeout to hide the window after x seconds
							});
					</script>
					<?php
				}
				
			}
				
				
	?>


<html lang="en">
	<head>
		<!-- Theme Made By www.w3schools.com - No Copyright -->
		<title>Dream-Repair</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/topuhit/Font-Bangla@1.0.3/1.0.0/font-bangla.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
		</style>
	</head>
	
	
	
	
	
	
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
		
		<nav class="navbar navbar-default navbar-fixed-top" style="height: 80px;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="#myPage"><img src="images/Dream-Repair_logo.png" style="float:left;width:90px;height: 60px;"/></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li><a href="#signup1">REGISTRATION</a></li>
					<li><a href="#" data-toggle="modal" data-target="#loginmodal">LOGIN</a></li>
				  </ul>
				</div>
				
			</div>
		</nav>
		
		<div class="jumbotron text-center" style="margin-top: 50px">
			<!-- <h1 style="color: #0080ff">Dream-REPAIR</h1>  -->
			<p style="color:red"><img src="images/Dream-Repair_logo.png" style="float:center;height:200px;"/></p>
			<p>You name it We provide it</p> 
			<p style="color: #3b6be8">Our Services</p> 
			<div id="myCarouse9" class="carousel slide" data-ride="carousel">
					                        <!-- Indicators -->
						                        <!-- Wrapper for slides -->
		                        <div class="carousel-inner">
			  
			  
		                           <div class="item active">
                                      <div class="row">
		                                  <div class="col-sm-2">
		                                    <img src="images/ac.png" alt="Chicago" height="100" >
		                                  </div>
                                              <div class="col-sm-2">
		                                    <img src="images/desktop.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                    <img src="images/mobile.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                   <img src="images/refrigerator.png" alt="Chicago"  height="100">
		                                  </div>
                                              <div class="col-sm-2">
		                                	<img src="images/tv.png" alt="Chicago" height="100" >
		                                  </div>
		                                   <div class="col-sm-2">
		                                	<img src="images/others.png" alt="Chicago" height="100" >
		                                  </div>
                                 
                                        </div>
		                          </div>

		                          <div class="item">
                                       <div class="row">
                                       	 <div class="col-sm-2">
		                                	<img src="images/others.png" alt="Chicago" height="100" >
		                                  </div>
		                                  <div class="col-sm-2">
		                                    <img src="images/ac.png" alt="Chicago" height="100" >
		                                  </div>
                                              <div class="col-sm-2">
		                                    <img src="images/desktop.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                    <img src="images/mobile.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                   <img src="images/refrigerator.png" alt="Chicago"  height="100">
		                                  </div>
                                              <div class="col-sm-2">
		                                	<img src="images/tv.png" alt="Chicago" height="100" >
		                                  </div>
		                                  
                                 
                                        </div>
		                          </div>
		                          <div class="item">
                                      <div class="row">
                                      
                                              <div class="col-sm-2">
		                                	<img src="images/tv.png" alt="Chicago" height="100" >
		                                  </div>
                                       	 <div class="col-sm-2">
		                                	<img src="images/others.png" alt="Chicago" height="100" >
		                                  </div>
		                                  <div class="col-sm-2">
		                                    <img src="images/ac.png" alt="Chicago" height="100" >
		                                  </div>
                                              <div class="col-sm-2">
		                                    <img src="images/desktop.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                    <img src="images/mobile.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                   <img src="images/refrigerator.png" alt="Chicago"  height="100">
		                                  </div>
		                                  
                                 
                                        </div>
		                          </div>

		                           <div class="item">
                                      <div class="row">
                                      	
                                      	<div class="col-sm-2">
		                                   <img src="images/refrigerator.png" alt="Chicago"  height="100">
		                                  </div>
		                                  
                                              <div class="col-sm-2">
		                                	<img src="images/tv.png" alt="Chicago" height="100" >
		                                  </div>
                                       	 <div class="col-sm-2">
		                                	<img src="images/others.png" alt="Chicago" height="100" >
		                                  </div>
		                                  <div class="col-sm-2">
		                                    <img src="images/ac.png" alt="Chicago" height="100" >
		                                  </div>
                                              <div class="col-sm-2">
		                                    <img src="images/desktop.png" alt="Chicago" height="100" >
		                                  </div>
                                          <div class="col-sm-2">
		                                    <img src="images/mobile.png" alt="Chicago" height="100" >
		                                  </div>
                                          
                                 
                                        </div>
		                          </div>

		                         
			  
			                      </div>
                                     
			  
		                        </div>

                        <!-- Left and right controls -->
                       <!--  <a class="left carousel-control" href="#myCarouse9" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouse9" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span>
                        </a> -->
                  </div>
		</div>
		
		<!-- Container (About Section) -->
		<div id="about" class="container-fluid">
			<div class="row">
				<div class="col-sm-8">
					<h2>About Dream-Repair</h2><br>
					<h4>Dream-Repair.com is the ultimate online shopping destination for Bangladesh offering completely hassle-free shopping experience through secure and trusted gateways. We offer you trendy and reliable shopping with all your favorite brands and more.</h4><br>
					<br><a href="#contact" ><button class="btn btn-default btn-lg">Get in Touch</button></a>
				</div>
				<div class="col-sm-4">
					<span class="glyphicon glyphicon-signal logo"></span>
				</div>
			</div>
		</div>
		
		<div class="container-fluid bg-grey">
			<div class="row">
				<div class="col-sm-4">
					<!-- <span class="glyphicon glyphicon-globe logo slideanim"></span> -->
					<i class="fb-bangladesh-map slideanim" style="font-size:300px;color:#FF4500"></i>
				</div>
				<div class="col-sm-8">
					<h2>Our Values</h2><br>
					<h4><strong>MISSION:</strong> Our mission is to be the most successful company in the world at delivering the best customer experience we serve.</h4><br>
					<p><strong>VISION:</strong> Our vision is to be earth’s most customer-centric company; to build a place where people can come to find their suitable service.</p>
				</div>
			</div>
		</div>
		
	
		
		<h2 style="padding-left:50px">  What our customers say</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
				</div>
				<div class="item">
					<h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
				</div>
				<div class="item">
					<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
				</div>
			</div>
			
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	
	<!-- Container (Contact Section) -->
	<div id="contact" class="container-fluid bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<div class="row">
			<div  style="text-align:center">
				<p>Contact us and we'll get back to you within 24 hours.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> 22/11, Borobagh, Mirpur-2, Dhaka-1216</p>
				<p><span class="glyphicon glyphicon-phone"></span> +8801773050200</p>
				<p><span class="glyphicon glyphicon-envelope"></span> admin@Dream-Repair.com</p>
			</div>
			<!--<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	
	<!-- Add Google Maps -->
	<div id="signup1" style="height:100%;width:100%;">
		<br/>
		<br/>
		<iframe name="contentFrame" frameborder="0" width="100%" height="500" src="register.php"></iframe>

	</div>

	<footer class="container-fluid text-center" ">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Powered By Dream-Repair</p>
	</footer>
	
	<script>
		$(document).ready(function(){
			// Add smooth scrolling to all links in navbar + footer link
			$(".navbar a, footer a[href='#myPage']").on('click', function(event) {
				// Make sure this.hash has a value before overriding default behavior
				if (this.hash !== "") {
					// Prevent default anchor click behavior
					event.preventDefault();
					
					// Store hash
					var hash = this.hash;
					
					// Using jQuery's animate() method to add smooth page scroll
					// The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
					$('html, body').animate({
						scrollTop: $(hash).offset().top
						}, 900, function(){
						
						// Add hash (#) to URL when done scrolling (default click behavior)
						window.location.hash = hash;
					});
				} // End if
			});
			
			$(window).scroll(function() {
				$(".slideanim").each(function(){
					var pos = $(this).offset().top;
					
					var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
						$(this).addClass("slide");
					}
				});
			});
		})
	</script>
	
</body>
</html>


<div class="modal fade" id="loginmodal" role="dialog" style="padding-top:80px;">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="modal-body" >
					<form method="post">
		              <div class="form-label-group">
		              	<label for="inputEmail">Email address</label>
		                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
						<?php
						if(($emailErr)&&($_SERVER['REQUEST_METHOD']=="POST"))
							echo "<br/><font color=red>Email Not found</font>";
						
						?>
		                
		              </div>

		              <div class="form-label-group">
		              	<label for="inputPassword">Password</label>
		                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
						<?php
						if(($passErr)&&($_SERVER['REQUEST_METHOD']=="POST"))
							echo "<br/><font color=red>Wrong Password</font>";
						
						?>
		                
		              </div>
		              <br/>
					  <input class="btn btn-primary btn-block" type="submit" value="Login" />
		              <!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Sign in</button> -->
		              <hr class="my-4">
		              <div class="text-center">
		                <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a><br/> -->
		                
		              </div>
		            </form>
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>	
<?php
if($emailErr || $passErr) {?>
					<script> 
						$(function() {
							$("#loginmodal").modal('show');//if you want you can have a timeout to hide the window after x seconds
							});
					</script>
					<?php
				}
				
echo "<script>				
		document.location='#myPage';
	</script>";
				?>
				
				

