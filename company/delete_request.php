<?php
include 'config.php';
?>
<?php 
session_start();
if(!isset($_SESSION['com_email']))
{
    header("location: login.php");
} 
?>
<?php
// session_start();
$user_id=$_GET['from_id'];
$to_id=$_SESSION['com_email'];
$sql="DELETE FROM `request_master` WHERE from_id='".$user_id."' AND to_id='".$to_id."'";
$run_sql=mysqli_query($conn,$sql);
if($run_sql == true)
{
    header("location: about.php");
}
else
{
    echo "query not worked";
}
?>