<?php
include 'config.php';
session_start();
$com_id=$_GET['com_id'];
$from_id=$_SESSION['cost_logged_in'];
$com_email=$_GET['com_email'];
//echo $from_id.$com_id;
$sql="INSERT INTO `bookmark_master`(`from_id`, `com_id`) VALUES ('$from_id','$com_email')";
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
    header("location:view_employee.php?emp_detail=$com_id");
}
else
{
    echo "Error";
}
?>