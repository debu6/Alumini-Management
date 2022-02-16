<?php
session_start();
if(empty($_SESSION['$registration_num']) )
{
    header("location:login.php"); 
}
$vl=$_GET['$value'];
// print_r($vl);

?>


<?php
include "external/_dbconnect.php";
if($vl==1)
{
    $regis_no=$_SESSION['$registration_num'];
    // print_r($regis_no);
    $sql= "SELECT registration.* FROM registration WHERE  registration.reg_no='$regis_no'";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);

}
if($vl==2)
{
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include "external/_dbconnect.php";

        $first_name = $_POST['first-name'];
        $middle_name = $_POST['middle-name'];
        $last_name = $_POST['last-name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone-no'];
        $email = $_POST['email'];
        $caste = $_POST['caste'];
        $religious = $_POST['religious'];
        $pass_out = $_POST['pass-out-year'];
        $degree = $_POST['degree'];
        $cur_country = $_POST['current-country'];
        $cur_state = $_POST['current-state'];
        $cur_city = $_POST['current-city'];
        $cur_pincode = $_POST['pincode'];
        $per_country = $_POST['per-country'];
        $per_state = $_POST['per-state'];
        $per_city = $_POST['per-city'];
        $per_pincode = $_POST['per-pincode'];
        $profession = $_POST['profession'];
        $job_des = $_POST['job_des'];
        $salary = $_POST['salary'];

        $achiv = $_POST['achiv'];
        $image = $_FILES['image'];

        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];

        $image_tmp = $image['tmp_name'];
        $reg_no = $_SESSION['$registration_num'];

        $destinationFile = 'uploaded_Images/'.$image_name;
         move_uploaded_file($image_tmp,$destinationFile);


       $sql_insert = "INSERT INTO `registration`(`first_name`, `middle_name`, `last_name`, `DOB`, `gender`, `phone_no`,`email`, `caste`,`religious`,`reg_no`, `passout_year`, `qualification`, `current_country`, `current_state`, `current_city`, `cur_pincode`, `per-country`, `per-state`, `per-city`,
          `per-pincode`, `profession`,`job_description`,`salary`,`achiv`,`image`) VALUES  ('$first_name','$middle_name','$last_name','$dob','$gender','$phone','$email','$caste','$religious','$reg_no','$pass_out','$degree','$cur_country','$cur_state','$cur_city','$cur_pincode','$per_country','$per_state','$per_city',
            '$per_pincode','$profession','$job_des','$salary','$achiv','$destinationFile')";
        $result_insert = mysqli_query($conn,$sql_insert);

             $_SESSION['$first_name'] = $first_name;
             header("location: userDetailsNew.php");

      /* if($result_insert){
         echo "The record is sucessfully inserted. <br />";
       }
       else {
         echo "The record is not inserted.....".mysqli_error($conn);
       }
*/
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registerStyle.css">
    <title>test</title>

</head>
<body>



<nav class="navbar">
  <ul>
    <li> <div class="image"> </div> </li>
    <li><p style="font-size:30px;">ALUMNI NEXUS</p>  <span style="font-size:20px; padding-top:-5px;">University of North Bengal</span>  </li>
    <li> <a href="/ALUMNI_NEXUS/index.php" class="navli liHome" >Home</a></li>
    <li> <a href="/ALUMNI_NEXUS/logout.php" class="navli" style="color:blue;">Logout</a></li>
  </ul>
</nav>
<div id="heading">
          <h3 id="head">REGISTER HERE</h3>
