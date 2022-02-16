<?php
session_start();
$kl=0;
 ?>
<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "external/_dbconnect.php";

    $registration_num = $_POST["registration_num"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $kl=10;
    // $_SESSION['sign']=10;
    //checking whether registration_num exists
    $existsql = "SELECT * FROM `create_account` WHERE registration_num='$registration_num'";
    $result = mysqli_query($conn, $existsql); //fetching result from database
    $numexistrows = mysqli_num_rows($result);
    if($numexistrows > 0){
        //$exist = true; registration_num exists..
          $showerror =" registration_num already exist. Please try another.";

    }
    else{

        //$exist = false; registration_num doesnt exist but...
          if($password == $cpassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);//Verifies that the given hash matches the given password.
            $sql = "INSERT INTO `create_account` ( `registration_num`, `password`) VALUES ( '$registration_num','$hash')";
            //date insertion
            $result = mysqli_query($conn, $sql);
            if($result){
              $showalert = true;
            }
          }
          else{
            $showerror =" Passwords do not match. Try again.";
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign Up</title>
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
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" id="b">LogIn</a>
         </li>';
 
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
  if($showalert){
  echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
      <strong>SUCESS!</strong> You can proceed to registration now.
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



<div class="container">
<div class="card bg-light my-4">
	<article class="card-body mx-auto" style="max-width: 400px;">
		<h4 class="card-title mt-3 text-center">Create Account</h4>
		<p class="text-center">Get started with your free account</p>
		<p>
			<a href="#" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
			<a href="#" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
		</p>
		<p class="divider-text">
			<span class="bg-light">OR</span>
		</p>
		<form name="register" action="/ALUMNI_NEXUS/signup.php" onsubmit="return validateForm()" method="post"  >



    <div class="form-group input-group mb-3">
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="fa fa-university" aria-hidden="true"></i> </span>
       </div>
      <input name="registration_num" maxlength="16" id ="registration_num" class="form-control" placeholder="Registration Number" type="text" required>
    </div>


		<div class="form-group input-group mb-3">
			<div class="input-group mb-3">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" id="password" name="password" placeholder="Create password" type="password" required>
		</div>
		<div class="form-group input-group mb-3">
			<div class="input-group mb-3">
				<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
			</div>
			<input class="form-control" id="cpassword" name="cpassword"placeholder="Repeat password" type="password">
		</div>
		<div class="form-group mb-3 d-grid gap-2 col-6 mx-auto" id="button">
			<button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
		</div>
		<p class="text-center">Have an account?<a id="a">Log In</a> </p>
	</form>
	</article>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
  var kl="<?php echo $kl;?>";
  if(kl==10)
  {
  document.getElementById("a").href="/ALUMNI_NEXUS/login.php?$val=10"
  document.getElementById("b").href="/ALUMNI_NEXUS/login.php?$val=10"
  }
  else{
    document.getElementById("a").href="/ALUMNI_NEXUS/login.php?$val=0"
    document.getElementById("b").href="/ALUMNI_NEXUS/login.php?$val=0"
  }
  </script>
</body>

</html>
