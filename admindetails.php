<?php
session_start();
if(empty($_SESSION['$id_num']) )
{
    header("location:adminlogin.php"); 
}
$server="localhost";
$username="root";
$password="";
$database="alumni_nexus";


$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if(!$conn){
  //echo "connected sucessfully";
//}
//else{
  die("Connection error".mysqli_connect_error());
}
if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
	$sql= "DELETE registration.*, create_account.* FROM create_account , registration WHERE (registration.reg_no=create_account.registration_num AND registration.reg_no='$id')";
	mysqli_query($conn, $sql);
}

if($_SERVER['REQUEST_METHOD']== 'POST'){
  if(isset($_POST['slnoEdit'])){
    $slno = $_POST["slnoEdit"];
    $firstname = $_POST["firstnameEdit"];
    $lastname = $_POST["lastnameEdit"];
    $dateofbirth = $_POST["dateofbirthEdit"];
    $phone_no = $_POST["phone_noEdit"];
    $degree = $_POST["degreeEdit"];
    $email=$_POST['emailEdit'];
    $profession = $_POST["professionEdit"];
    $city = $_POST["current_cityEdit"];
    $result1=mysqli_query($conn,"update `registration` set first_name='$firstname',last_name='$lastname',DOB='$dateofbirth',phone_no='$phone_no',qualification='$degree',profession='$profession',email='$email',current_city='$city' where reg_no='$slno'");
    // $result2=mysqli_query($conn,"update `create_account`set email='$email'where registration_num='$slno'");
    // if($result1 && $result2){
    //   echo "updated";
    //   }
    //   else {
    //     echo "not updated.";
    //   }
    }
  }


 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
          } );
    </script>
    <title>ADMIN CRUD</title>

  </head>
  <body >
    <!-- Button trigger modal -->
<!--  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
    Edit modal
  </button>-->

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Record Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form  action="admindetails.php" method="POST">
            <input type="hidden" name="slnoEdit" id="slnoEdit"> <!--targeting the node. (via button)-->
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">First Name</span>
                   </div>
                  <input name="firstnameEdit" maxlength="11" id ="firstnameEdit" class="form-control" type="text" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Lastname</span>
                   </div>
                  <input name="lastnameEdit" maxlength="11" id ="lastnameEdit" class="form-control" type="text" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Date Of birth</span>
                   </div>
                  <input name="dateofbirthEdit"  id ="dateofbirthEdit" class="form-control" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Phone No.</span>
                   </div>
                  <input name="phone_noEdit" maxlength="12" id ="phone_noEdit" class="form-control"  type="text">
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Degree</span>
                   </div>
                  <input name="degreeEdit" maxlength="16" id ="degreeEdit" class="form-control" type="text">
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Profession</span>
                   </div>
                  <input name="professionEdit" maxlength="16" id ="professionEdit" class="form-control"  type="text" >
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Email</span>
                   </div>
                  <input name="emailEdit" maxlength="16" id ="emailEdit" class="form-control"  type="email" >
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">City</span>
                   </div>
                  <input name="current_cityEdit" maxlength="16" id ="current_cityEdit" class="form-control" type="text">
                </div>
                <button type="submit" name="button" class="btn btn-primary">Update Record</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
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

        if($loggedin){   
        echo '
        <li class="nav-item">
          <a class="nav-link active"  aria-current="page" href="/ALUMNI_NEXUS/adminlogout.php">LogOut</a>
        </li>';

      }
        if(!$loggedin){  
          echo '

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/admin.php">SignUp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/ALUMNI_NEXUS/adminlogin.php">LogIn</a>
          </li>';
      }
      echo '
      </ul>
    </div>
  </div>
