<?php session_start(); ?>
<?php require_once "../service/users_service.php"; ?>
<?php require_once "../service/requests_service.php"; ?>

<?php

if(empty($_SESSION['Expert']))
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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="service_provider_requests.php">
            <i class="fa fa-fw fa-american-sign-language-interpreting"></i>
            <span class="nav-link-text">All Services</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Edit_profile_expert.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Edit profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="Change_password_expert.php">
            <i class="fa fa-fw fa-key"></i>
            <span class="nav-link-text">Change Password</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="navbar_expert.php">
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
      <section class="content">
					<h1>Requests</h1>
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="pull-right">
									<!--<div class="btn-group">
										<button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
										<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
										<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
										<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
									</div>-->
								</div>
								<div class="table-container" >
									<table class="table table-filter table-primary table-striped">
										<tbody>
											
											
										<?php
											$requests=requests_GetByExpertID($_SESSION['Expert']['ID']);
											foreach($requests as $request)
											{
												
												
												?>
												<tr onclick="window.location='sevice_provider_user_request_details.php?Request=<?=$request['RequestID']?>';" style="cursor:pointer">
												<td>
													<div class="media">
														<a href="#" class="pull-left">
															<img src="images/user_pic.png" width="100px" class="media-photo rounded-circle">
														</a>
														<div class="media-body" >
															
															<h4 class="title">
																&nbsp <?=users_GetByID($request['CustomerID'])['Name']?>
																
															</h4>
															<p class="summary"> &nbsp  &nbsp <?=$request['ServiceType']?> Problem</p>
														</div>
													</div>
												</td>
												<td>
												
												<?php
												if($request['Status']=="Confirmed"){ ?>
													<button type="button" style="cursor:default;" class="btn btn-primary btn-filter text-white" ><b>Confirmed</b></button>
													
												<?php }
													?>
													
												<?php
												if($request['Status']=="OnGoing"){ ?>
													<button type="button" style="cursor:default;" class="btn btn-secondary btn-filter text-white" ><b>OnGoing</b></button>
													
												<?php }
													?>
													
												<?php
												if($request['Status']=="Canceled"){ ?>
													<button type="button" style="cursor:default;" class="btn btn-danger btn-filter text-white" ><b>Canceled</b></button>
													
												<?php }
													?>
													
												<?php
												if($request['Status']=="Pending"){ ?>
													<button type="button" style="cursor:default;" class="btn btn-warning btn-filter text-white" ><b>Pending</b></button>
													
												<?php }
													?>
													
												<?php
												if($request['Status']=="Completed"){ ?>
													<button type="button" style="cursor:default;" class="btn btn-success btn-filter text-white" ><b>Completed</b></button>
													
												<?php }
													?>

												
												</td>
												<td>
													<span class="media-meta pull-right text-secondary"><?php  echo $request['RequestingDate']."<br/> (".dateDifference($request['RequestingDate'])." ago)"?></span>
												</td>
											</tr>
												
												
												
												
												<?php
											}
										
										?>
											
											
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
						
					</div>
				</section>
	
     
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
if (sessionStorage.getItem("navbar")== "true") 
{
	$('nav').toggleClass('navbar-dark navbar-light');
    $('nav').toggleClass('bg-dark bg-light');
    $('body').toggleClass('bg-dark bg-light');
	  
}
</script>

</html>
