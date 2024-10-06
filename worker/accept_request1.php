<?php
include 'config.php';
?>
<?php 
session_start();
if(!isset($_SESSION['wor_logged_in']))
{
    header("location: login.php");
} 
?>
<?php
// session_start();
$wor_email=$_GET['wor_email'];
$book_id=$_GET['book_id'];
// $to_id=$_SESSION['com_email'];
$otp=(rand(100000,999999));
$sql="UPDATE `book_master` SET `status` = '1',`otp`='".$otp."' WHERE wor_email='".$wor_email."' AND book_id='".$book_id."'";
$run_sql=mysqli_query($conn,$sql);
if($run_sql !== FALSE)
{
    echo '<script type="text/javascript">alert("Request accept Succesfully..👍");window.location.href = "work.php";</script>;';
    // header("location: request1.php");
}
else
{
    echo "query not worked";
}
?>