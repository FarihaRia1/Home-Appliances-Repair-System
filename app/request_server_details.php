<?php session_start(); ?>
<?php require_once "../service/users_service.php"; ?>
<?php require_once "../service/requests_service.php"; ?>

<?php

if(empty($_SESSION['Customer']))
{
	echo "<script>				
				document.location='Home.php';
			</script>";
}

	$expert=users_GetByID($_GET['ExpertID']);
	
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		//var_dump($expert['ID']);
		$_SESSION['request']['ExpertID']=$expert['ID'];
		$_SESSION['request']['CustomerID']=$_SESSION['Customer']['ID'];
		requests_insert($_SESSION['request']);
		echo "<script>				
				document.location='Dashboard_user.php';
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
td {text-align:center}
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
      
      <div class="row">
        <div class="col-12">
		<form method="post">
		<table width="70%" class="center" style="margin: 0px auto;" >
				<tr>
					<td colspan="3">
						  <img src="images/user_pic.png" style="width:12%" class="rounded-circle">
						  <h2><?=$expert['Name']?></h2>
						  <p><?=$expert['Address']?></p>
						  <br/>
						  <br/>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<div style="margin: 0px auto;width:50%" class="card bg-secondary text-white">
						<b>Rating</b>
						<p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      </p>  
					  
						</div>
						<br/>
						<br/>
					</td>
					<td width="33%">
						<div style="margin: 0px auto;width:60%" class="card bg-secondary text-white">
						<b>Experience</b>
						<p><?=dateDifference($expert['SignInDate'])?></p>
						</div>
						<br/>
						<br/>
					</td>
					<td >
						<div style="margin: 0px auto;width:65%" class="card bg-secondary text-white">
						<b>Completed Services</b>
						<p><?=sizeof(requests_GetByExpertIDCompleted($expert['ID']))?></p>
						</div>
						<br/>
						<br/>
					</td>
					
					
				</tr>
				<tr>
					<td colspan="3" ><input type="button" class="btn btn-outline-primary" value="Show Phone No." onclick="change()" id="myButton1"/></td>
				</tr>
				<tr>
					<td colspan="3">
					<br/>
					<br/>
						<i>*<?=$expert['MinimumPayment']?> taka must be paid if confirmed to hire</i>
					</td>
				</tr>
				<tr>
					<td colspan="3">
					<br/>
					<br/>
						<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Confirm Request</button>
					</td>
				</tr>
		</table>
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
	<!--Message Modal-->
	<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
			<table width="100%">
				<tr>
					<td>To:<br/><br/><br/></td>
					<td ><button type="submit" class="btn float-left" style="cursor:default;">Robi Ullah</button><br/><br/><br/></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td><textarea id="message" name="message" style="width:100%;height:100px" placeholder="Write something.." ></textarea></td>
				</tr>
			</table>
				
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" onclick="" data-dismiss="modal" data-toggle="modal" data-target="#successfulModal">Send</button>
          </div>
        </div>
      </div>
    </div>
	<!-- Successful Modal-->
    <div class="modal fade" id="successfulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Successful</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" style="margin: 0px auto;width:50%"><img src="images/ok.png" style="width:100%" class="rounded-circle"> </div>
          
        </div>
      </div>
    </div>
	<!-- Confirmed Modal-->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Request Confirmed</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" style="margin: 0px auto;width:50%"><img src="images/ok.png" style="width:100%" class="rounded-circle"> </div>
          
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
function change()
{
    document.getElementById("myButton1").value=<?=$expert['PhoneNumber']?>; 
}

$("#confirmModal").on("hidden.bs.modal", function () {
	setTimeout(func, 0);
	function func() 
	{
		window.location = 'index.php';
	}
});
</script>

<script>
if (sessionStorage.getItem("navbar")== "true") 
{
	$('nav').toggleClass('navbar-dark navbar-light');
    $('nav').toggleClass('bg-dark bg-light');
    $('body').toggleClass('bg-dark bg-light');
	  
}
</script>

</html>
