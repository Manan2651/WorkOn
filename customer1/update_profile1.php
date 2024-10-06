<?php
include 'config.php';
$customer_id=$_POST['customer_id'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$sql="UPDATE customer_master SET `name`='".$name."',`contact`='".$contact."',`email`='".$email."',`address`='".$address."',`city`='".$city."' WHERE `customer_id`='".$customer_id."'";
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Profile Update Succecfully..👍");
     window.location.href = "profile.php";</script>;';
}
else
{
    echo "Error";
}
?>