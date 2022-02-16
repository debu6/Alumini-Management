<?php
        
        $sql = "select * from create_account where registration_num='$registration_num'";
        $result = mysqli_query($conn, $sql);// Performs a query on the database using the registration_num
        $num = mysqli_num_rows($result);  //gets the num of tuples or rows in the result
        $row12=mysqli_fetch_assoc($result);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon-32x32.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>LogIn</title>
  </head>
  <body>
  <?php require 'external/_nav.php' ?>
  <?php
  if($login){
  echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
      <strong>SUCESS!</strong> You are logged in now.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';}
  if($showerror){
  echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
      <strong>ERROR!</strong> '.$showerror.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';}
  ?>



<p><?php ?></p>
<div class="container">
<div class="card bg-light my-4">
	<article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Log Into Your Account</h4>
    <p class="divider-text bg-light mt-2">

    </p>
		<form action="/ALUMNI_NEXUS/login.php"  method="post">
		<div class="form-group input-group mb-3">
			<div class="input-group mb-3">
				<span class="input-group-text"><i class="fa fa-user"></i> </span>
			 </div>
			<input name="registration_num" maxlength="16" id ="registration_num" class="form-control" placeholder="Registration Number" type="text">
		</div>

		<div class="form-group input-group mb-3">
			<div class="input-group mb-3">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" id="password" name="password" placeholder="Password" type="password">
		</div>

		<div class="form-group input-group mb-3">
		<div class="form-group mb-3 d-grid gap-2 col-6 mx-auto" id="button">
			<button type="submit" class="btn btn-primary btn-block"> Log In  </button>
		</div>
    </div>
    <p class="text-center" id="content">Haven't an account? <a href="/ALUMNI_NEXUS/signup.php">Sign Up</a></p>

	</form>
	</article>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    

  </body>
</html>
