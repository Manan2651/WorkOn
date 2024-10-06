<?php
include 'config.php';
$com_name=$_POST['com_name'];
$email=$_POST['email'];
$fix_c=$_POST['fix_c'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$address=$_POST['address'];
$city=$_POST['city'];
$area=$_POST['area'];
echo $area.$city;
$com_aadhaar=$_POST['com_aadhaar'];
$skill_list=$_POST["specialities"];
$identity_doc = "identity_doc/";  
$identity_doc = $identity_doc.basename($_FILES['identity_doc']['name']);
$target_path = "uploads/";  
$target_path = $target_path.basename($_FILES['file_image']['name']); 
//$target_path=implode(',',$_FILES['file_image']['name']);	
$description=$_POST['description'];	
//var_dump($target_path);
//var_dump($_FILES);
$q = "SELECT * FROM company_master_table1 WHERE email= '".$email."'";
$result = mysqli_query($conn, $q);
if($row = mysqli_fetch_assoc($result))
{
    echo '<script type="text/javascript">alert("Data Already Exist"); window.location.href = "signup.php";</script>;';
}
else
{
    if(move_uploaded_file($_FILES['file_image']['tmp_name'], $target_path))
    {  
        if (move_uploaded_file($_FILES['identity_doc']['tmp_name'], $identity_doc)){
        // $query = "INSERT INTO news(title,description,image_path) VALUES('$title','$description','$target_path')";
        $query = "INSERT INTO company_master_table1(com_name,email,contact,password,address,city,area,visit_charges,skill_list,profile_pic,discription,com_verified,identity_doc,com_aadhar,com_block) VALUES ('$com_name', '$email','$contact', '$password','$address','$city','$area','$fix_c','$skill_list','$target_path','$description',0,'$identity_doc','$com_aadhaar',0)";
        
        $result = mysqli_query($conn,$query);
        if($result === true)
            echo '<script type="text/javascript">alert("SignUp Succesfully, Now Login into System"); window.location.href = "index.php";</script>;';
        else
        echo '<script type="text/javascript">alert("Please Insert Proper Data"); window.location.href = "signup.php";</script>;';
        } 
    }
    else
    {  
    // echo "Sorry, file not uploaded, please try again!";
    echo '<script type="text/javascript">alert("Sorry, file not uploaded, please try again!"); window.location.href = "signup.php";</script>;';  
    }
}
?>