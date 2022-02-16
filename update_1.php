<?php
session_start();
$vl=$_GET['$value'];
?>

<?php
include "external/_dbconnect.php";
if($vl==1)
{

        $reno=$_SESSION['$registration_num'];
        $first_name = $_POST['first-name'];
        $middle_name = $_POST['middle-name'];
        $last_name = $_POST['last-name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone-no'];
        $email = $_POST['email'];
        $caste = $_POST['caste'];
        $religious =$_POST['religious'];
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
        $job_des= $_POST['job_des'];
        $salary = $_POST['salary'];
        $achiv = $_POST['achiv'];
        $image = $_FILES['image'];

        $image_name = $image['name'];
        $image_tmp = $image['tmp_name'];

        $image_tmp = $image['tmp_name'];
        $destinationFile = 'uploaded_Images/'.$image_name;
         move_uploaded_file($image_tmp,$destinationFile);
         
        mysqli_query($conn,"update `registration` set first_name='$first_name',middle_name='$middle_name', last_name='$last_name', DOB='$dob', gender='$gender', phone_no='$phone',email='$email', caste='$caste', religious='$religious', passout_year='$pass_out', qualification='$degree', current_country='$cur_country', current_state='$cur_state', current_city='$cur_city', cur_pincode='$cur_pincode', profession='$profession',job_description='$job_des', salary='$salary', achiv='$achiv',image='$destinationFile' where reg_no='$reno'");
        

         header('location:userOutput.php');
}


?>