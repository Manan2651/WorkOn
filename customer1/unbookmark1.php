<?php
include 'config.php';
session_start();
$wor_id=$_GET['wor_id'];
$from_id=$_SESSION['cost_logged_in'];
$wor_email=$_GET['wor_email'];
//echo $from_id.$com_id;
$sql="DELETE FROM `bookmark_master` WHERE `from_id`='$from_id' AND `wor_id`='$wor_email'";
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
    header("location:view_employee_self.php?emp_detail=$wor_id");
}
else
{
    echo "Error";
}
?>