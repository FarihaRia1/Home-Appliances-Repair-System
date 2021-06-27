<?php session_start(); ?>
<?php require_once "../service/users_service.php"; ?>


<?php
	$emailErr=false;
	$passErr=false;
	$reg=false;
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(isUniqueEmail($_POST['email']))
		{
			if($_POST['pass']==$_POST['cpass'])
			{
				$Customer['Name']=$_POST['name'];
				$Customer['Email']=$_POST['email'];
				$Customer['Password']=$_POST['pass'];
				$Customer['Type']="Customer";
				users_Insert($Customer);
				$reg=true;
			}
			else
				$passErr=true;
		}
		else
			$emailErr=true;
		
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

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
			  <?php if($reg) { echo "<font color=green><b>Registration Successful !! Please Login.</b></font><br/>";  } ?>
                <label for="exampleInputName">Name</label>
                <input class="form-control" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
              </div>
              <!-- <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div> -->
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
			<?php if($emailErr) { echo "<br/><font color=red>Email Already Exist</font>";  } ?>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" name="pass" placeholder="Password" required>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name="cpass" placeholder="Confirm password" required>
				<?php if($passErr) { echo "<br/><font color=red>Password doesn't Match</font>";  } ?>
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Register" />
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