</div>
<div class="container">
     <form id="form_id" onkeydown="return event.key != 'Enter';" method="POST" name="form-id" enctype="multipart/form-data"><br>

     <fieldset style="margin-left:2% ;margin-right: 2% ; padding-bottom : 10px;" >
                  <legend style="text-align: center; ">User Information</legend>

                        <div class="first">
                            <label for="">First Name :</label>
                            <input required type="text" name="first-name" id="first-name" class="input-box" placeholder=" First - name"><br>
                            <span class="error" id="error-firstname"> **  Error..................</span>
                        </div>
                        <div class="middle">
                        <label for="">Middle  Name :</label>
                          <input type="text" name="middle-name" id="middle-name"class="input-box" placeholder=" Middle - name "><br>
                          <span class="error" id="error-middleName"> ** Error..................</span>
                      </div>
                      <div class="last">
                      <label for="">Last Name :</label>
                        <input required type="text" name="last-name" id="last-name" class="input-box"placeholder=" Last - name "><br>
                        <span class="error" id="error-lastName"> ** Error..................</span>
                      </div>
                      <div class="dob">Date of Birth :</label>
                      <input required style="color: grey;" type="date" name="dob" id="birth" class="input-box"placeholder=" Date-of-Birth "><br>
                      <span class="error" id="error-dob" >  ** Error..................</span>
                  </div>

                  <div class="gender">
                  <label for="">Gender :</label>
                    <select required style="color: grey;" name="gender" class="input-box" id="gender-input" >
                      <option value="gender">Gender</option>
                      <option value="female">Female</option>
                      <option value="male">Male</option>
                      <option value="other">Other</option>
                    </select><br>
                    <span id="error-gender" class="error"> ** Error..................</span>
                  </div>
                  
                  <div class="caste">
                  <label for="">Caste :</label>
                    <select required style="color: grey;" name="caste" class="input-box" id="caste-input" >
                      <option value="gender">Caste</option>
                      <option value="OBC">OBC</option>
                      <option value="SC">SC</option>
                      <option value="IT">ST</option>
                      <option value="Other">Other</option>
                    </select><br>
                    <span id="error-caste" class="error"> ** Error..................</span>
                  </div>
                  <div class="religious">
                  <label for="">Religious :</label>
                    <input required type="text" name="religious" id="religious" class="input-box"placeholder=" Religious "><br>
                    <span class="error" id="religious-error"> ** Error..................</span>
                  </div> <br>
                  
                  <div class="phone">
                    <label for="">Phone number :</label>
                      <input required type="number" name="phone-no" id="phone-no" class="input-box"placeholder=" Phone - no "><br>
                      <span class="error" id="phone-error"> ** Error..................</span>
                    </div>
                 <!--   <div class="email">
                        <label for="">Email-Id :</label>
                          <p class="email_id"><?Php echo $_SESSION['email']; ?></p>
                          <span class="error" id="email-error">   ** Error..................</span>
                     </div>
-->
                  <div class="email">
                    <label for="">Email -Id :</label>
                      <input required type="text" name="email" id="email_id" class="input-box"placeholder=" Email-id "><br>
                      <span class="error" id="email-error"> ** Error..................</span>
                    </div>  

          </fieldset><br>


<fieldset style="margin-left:2% ;margin-right: 2% ;padding-bottom: 2%;" >
              <legend style="text-align: center; ">  Academic  Details</legend>
              <div class="registration">
              <label for="">Registration Number :</label>
                <p class="reg_no"> <?php echo $_SESSION['$registration_num']; ?></p>
                <span class="error" id="reg-error">   ** Error..................</span>
              </div>
              <div class="pass-out">
              <label for="">Pass-Out Year :</label>
                <input required type="number" name="pass-out-year" id="pass-out-year" class="input-box"placeholder=" Pass-Out Year "><br>
                <span class="error" id="pass-out"> ** Error..................</span>
              </div>
              <div class="empty">

              </div>
              <div class="degree">
                <p>Did you get any futher degree after MCA</p>
                <input required type="radio" value="yes" id="degree-yes" name="radioValue" onclick="show(0)" checked >YES
                <input required type="radio" value="no" id="degree-no" name="radioValue" onclick="show(1)"  >NO
                <p id="dError" class="error">Error</p>
              </div>
              <div class="description">
                <textarea name="degree" id="text-degrees" placeholder=" Your Degree "class="text"></textarea><br>
              <span class="error" id="error-degree" >*Error................</span>
              </div>
            </fieldset> <br>

<!------Address DEtails ----------------------->

