<?php
include 'config.php';
$worker_id=$_POST['worker_id'];
$wor_name=$_POST['wor_name'];
$wor_contact=$_POST['wor_contact'];
$wor_email=$_POST['wor_email'];
$wor_address=$_POST['wor_address'];
$wor_area=$_POST['wor_area'];
$description=$_POST['description'];
$wor_skills=$_POST['wor_skills'];
$sql="UPDATE `worker_master` SET `wor_name`='".$wor_name."',`wor_contact`='".$wor_contact."',`wor_email`='".$wor_email."',`wor_address`='".$wor_address."',`wor_area`='".$wor_area."',`description`='".$description."' WHERE `worker_id`='".$worker_id."'";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("Profile Update Succecfully..👍");
     window.location.href = "index.php";</script>;';
}
else
{
    echo "Error";
}
?>