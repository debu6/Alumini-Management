<?php
  session_start();
  if(empty($_SESSION['$registration_num']) )
{
    header("location:login.php"); 
}

?>

<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="alumni_nexus";

    $conn = mysqli_connect($server, $username, $password,$database);

        $reg_no =$_SESSION['$registration_num'];
        $kl=$_SESSION['loggedin'] ;
        $query = "SELECT * FROM `registration` WHERE reg_no='$reg_no'";
        $query_run = mysqli_query($conn, $query);
        
        $loggedin=false;
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details | Registered User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/userDetails.css">
</head>
<body>
<?php
 //when user is sucessfully logged in
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']) == true){
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

        if($loggedin){   //When user is at home page and not logged in.
          echo '
          <li class="nav-item">
            <a class="nav-link active" value="1" aria-current="page" href="/ALUMNI_NEXUS/user_register.php?$value=1">Edit Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active"  aria-current="page" href="/ALUMNI_NEXUS/logout.php">LogOut</a>
          </li>';

        

      }
        if(!$loggedin){  //when user is logged in
          echo '
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/login.php">LogIn</a>
        </li>';
      }
      echo '
      </ul>
    </div>
  </div>
</nav>';
?>

    <?php
          if(mysqli_num_rows($query_run)>0)
              {
                 while($row = mysqli_fetch_array($query_run))
                    {
                      $achiv=$row['achiv'];
                      $degree=$row['qualification'];
                      
    ?>
    <div class="container" >
            <div class="leftside">
                <p class="headings">Personal Details :</p> 
                <span style="font-weight:600;"> Full Name :</span><span> <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></span><br>
                <span style="font-weight:600;">Date of Birth :</span><span> <?php echo $row['DOB']; ?></span><br>
                <span style="font-weight:600;">Sex :</span><span> <?php echo $row['gender']; ?></span> <br>
                <span style="font-weight:600;">Caste :</span><span> <?php echo $row['caste']; ?></span><br>
                <span style="font-weight:600;">Religious :</span><span> <?php echo $row['religious']; ?></span><br>
                <span style="font-weight:600;">Contact :</span><span> <?php echo $row['phone_no']; ?></span><br>
                <span style="font-weight:600;">Email :</span> <span> <?php echo $row['email']; ?></span> <br>
                <br>
                <p class="headings">Professional Details :</p> 
                <span style="font-weight:600;">Current Profession :</span><span> <?php echo $row['profession']; ?></span><br>
                <span style="font-weight:600;">Job Description :</span><span> <?php echo $row['job_description']; ?></span><br>
                <span style="font-weight:600;">Annual Package :</span><span> <?php echo $row['salary']; ?></span><br>
                <div style="width: 400px; height: 80px;" id="achievment"> <p style="font-weight:600;" > Career Achievements :</p> <span > <?php echo $row['achiv']; ?></span></div>
                <p class="headings">Current Address :</p>
                <span> <?php echo $row['current_city']; ?></span> <br>
                <span> <?php echo $row['current_state']; ?></span> <br>
                <span> <?php echo $row['cur_pincode']; ?></span> <br>
                <span> <?php echo $row['current_country']; ?></span>
            </div>
            
            <div class="rightside">
                <p class="headings">Academic Details :</p> 
                <div class="image">
                    <span> <img src=" <?php echo $row['image']; ?>" alt="Can't show"  width="150px" height="170px"></span><br>
                </div>
                    <span style="font-weight:600;"> Reg No : <?php echo $row['reg_no']; ?></span> <br> <br>
                    <span style="font-weight:600;">Year of Passing :</span><span> <?php echo $row['passout_year']; ?></span> <br>
                    <div style="width: 400px; height: 110px; " id="degree">   
                         <span style="font-weight:600;" id="degree">Further Any Degree : </span>  <span><?php echo $row['qualification']; ?></span>
                    </div>
                     <p class="headings">Parmanent Address :</p>
                    <span> <?php echo $row['per-city']; ?></span> <br>
                    <span> <?php echo $row['per-state']; ?></span> <br>
                    <span> <?php echo $row['per-pincode']; ?></span> <br>
                    <span> <?php echo $row['per-country']; ?></span>
                </div>
                <div style="height:50px"></div>

                <?php
            }
          }
        ?>

        </div>   
 <script>
   var achiv="<?php echo $achiv;?>";
   var degree="<?php echo $degree;?>";
  
   console.log(achiv);
   if(achiv=="")
   {
    
    document.getElementById("achievment").style.visibility ="hidden";
   }
   else{
    document.getElementById("achievment").style.visibility ="show";

   }
   if(degree=="")
   {
    
    document.getElementById("degree").style.visibility ="hidden";
   }
   else{
    document.getElementById("degree").style.visibility ="show";

   }




</script>
        
</body>
</html>