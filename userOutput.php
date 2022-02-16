<?php
    session_start();
    if(empty($_SESSION['$registration_num']) )
{
    header("location:login.php"); 
}
 ?>
<?php    include 'external/_dbconnect.php';   ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uiversity of North Bengal</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
  -->
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );

  </script>
  </head>
  <body>
      
  <?php
 //when user is sucessfully logged in
 $log=$_SESSION['loggedin'];
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
if(!$loggedin){   //not logged in.
        echo '
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/login.php">LogIn</a>
        </li>';

      }
if($loggedin){  //when user is logged in
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


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered table-info" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sl. No.</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Degree</th>

      <th scope="col">Year of batch</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    <?php

     $sql ="SELECT registration.first_name, registration.last_name,registration.qualification, registration.passout_year,registration.email,registration.current_city FROM create_account INNER JOIN registration ON create_account.registration_num=registration.reg_no";
     $result = mysqli_query($conn, $sql);
           $num = mysqli_num_rows($result);
           //echo mysqli_num_rows($result); shows the total num of output fetched sucessfully
              if($num > 0){
                $a=1;
            while($row=mysqli_fetch_assoc($result))//returns associative array('' => , );
            {
     ?>
    <tr>
          <td><?php
           echo $a++;
          ?></td>
          <td><?php echo $row['first_name'] ?></td>
          <td><?php echo $row['last_name'] ?></td>
          <td><?php echo $row['qualification'] ?></td>

          <td><?php echo $row['passout_year'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['current_city'] ?></td>

   </tr>
 <?php }
} ?>
  </tbody>
</table>
      </div>
    </div>
  </body>
</html>
