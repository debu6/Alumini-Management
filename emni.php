<?php
include "external/_dbconnect.php";
	$id=$_GET['id'];
	$sql= "SELECT registration.*, create_account.* FROM create_account , registration WHERE (registration.reg_no=create_account.registration_num AND registration.reg_no='$id')";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>

<title>Basic MySQLi Commands</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" id="fontawesome-css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Italianno&family=Rozha+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- <h2>Edit</h2> -->
	<div class="modal-body">
	<form method="POST" action="update_1.php?id=<?php echo $id; ?>">
            <input type="hidden" name="slnoEdit" id="slnoEdit"> <!--targeting the node. (via button)-->
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">First Name</span>
                   </div>
                  <input name="firstnameEdit" maxlength="11" id ="firstnameEdit" value="<?php echo $row['first_name']; ?>" class="form-control" type="text" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Lastname</span>
                   </div>
                  <input name="lastnameEdit" value="<?php echo $row['last_name']; ?>" maxlength="11" id ="lastnameEdit" class="form-control" type="text" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Date Of birth</span>
                   </div>
                  <input name="dateofbirthEdit" value="<?php echo $row['DOB']; ?>"  id ="dateofbirthEdit" class="form-control" >
                </div>

                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Phone No.</span>
                   </div>
                  <input name="phone_noEdit" value="<?php echo $row['phone_no']; ?>" maxlength="12" id ="phone_noEdit" class="form-control"  type="text">
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Degree</span>
                   </div>
                  <input name="degreeEdit" value="<?php echo $row['qualification']; ?>" maxlength="16" id ="degreeEdit" class="form-control" type="text">
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Profession</span>
                   </div>
                  <input name="professionEdit" value="<?php echo $row['profession']; ?>" maxlength="16" id ="professionEdit" class="form-control"  type="text" >
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">Email</span>
                   </div>
                  <input name="emailEdit"value="<?php echo $row['email']; ?>" maxlength="16" id ="emailEdit" class="form-control"  type="email" >
                </div>
                <div class="form-group input-group mb-3">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping">City</span>
                   </div>
                  <input name="current_cityEdit" value="<?php echo $row['current_city']; ?>" maxlength="16" id ="current_cityEdit" class="form-control" type="text">
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
          </form>
</div>
<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
	<!-- <form method="POST" action="update_1.php?id=<?php echo $id; ?>">
		<label>Firstname:</label><input type="text" value="<?php echo $row['first_name']; ?>" name="first">
		<label>Lastname:</label><input type="text" value="<?php echo $row['last_name']; ?>" name="last">
		<input type="submit" name="submit">
		<!-- <a href="index.php">Back</a> -->
	</form> -->
</body>
</html>