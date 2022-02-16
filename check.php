<script>
    console.log("Enter");
    document.getElementById('pf').style.visibility ="hidden";
    document.getElementById('pl').innerHTML="<?php echo $row['email']  ?>"
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

    document.getElementById('job-input').value="<?php echo $row['job_des']; ?>"

    document.getElementById('phone-no').value="<?php echo $row['phone_no']; ?>"
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
    if(ach=='')
    {
        document.getElementById('achiv-yes').checked=false;
        document.getElementById('achiv-no').checked=true;
        document.getElementById("achievment").style.visibility ="hidden";

    }
    </script>