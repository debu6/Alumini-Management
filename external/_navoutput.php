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
if($loggedin){   //not logged in.
        echo '
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/login.php">LogIn</a>
        </li>';

      }
if(!$loggedin){  //when user is logged in
        echo '
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="/ALUMNI_NEXUS/userDetailsNew.php">Your Profile</a>
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
