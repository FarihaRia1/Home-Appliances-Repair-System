<!DOCTYPE html>
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

tr{cursor:pointer}
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
        
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            
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
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Choose Service Provider</h1>
		  <br/>
		  <button type="submit" class="btn btn-primary" onclick="window.location='request_server_filter_both.php';">Filter by Nearest</button>
		  <button type="submit" class="btn btn-danger float-right" onclick="window.location='request_server_filter_none.php';">Filter by Rating <span aria-hidden="true">&times;</span></button>
		  <p><br/></p>

      <div class="row text-center">

         <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

         <div class="col-lg-3 col-md-6 mb-4" onclick="window.location='request_server_details.php';">
          <div class="">
            <img class="card-img-top rounded-circle" src="images/robi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Robi Ullah</h4>
              <p class="card-text" style="color: green">All type of Skills </p>
                 <p class="card-text" style="color:blue">Experience: 3y</p>
              <p class="card-text">Dhaka</p>
              <p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      
                      
                    </p>  
            </div>
            
          </div>
        </div>

      

      

      </div>

		<!-- <table width="100%" class="table table-hover " id="dataTable">
			<thead class="table-primary">
			<tr>
				<td>Picture</td>
				<td>Name</td>
				<td>Address</td>
				<td>Phone no</td>
				<td>Rating</td>
			</tr>
			</thead>
			<tbody class="table-active">
			<tr onclick="window.location='request_server_details.php';">
				<td><img src="images/user_pic.png" style="width:50px" class="rounded-circle"></td>
				<td>John</td>
				<td>Uttara</td>
				<td>01911111111</td>
				<td>5</td>
			</tr>
			<tr onclick="window.location='request_server_details.php';">
				<td><img src="images/user_pic.png" style="width:50px" class="rounded-circle"></td>
				<td>John</td>
				<td>Uttara</td>
				<td>01911111111</td>
				<td>5</td>
			</tr>
			<tr onclick="window.location='request_server_details.php';">
				<td><img src="images/user_pic.png" style="width:50px" class="rounded-circle"></td>
				<td>John</td>
				<td>Uttara</td>
				<td>01911111111</td>
				<td>5</td>
			</tr>
			<tr onclick="window.location='request_server_details.php';">
				<td><img src="images/robi.jpg" style="width:50px" class="rounded-circle"></td>
				<td>Robi Ullah</td>
				<td>Kuril Bisshawroad, Bashundhara,Dhaka</td>
				<td>01911111111</td>
				<td>1</td>
			</tr>
			</tbody>
		</table> -->
		  
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
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
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
