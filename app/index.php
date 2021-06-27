<?php session_start(); ?>
<?php require_once "../service/users_service.php"; ?>

<?php

if(empty($_SESSION['Customer']))
{
	echo "<script>				
				document.location='Home.php';
			</script>";
}
?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dream Repair</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<style>
* {box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Dream Repair</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link"  href="index.php">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Service</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Dashboard_user.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Service_received.php">
            <i class="fa fa-fw fa-american-sign-language-interpreting"></i>
            <span class="nav-link-text">Service Received</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Edit_profile.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Edit profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Change_password.php">
            <i class="fa fa-fw fa-key"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="navbar.php">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1 style="text-align: center;">Request For a Service</h1>
          <h4>Choose your desired type of service</h4>
		  <!--<div class="dropdown">
			<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
			  Choose Prefered Service
			</button>
			<div class="dropdown-menu">
			  <a class="dropdown-item" href="#">Television Servicing</a>
			  <a class="dropdown-item" href="#">Refrigerator Servicing</a>
			  <a class="dropdown-item" href="#">Air Conditioner Servicing</a>
			</div>
		  </div>-->
		  
			<!--<div class="col-xl-3 col-sm-6 mb-3">
			  <div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				  <div class="card-body-icon">
					<i class="fa fa-fw fa-comments"></i>
				  </div>
				  <div class="mr-5">26 New Messages!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				  <span class="float-left">View Details</span>
				  <span class="float-right">
					<i class="fa fa-angle-right"></i>
				  </span>
				</a>
			  </div>
			</div>-->
			
			<div class="card-columns">
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=Television">
				<div class="container">
				  <img src="images/tv.png" style="height:30%" alt="Avatar" class="image">
				  <div class="overlay">Television Servicing</div>
				</div>
				</a>
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=AC">
				<div class="container">
				  <img src="images/ac.png" style="height:30%" alt="Avatar" class="image">
				  <div class="overlay">AC Servicing</div>
				</div>
				</a>
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=Refrigerator">
				<div class="container">
				  <img src="images/refrigerator.png" style="height:30%" alt="Avatar" class="image">
				  <div class="overlay">Refrigerator Servicing</div>
				</div>
				</a>
				<br/>
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=Phone">
				<div class="container">
				  <img src="images/mobile.png" style="width:60%" alt="Avatar" class="image">
				  <div class="overlay">Phone Servicing</div>
				</div>
				</a>
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=Computer">
				<div class="container">
				  <img src="images/desktop.png" style="height:50%" alt="Avatar" class="image">
				  <div class="overlay">Computer Servicing</div>
				</div>
				</a>
				<br/>
				<br/>
				<a href="request_details.php?ServiceType=Others">
				<!--<div class="card" style="background-color:#DCDCDC">
				  <div class="card-body text-center">
				  <img src="images/tv.png" style="width:30%" class="rounded" alt="Cinque Terre">
					<p class="card-text">Television Servicing</p>
				  </div>
				</div>-->
				<div class="container">
				  <img src="images/others.png" style="height:30%" alt="Avatar" class="image">
				  <div class="overlay">Others</div>
				</div>
				</a>
			</div>
			
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Dream Repair 2019</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="Home.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>
<script>
if (sessionStorage.getItem("navbar")== "true") 
{
	$('nav').toggleClass('navbar-dark navbar-light');
    $('nav').toggleClass('bg-dark bg-light');
    $('body').toggleClass('bg-dark bg-light');
	  
}
</script>
</html>