</nav>';
?>
      <div class="container-fluid"  >
        <div class="card-body" >
          <div class="table-responsive" >
            <table class="table resonsive table-lg table-hover table-bordered table-info"  id="myTable" style="font-size:15px" >

      <thead >
        <tr>
          <th scope="col">Sl. No.</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Phone No.</th>
          <th scope="col">Registration Num</th>
          <th scope="col">Year of batch</th>
          <th scope="col">Degree</th>
          <th scope="col">Profession</th>
          <th scope="col">Email</th>
          <th scope="col">City</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

         $sql= "SELECT registration.*, create_account.* FROM create_account , registration WHERE registration.reg_no=create_account.registration_num";
         $result = mysqli_query($conn, $sql);
               $num = mysqli_num_rows($result);
               //echo mysqli_num_rows($result); shows the total num of output fetched sucessfully
                  if($num > 0){
                    $slno=0;
                while($row=mysqli_fetch_assoc($result))//returns associative array('' => , );
                {
                  $slno=$slno+1;
                  // print_r($row);
         ?>
        <tr>
              <td><?php echo $slno?></td>
              <td><?php echo $row['first_name'] ?></td>
              <td><?php echo $row['last_name'] ?></td>
              <td><?php echo $row['DOB'] ?></td>
              <td><?php echo $row['phone_no'] ?></td>
              <td><?php echo $row['reg_no'] ?></td>
              <td><?php echo $row['passout_year'] ?></td>
              <td><?php echo $row['qualification'] ?></td>
              <td><?php echo $row['profession'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['current_city'] ?></td>
              <td><?php echo "
              <button class='edit btn btn-sm btn-primary' id=".$row['reg_no'].">Edit</button>
              <button class='delete btn btn-sm btn-danger' id=".$row['reg_no'].">Delete</button>
              "?></td>

       </tr>
     <?php }

    } ?>
  </tbody>
    </table>
          </div>
        </div>
        <hr>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
      edits = document.getElementsByClassName('edit');
      deletes=document.getElementsByClassName('delete'); //get all the editable data on edits
      Array.from(edits).forEach((element, i) => {  // creating an array of all editable event
        element.addEventListener("click",(e) =>{ //and adding an event listener on each editable data by clickable addEventListener
          console.log("edit", );
          tr = e.target.parentNode.parentNode;//on clicking the edit btn its going to select the t-row by rollback through parent nodes for editing.
          firstname= tr.getElementsByTagName("td")[1].innerText;//The getElementsByTagName() method returns a collection of an elements's child elements with the specified tag name, as a NodeList object.
          lastname= tr.getElementsByTagName("td")[2].innerText;//The NodeList object represents a collection of nodes. The nodes can be accessed by index numbers. The index starts at 0.
          dateofbirth= tr.getElementsByTagName("td")[3].innerText;
          phoneno= tr.getElementsByTagName("td")[4].innerText;
          degree= tr.getElementsByTagName("td")[7].innerText;
          profession= tr.getElementsByTagName("td")[8].innerText;
          email= tr.getElementsByTagName("td")[9].innerText;
          city= tr.getElementsByTagName("td")[10].innerText;
          console.log(firstname,lastname,dateofbirth,phoneno,degree,profession,email,city);
          firstnameEdit.value = firstname;
          lastnameEdit.value = lastname;
          dateofbirthEdit.value = dateofbirth;
          phone_noEdit.value = phoneno;
          degreeEdit.value = degree;
          professionEdit.value = profession;
          emailEdit.value = email;
          current_cityEdit.value = city;
          slnoEdit.value = e.target.id; //e.target is the button targeting the nodes now gets through the slno
          console.log(e.target.id);//fetching the slno on console through the id
          $('#editModal').modal('show');
        })
      })
      Array.from(deletes).forEach((element,i)=>{
        element.addEventListener("click",(e) =>{
          console.log("delete", );
          no=e.target.id;
          console.log(no);
          if(confirm("Are You sure to delete the content ?"))
          {
            console.log("yes");
            window.location.href=`admindetails.php?delete=${no}`;
          }
          else{
            console.log("no");
          }
        })


      })

    </script>
  </body>
</html>
