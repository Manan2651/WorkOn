<?php
include 'config.php';
session_start();
$wor_id=$_GET['wor_id'];
$from_id=$_SESSION['cost_logged_in'];
$wor_email=$_GET['wor_email'];
//echo $from_id.$com_id;
$sql="INSERT INTO `bookmark_master`(`from_id`, `wor_id`) VALUES ('$from_id','$wor_email')";
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