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

<?php
	$desErr=false;
	if($_SERVER['REQUEST_METHOD']=="POST")
		{
			//echo "<br/><br/><br/><br/>";
			if(($_POST['address']!="")&&($_POST['description']!=""))
			{
				$_SESSION['request']['ServiceAddress']=$_POST['address'];
				//var_dump($_POST);
				$_SESSION['request']['ProblemDescription']=$_POST['description'];
				
				echo "<script>				
										document.location='request_server_filter_none.php';
									</script>";
			}
			else
				$desErr=true;
		}
	else
	{
		$_SESSION['request']['ServiceType']=$_GET['ServiceType'];
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
       
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
          </form>
        </li>
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
          <h1>Service Details</h1>
		  <br/>
		  <div class="card bg-light">
			  <div class="card-body text-center">
			  <?php
			  if($_SESSION['request']['ServiceType']=="Television"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/tv.png" style="width:5%" alt="Avatar" class="image"> <b>Television Servicing</b></p>
				<?php
			  } ?>
			  
			  <?php
			  if($_SESSION['request']['ServiceType']=="AC"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/ac.png" style="width:5%" alt="Avatar" class="image"> <b>AC Servicing</b></p>
				<?php
			  } ?>
			  
			  <?php
			  if($_SESSION['request']['ServiceType']=="Refrigerator"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/refrigerator.png" style="width:5%" alt="Avatar" class="image"> <b>Refrigerator Servicing</b></p>
				<?php
			  } ?>
			  
			  <?php
			  if($_SESSION['request']['ServiceType']=="Phone"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/mobile.png" style="width:5%" alt="Avatar" class="image"> <b>Phone Servicing</b></p>
				<?php
			  } ?>
			  
			  <?php
			  if($_SESSION['request']['ServiceType']=="Computer"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/desktop.png" style="width:5%" alt="Avatar" class="image"> <b>Computer Servicing</b></p>
				<?php
			  } ?>
			  
			  <?php
			  if($_SESSION['request']['ServiceType']=="Others"){ ?>
				<p class="card-text">Selected Service Type: <img src="images/others.png" style="width:5%" alt="Avatar" class="image"> <b>Others</b></p>
				<?php
			  } ?>
			  
			  
			  </div>
			</div>
		  <br/>
		  <br/>
		  <form method="post">
		  
			<label for="Address"><h3>Address</h3></label>
			<br/>
			<br/>
			  <div class="col-75">
			  <label for="Address">Address: </label>
			  <?php
				if($_SERVER['REQUEST_METHOD']=="POST")
				{
					if($_POST['address']!="")
					{
				?>
					<input name="address" value="<?=$_POST['address']?>"style="width:50%" required />
					<?php
					}
				}
			  
			  else
			  { 
		  ?>
				<input name="address" value="<?=$_SESSION['Customer']['Address']?>"style="width:50%" required />
				<?php
			  }
			  ?>
			  </div>
		  
			<br/>
				<label for="Description">Details About your desired service</label><?php
						if(($desErr)&&($_SERVER['REQUEST_METHOD']=="POST"))
							echo "<br/><font color=red>Description required</font>";
						
						?>
			  <div class="col-75">
				<textarea id="Description" name="description" placeholder="Write something.." style="height:150px;width:100%"></textarea>
			  </div>
			  
			  
			  
			  <br/>
			  <br/>
				<div class="form-row text-center">
					<div class="col-12">
						<input type="submit" class="btn btn-primary"  value="Confirm Request"/>
					</div>
				 </div>
			</form>
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
