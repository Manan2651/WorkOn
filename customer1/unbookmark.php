<?php
include 'config.php';
session_start();
$com_id=$_GET['com_id'];
$from_id=$_SESSION['cost_logged_in'];
$com_email=$_GET['com_email'];
//echo $from_id.$com_id;
$sql="DELETE FROM `bookmark_master` WHERE `from_id`='$from_id' AND `com_id`='$com_email'";
// echo $sql;
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