<fieldset style="margin-left:2% ;margin-right: 2% ;" >
          <legend style="text-align: center; "> Address Details</legend>
          <p class="add">Current Address-</p>
          <div class="country" >
          <label for="">Country :</label>
             <select required style="color: grey;" name="current-country" id="cur-country" class="input-box"onchange="showAddress()">
                <option value="select">Current Country</option>
                <option value="India">India</option>
                <option value="Other">Other</option>
            </select><br>
                <span class="error" id="error-curCountry">*Error...........</span>
          </div>
          <div class="state">
          <label for="">State :</label>
            <select required style="color: grey;" name="current-state"class="input-box" id="cur-state">
                <option value="">Selcet State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharasthra">Maharasthra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Trhipura">Trhipura</option>
                <option value="Utter Pradesh">Utter Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Delhi">Delhi</option>
                <option value="Jammu Kashmir">Jammu Kashmir</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
            </select>
            <span class="error"> **Error</span>
        </div>
        <div class="city">
        <label for="">City :</label>
           <input required  type="text" name="current-city" id="cur-city" class="input-box" placeholder="current-city">
            <span class="error" id="error-city" >*Error............</span>
        </div>
        <div class="pincode"  >
        <label for="">Pincode :</label>
            <input required type="text" name="pincode" class="input-box" id="cur-pincode" placeholder="Pincode">
            <span class="error" id="error-pincode" >*Error............</span>
        </div>
         <div  style=" height:50px; margin-left:10px; margin-top:30px; width:800px; padding:0px;">
             <p class="add" style="display: inline;"> Is your Current Address And Permanent Address are same ?</p>
             <input  type="radio" value="yes" id="yesAddress" name="radioValue1" onclick="add()" >YES

             <span id="addError" style="color:red;">.</span>
         </div>
<!------ Permanent Address---->
       <div><p class="add">Parmanent Address-</p>
          <div class="country">
          <label for="">Country :</label>
            <select required style="color: grey;" name="per-country" id="per-country" class="input-box" onchange="showAddressPer()">
                <option value="select">Current Country</option>
                <option value="India">India</option>
                <option value="Other">Other</option>
            </select><br>
            <span class="error">*Error...........</span>
          </div>
          <div class="state">
          <label for="">State :</label>
            <select required style="color: grey;" name="per-state" class="input-box" id="per-state">
              <option value="">Selcet State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharasthra">Maharasthra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Trhipura">Trhipura</option>
                <option value="Utter Pradesh">Utter Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Delhi">Delhi</option>
                <option value="Jammu Kashmir">Jammu Kashmir</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
            </select>
            <span class="error"> **Error</span>
        </div>
        <div class="city">
        <label for="">City :</label>
            <input required type="text" name="per-city" class="input-box" id="per-city" placeholder="permanent-city">
            <span class="error" id="perCity-error" >*Error............</span>
        </div>
        <div class="pincode" >
        <label for="">Pincode :</label>
            <input required type="text"class="input-box" name="per-pincode" id="per-pincode" placeholder="Pincode">
            <span class="error" id="error-perPincode" >*Error............</span>
          </div>
        <div>
        </fieldset>  <br>
        <!------Professional  DEtails ------------------------>

        <fieldset style="margin-left:2% ;margin-right: 2%; padding-top:1%;padding-bottom: 1%;" >
            <legend style="text-align: center; "> Professional Details</legend>
            <div class="prof">
            <label for="">Current Profession :</label>
              <input required type="text" class="input-box" name="profession" id="profession" placeholder=" Current - Profession">
              <span class="error" id="prof-error">*Error............</span>
          </div>

          <div class="prof">
                  <label for="">Job Description  :</label>
                    <select required style="color: grey;" name="job_des" class="input-box" id="job-input" >
                      <option value="IT">IT</option>
                      <option value="ACADEMIC">Academic</option>
                      <option value="BUSSINESS">Business</option>
                      <option value="other">Other</option>
                    </select><br>
                <span id="job-gender" class="error"> ** Error..................</span>
            </div>
            
            <div class="prof">
            <label for="">Annual Package :</label>
              <input required type="text" class="input-box" name="salary" id="salary" placeholder="Annual Package">
              <span class="error" id="prof-error">*Error............</span>
          </div>
          <br><br><br>
          <div class="file-input ">
            <input required type="file" id="file-image" name="image"  >
            <span id="image-error" class="error"></span>
          </div><br>
          <div class="achiev">
            <p > Any Acheivments ?</p>
            <input required type="radio" name="achive" id="achiv-yes" onclick="showAchiev(0)" checked >YES
            <input required type="radio" name="achive" onclick="showAchiev(1)" id="achiv-no">NO
        </div>
        <div class="describ">
          <textarea name="achiv" class="text" id="achievment"placeholder=" Your Achievements" ></textarea>
          <span class="error" id="error-achiev">**Error...........</span>
        </div> <br> <br> <br>
      </fieldset>
        <br> <span class="error">Erro.......</span> <br><br>
        <button id="submit" name="submit" onclick="return val()" value="submit" style="margin-left:45%;" >Submit</button>
     </form>

