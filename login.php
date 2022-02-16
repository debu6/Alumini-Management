<?php
    session_start();
    error_reporting(0);
    $val=$_GET['$val'];
    $vall=$_POST['id'];
 ?>


<?php
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "external/_dbconnect.php";

    if(empty(trim($_POST["registration_num"]))){
      $username_err = "Please enter registration_num.";
  } else{
      $username = trim($_POST["registration_num"]);
  }
  
  // Check if password is empty
  if(empty(trim($_POST["password"]))){
      $password_err = "Please enter your password.";
  } else{
      $password = trim($_POST["password"]);
  }
  if(empty($username_err) && empty($password_err)){
    $registration_num = $_POST["registration_num"];
    $password = $_POST["password"];
    //  $sql = "select * from users where registration_num='$registration_num' AND password='$password'";
    
      $sql = "select * from create_account where registration_num='$registration_num'";//fetch the registration_num from database..
      $result = mysqli_query($conn, $sql);// Performs a query on the database using the registration_num
      $num = mysqli_num_rows($result);  //gets the num of tuples or rows in the result
      if($num==1)
      {
        while($row=mysqli_fetch_assoc($result)){ // Fetch a result row as an associative array
          if(password_verify($password,$row['password'])){ //verifying password against the hash;
          $login = true;
          $_SESSION['loggedin'] = true;
          
          $_SESSION['$registration_num'] = $registration_num;

          if($vall==0)
          {
            header("location: userOutput.php");
          }
          else{
            header('location: user_register.php?$value=2');
          }
    }
    else{
      $showerror =" Invalid credentials";
    }
  }
      }
}
}
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
  <?php
 //when user is sucessfully logged in
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     $loggedin = true;
   }
   else{
     $loggedin = false;
   }   //printing the nav bar as per as the user action
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a style="position: relative;" class="navbar-brand" href="#">
    <img src="images/nbu.png" alt="" width="60" height="60" style="position: absolute;"  class="d-inline-block align-text-top">
        <p style="margin-left: 65px;margin-top: 10px;" >ALUMINI NEXUS <br />
            University Of North Bengal</p>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="nav navbar">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/index.php">Home</a>
      </li>
      ';

        if(!$loggedin){   //When user is at home page and not logged in.
        echo '

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/signup.php">SignUp</a>
        </li>
       ';

      }
      if($loggedin){  //when user is logged in
    echo '
    <li class="nav-item">
      <a class="nav-link active"  aria-current="page" href="/ALUMNI_NEXUS/userOutput.php">LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active"  aria-current="page" href="/ALUMNI_NEXUS/logout.php">LogOut</a>
    </li>';
  }
  echo '
  </ul>
</div>
</div>
</nav>';
?>
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
    <input name="id" type="hidden" value="<?php echo $val;?>">
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
