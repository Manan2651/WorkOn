<?php
include 'config.php';
$id=$_POST['id'];
$com_name=$_POST['com_name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$address=$_POST['address'];
$area=$_POST['area'];
$discription=$_POST['discription'];
$sql="UPDATE `company_master_table1` SET `com_name`='".$com_name."',`contact`='".$contact."',`email`='".$email."',`address`='".$address."',`area`='".$area."',`discription`='".$discription."' WHERE `company_id`='".$id."'";
echo $sql;
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