</div>
<?php
if($vl==1)
{
    
    ?>
   <script>

    document.getElementById('form_id').action="update_1.php?$value=1"

    document.getElementById('head').innerHTML="UPDATE RECORD"
    document.getElementById('cur-country').value="<?php echo $row['current_country']  ?>"
    document.getElementById('cur-state').value="<?php echo $row['current_state']  ?>"
    document.getElementById('cur-city').value="<?php echo $row['current_city']  ?>"
    document.getElementById('cur-pincode').value="<?php echo $row['cur_pincode']  ?>"

    document.getElementById('per-country').value="<?php echo $row['per-country']  ?>"
    document.getElementById('per-state').value="<?php echo $row['per-state']  ?>"
    document.getElementById('per-city').value="<?php echo $row['per-city']  ?>"
    document.getElementById('per-pincode').value="<?php echo $row['per-pincode']  ?>"

    document.getElementById('profession').value="<?php echo $row['profession']  ?>"

    document.getElementById('first-name').value="<?php echo $row['first_name']; ?>"
    document.getElementById('middle-name').value="<?php echo $row['middle_name']; ?>"
    document.getElementById('last-name').value="<?php echo $row['last_name']; ?>"
    document.getElementById('birth').value="<?php echo $row['DOB'];?>"
    document.getElementById('gender-input').value="<?php echo $row['gender']; ?>"
    document.getElementById('caste-input').value="<?php echo $row['caste']; ?>"

    document.getElementById('religious').value="<?php echo $row['religious']; ?>"

    document.getElementById('salary').value="<?php echo $row['salary']; ?>"

    document.getElementById('job-input').value="<?php echo $row['job_description']; ?>"

    document.getElementById('phone-no').value="<?php echo $row['phone_no']; ?>"
    document.getElementById("email_id").value="<?php echo $row['email']; ?>"
    document.getElementById('pass-out-year').value="<?php echo $row['passout_year']; ?>"
    let dat=document.getElementById('text-degrees').value="<?php echo $row['qualification']; ?>"

    
    if(dat=='')
    {
        document.getElementById('degree-yes').checked=false;
        document.getElementById('degree-no').checked=true;
        document.getElementById("text-degrees").style.visibility ="hidden";
        document.getElementById("error-degree").style.visibility ="hidden";
    }
    let ach=document.getElementById('achievment').value="<?php echo $row['achiv']; ?>";
    console.log(ach);
    if(ach=='')
    {
        document.getElementById('achiv-yes').checked=false;
        document.getElementById('achiv-no').checked=true;
        document.getElementById("achievment").style.visibility ="hidden";

    }
    console.log("okkkk...");
   </script>
    <?php
}
?>
     <script >
        function val(){
            // First Name  validation..........................

            var i = document.getElementsByTagName("input");
            if(i[0].value == ""){
                document.getElementById("error-firstname").style.visibility="visible";
                document.getElementById("error-firstname").innerHTML = ` *Can't be empty...`;
                return(false);
            }else if(i[0].value.length >= 30){
                document.getElementById("error-firstname").style.visibility="visible";
                document.getElementById("error-firstname").innerHTML = ` * Character must be less than 30...`;
                return(false);
            } else if(i[0].value[0] == ""){
                document.getElementById("error-firstname").style.visibility="visible";
                document.getElementById("error-firstname").innerHTML = ` * Character must be less than 30...`;
                return(false);
            } else if(!(i[0].value.match(/^[A-Za-z]+$/))){
                    document.getElementById("error-firstname").style.visibility="visible";
                    document.getElementById("error-firstname").innerHTML = ` * Character sholud be letters only..`;
                    return(false);
            }else{
                document.getElementById("error-firstname").style.visibility="hidden";
            }

            if(i[2].value == ""){
                document.getElementById("error-lastName").style.visibility="visible";
                document.getElementById("error-lastName").innerHTML = ` *Can't be empty...`;
                return(false);
            }else if(i[2].value.length >= 30){
                document.getElementById("error-lastName").style.visibility="visible";
                document.getElementById("error-lastName").innerHTML = ` * Character must be less than 30...`;
                return(false);
            }else if(!(i[2].value.match(/^[A-Za-z]+$/))){
                document.getElementById("error-lastName").style.visibility="visible";
                document.getElementById("error-lastName").innerHTML = ` * Character sholud be letters only..`;
                return(false);
            }else{
                document.getElementById("error-lastName").style.visibility="hidden";
            }
        // date validation.....................................
            if(i[3].value == ''){
            document.getElementById("error-dob").style.visibility="visible";
            document.getElementById("error-dob").innerHTML = ` *Can't be empty...`;
            return(false);
            }else{
                document.getElementById("error-dob").style.visibility="hidden";
            }

        // gender validation...............

            var gender = document.getElementById("gender-input").selectedIndex;
            if(gender == 0){
            document.getElementById("error-gender").style.visibility="visible";
            document.getElementById("error-gender").innerHTML = ` *Can't be empty...`;
            return(false);
            }else{
                document.getElementById("error-gender").style.visibility="hidden";
            }

            // phone number validation.....................
       /*     if(i[4].value == ""){
                document.getElementById("phone-error").style.visibility="visible";
                document.getElementById("phone-error").innerHTML = ` *Can't be empty...`;
                return(false);
            }else if(isNaN(i[4].value)){
                document.getElementById("phone-error").style.visibility="visible";
                document.getElementById("phone-error").innerHTML = ` *Invalid number...`;
                return(false);
            }else if(i[4].value.length!= 10){
                document.getElementById("phone-error").style.visibility="visible";
                document.getElementById("phone-error").innerHTML = ` **Phone number should be of 10 digit...`;
                return(false);
            }else{
                document.getElementById("phone-error").style.visibility="hidden";
            }
*/
            // Registration validation.....................
            var reg = document.getElementById('reg-no').value;
            if(reg == ""){
                document.getElementById("reg-error").style.visibility="visible";
                document.getElementById("reg-error").innerHTML = ` *Can't be empty...`;
                return(false);
            }else if(isNaN(reg)){
                document.getElementById("reg-error").style.visibility="visible";
                document.getElementById("reg-error").innerHTML = ` *Invalid number...`;
                return(false);
            }else if(reg.length <10 || reg.length >15){
                document.getElementById("reg-error").style.visibility="visible";
                document.getElementById("reg-error").innerHTML = ` **Registration number should be of 10 digit...`;
                return(false);
            }else{
                document.getElementById("reg-error").style.visibility="hidden";
            }
        // Pass-out year validation.....................
            var  pass= document.getElementById('pass-out-year').value;
            var year = new Date().getFullYear();

            if(pass == ""){
                document.getElementById("pass-out").style.visibility="visible";
                document.getElementById("pass-out").innerHTML = ` *Can't be empty...`;
                return(false);
            }else if(pass.length!= 4){
                document.getElementById("pass-out").style.visibility="visible";
                document.getElementById("pass-out").innerHTML = ` **Invalid Year...`;
                return(false);
            }else if(pass > year ){
                document.getElementById("pass-out").style.visibility="visible";
                document.getElementById("pass-out").innerHTML = ` **Not possible...`;
                return(false);
            }else{
                document.getElementById("pass-out").style.visibility="hidden";
            }

        // Degree Validation..................

        /*    var a= document.getElementsByName('radioValue');
            if(a[0].ckecked){
                document.getElementById("dError").style.visibility="visible";
                document.getElementById("dError").innerHTML = ` ** Have to choose ...`;
            return(false);

          }else if(a[0].ckecked || !a[1].ckecked){
                document.getElementById("dError")="";
                document.getElementById("dError").style.visibility="hidden";
            }else{
                document.getElementById("dError").style.visibility="hidden";
            }
          */
        //Address validation............
        var curCountry = document.getElementById('cur-country').selectedIndex;
        if(curCountry == 0){
            document.getElementById("error-curCountry").style.visibility="visible";
            document.getElementById("error-curCountry").innerHTML = ` *Can't be empty...`;
            return(false);
        }else {
            document.getElementById("error-curCountry").style.visibility="hidden";
        }
        var curState = document.getElementById('cur-state').selectedIndex;
        if(curState == 0){
            document.getElementById("error-curState").innerHTML = ` *Can't be empty...`;
            document.getElementById("error-curState").style.visibility="visible";
            return(false);
        }else {
            document.getElementById("error-curCountry").style.visibility="hidden";
        }
        var curCity = document.getElementById('cur-city').value;
        if( curCity == ''){
            document.getElementById("error-city").style.visibility="visible";
            document.getElementById("error-city").innerHTML = ` *Can't be empty...`;
            return(false);
        }else{
                document.getElementById("error-city").style.visibility="hidden";
        }
        var pincode = document.getElementById('cur-pincode').value;
        if( pincode == ''){
            document.getElementById("error-pincode").style.visibility="visible";
            document.getElementById("error-pincode").innerHTML = ` *Can't be empty...`;
            return(false);
        }else{
                document.getElementById("error-pincode").style.visibility="hidden";
        }

        var City = document.getElementById('per-city').value;
        if( City == ''){
        document.getElementById("perCity-error").style.visibility="visible";
        document.getElementById("perCity-error").innerHTML = ` *Can't be empty...`;
        return(false);
        }else{
            document.getElementById("perCity-error").style.visibility="hidden";
        }
        var Perpincode = document.getElementById('per-pincode').value;
        if( Perpincode == ''){
        document.getElementById("error-perPincode").style.visibility="visible";
        document.getElementById("error-perPincode").innerHTML = ` *Can't be empty...`;
        return(false);
        }else{
            document.getElementById("error-perPincode").style.visibility="hidden";
        }
        // Profession VAlidation................

        var prof = document.getElementById('profession').value;
        if(prof == ""){
            document.getElementById("prof-error").style.visibility="visible";
            document.getElementById("prof-error").innerHTML = ` *Can't be empty...`;
            return(false);
        }else{
            document.getElementById("prof-error").style.visibility="hidden";
        }

        // Achievments validation............




        // image validation .....
        var image = document.getElementById('file-image').value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if(image == ""){
            document.getElementById("image-error").style.visibility="visible";
            document.getElementById("image-error").innerHTML = ` *Can't be empty...`;
            return(false);
        }else if(!allowedExtensions.exec(image)){
            document.getElementById("image-error").style.visibility="visible";
            document.getElementById("image-error").innerHTML = ` *Extension is not allowed...`;
            return(false);
        }else{
            document.getElementById("image-error").style.visibility="hidden";
        }




}
function show(x){
    if(x==0){
        document.getElementById("text-degrees").style.visibility ="visible";
    }else{
        document.getElementById("text-degrees").style.visibility ="hidden";
        document.getElementById("error-degree").style.visibility ="hidden";
        document.getElementById('text-degrees').value="";
    }
    return;
}
function add(){
    var country = document.getElementById('cur-country');
    var state = document.getElementById('cur-state').value;
    var  city = document.getElementById('cur-city').value;
    var pincode = document.getElementById('cur-pincode').value;

    if(   country.selectedIndex==0 && state =="" && city == "" && pincode == ""){
        document.getElementById('addError').visibility = "visible";
        document.getElementById('addError').innerHTML = "*Fillup the current address details....."
        return(false);
    }else{
        document.getElementById('addError').visibility = "hidden";
        document.getElementById('addError').innerHTML = ""
        document.getElementById('per-country').innerHTML= `<option>${country.value}</option>`;
        document.getElementById('per-state').innerHTML= `<option>${state}</option>`;
        document.getElementById('per-city').value= `${city}`;
        document.getElementById('per-pincode').value= `${pincode}`;
        console.log(country.value);
        console.log(city);
    }
    return;
}


