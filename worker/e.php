<?php
include 'config.php';
$wor_name=$_POST['wor_name'];
        $wor_gender=$_POST['wor_gender'];
        $wor_email=$_POST['wor_email'];
        $wor_password=$_POST['wor_password'];
        $wor_contact=$_POST['wor_contact'];
        $wor_address=$_POST['wor_address'];
        $wor_city=$_POST['city'];
        $wor_area=$_POST['area'];
        $wor_exp=$_POST['wor_exp'];
        $skill_list=$_POST["specialities"];
        $wor_aadhaar=$_POST['wor_aadhaar'];
        $identity_doc = "identity_doc/";  
        $identity_doc = $identity_doc.basename($_FILES['identity_doc']['name']);
        $target_path = "uploads/";  
        $target_path = $target_path.basename($_FILES['file_image']['name']); 
        //$target_path=implode(',',$_FILES['file_image']['name']);
        $description=$_POST['description'];
        $visit_charges=$_POST['visit_charges'];	
        //var_dump($target_path);
        //var_dump($_FILES);
        $q = "SELECT * FROM worker_master WHERE wor_email= '".$wor_email."'";
        $result = mysqli_query($conn, $q);
        if($row = mysqli_fetch_assoc($result))
        {
            echo '<script type="text/javascript">alert("Data Already Exist"); window.location.href = "signup_worker.php";</script>;';
        }
        else
        {
            if(move_uploaded_file($_FILES['file_image']['tmp_name'], $target_path))
            { if (move_uploaded_file($_FILES['identity_doc']['tmp_name'], $identity_doc)){
               // $con = mysqli_connect('localhost','root','','demo');
                // $query = "INSERT INTO news(title,description,image_path) VALUES('$title','$description','$target_path')";
                $query = "INSERT INTO worker_master(wor_name,wor_gender,wor_email,wor_password,wor_contact,wor_address,wor_city,wor_area,wor_skills,wor_exp,wor_profile,identity_doc,description,wor_aadhar,wor_self_emp,wor_verified,wor_block,visit_charges) VALUES ('$wor_name','$wor_gender','$wor_email','$wor_password','$wor_contact','$wor_address','$wor_city','$wor_area','$skill_list','$wor_exp','$target_path','$identity_doc','$description','$wor_aadhaar',1,0,0,'$visit_charges')";
                //echo $query;exit;
                $result = mysqli_query($conn,$query);
                if($result === true)
                echo '<script type="text/javascript">alert("SignUp Succesfully"); window.location.href = "login.php";</script>;';
                else
                echo '<script type="text/javascript">alert("Please Insert Proper Data"); window.location.href = "signup_worker.php";</script>;';
            }
            } 
            else
            {  
                echo '<script type="text/javascript">alert("Sorry, file not uploaded, please try again!"); window.location.href = "signup.php";</script>;';  
            }
        }
?>