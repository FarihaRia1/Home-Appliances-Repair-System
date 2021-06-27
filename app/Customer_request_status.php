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

	$request=requests_GetByID($_GET['Request']);
	$expert=users_GetByID($request['ExpertID']);
	
	
	if($request['ServiceType']=="Computer")
	{
		$pic="desktop";
	}
	else if($request['ServiceType']=="Television")
	{
		$pic="tv";
	}
	else if($request['ServiceType']=="AC")
	{
		$pic="ac";
	}
	else if($request['ServiceType']=="Mobile")
	{
		$pic="mobile";
	}
	else if($request['ServiceType']=="Refrigerator")
	{
		$pic="refrigerator";
	}
	else 
	{
		$pic="others";
	}
	$pr="Not Set";
	if(($request['Payment']!=null)&&($request['Payment']!="0"))
		$pr=$request['Payment'];
	
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		//var_dump($expert['ID']);
		if(isset($_POST['cancel']))
		{
			$request['Status']="Canceled";
		}
		else
		{
			$request['Status']="OnGoing";
		}
		requests_update($request);
		
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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<style>
td {text-align:center}

.hidden {
  display: none !important;
  visibility: hidden !important;
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
      <ul class="navbar-nav ml-auto">
        
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
             
              <span class="input-group-append">
                
              </span>
            </div>
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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-12">
		<table width="70%" class="center" style="margin: 0px auto;">
				<tr>
					<td colspan="2">
						  <img src="images/robi.jpg" style="width:12%" class="rounded-circle">
						  <h2><?=$expert['Name']?></h2>
						  <p><?=$expert['Address']?></p>
						  <br/>
						  <br/>
					</td>
				</tr>
				<tr>
					
					<td colspan="2" ><input type="button" class="btn btn-outline-primary" value="Show Phone No." onclick="change()" id="myButton1"/></td>
				</tr>
				<tr>
					<td colspan="2">
					<br/>
						<div class="card bg-light">
						  <div class="card-body text-center">
							<p class="card-text">Service Type: <img src="images/<?=$pic?>.png" style="width:5%" alt="Avatar" class="image"> <b><?=$request['ServiceType']?> Servicing</b> <input type="button" class="btn btn-outline-secondary " style="cursor:default" value="<?=$request['Status']?>" id="ConfirmButton"/></p>
						  </div>
						</div>
						<br/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
					<br/>
						<b>Problem Description</b><br/><br/>
						<i><?=$request['ProblemDescription']?></i>
					</td>
				</tr>
				<tr class="p">
					<td colspan="2" >
					<br/>
						<b>Payment Description</b><br/><br/>
						<i>Total Price: <?=$pr?></i>
					</td>
				</tr>
				<form method="post">
				<tr>
					<td colspan="2">
					<br/>
					<br/>
					<?php
					if($request['Status']=="Confirmed")
					{
						?>
						<input type="submit" name="accept" class="btn btn-primary" data-toggle="modal" data-target="" value="Accept"  id="ConfirmButton1"/>
					<?php  
					}
					?>
					
					<?php
					if($request['Status']!="OnGoing")
					{
						?>
						<button type="submit" name="cancel" class="btn btn-danger" id="cancelButton"  data-toggle="modal" data-target="">Cancel</button>
					<?php } ?>
					</td>
				</tr>
				</form>
				
			
		</table>
			
		  
		  <input type="submit" name="accept" class="btn btn-primary"  value="<?=$pr?>"  id="ConfirmButton4" hidden />
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
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>



<script>
function change()
{
    document.getElementById("myButton1").value="<?=$expert['PhoneNumber']?>"; 
}

function change2()
{
    if(document.getElementById("ConfirmButton").value=="Confirmed")
	{
		document.getElementById("ConfirmButton").value="On Going"; 
		$('#ConfirmButton').toggleClass('btn-outline-primary btn-outline-secondary');
		$("#ConfirmButton1").addClass('hidden');
		
	}
}


    if(document.getElementById("ConfirmButton").value=="Canceled")
	{
		
		$("#ConfirmButton1").addClass('hidden');
		$("#cancelButton").addClass('hidden');
	}
	
	if(document.getElementById("ConfirmButton").value=="Completed")
	{
		
		$("#ConfirmButton1").addClass('hidden');
		$("#cancelButton").addClass('hidden');
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
<script>
	if(document.getElementById("ConfirmButton4").value=="Not Set")
	{
		$("#ConfirmButton1").addClass('hidden');
		
	}
</script>

</html>