function showAddress(){
            var country = document.getElementById('cur-country');
            if(country.value!= "India"){
                document.getElementById('cur-state').style.visibility ="hidden";
                document.getElementById('cur-city').style.visibility ="hidden";
                document.getElementById('cur-pincode').style.visibility ="hidden";
            }else{
                document.getElementById('cur-state').style.visibility ="visible";
                document.getElementById('cur-city').style.visibility ="visible";
                document.getElementById('cur-pincode').style.visibility ="visible";
            }
        }
function showAddressPer(){
    var countryper = document.getElementById('per-country');
    if(countryper.value!= "India"){
        document.getElementById('per-state').style.visibility ="hidden";
        document.getElementById('per-city').style.visibility ="hidden";
        document.getElementById('per-pincode').style.visibility ="hidden";
    }else{
        document.getElementById('per-state').style.visibility ="visible";
        document.getElementById('per-city').style.visibility ="visible";
        document.getElementById('per-pincode').style.visibility ="visible";
    }
}


function showAchiev(x){
    if(x==0){
        document.getElementById("achievment").style.visibility ="visible";
    }else{
        document.getElementById("achievment").style.visibility ="hidden";
        document.getElementById('achievment').value="";
    }
            if(document.getElementById('name').value==""){
               alert("Empty");
               return;
           }
 }

</script>
</body>
</html>
