<?php
session_start();
include 'config.php';
$com_name=$_POST['com_name'];
$cost_name=$_POST['cost_name'];
$com_email=$_POST['com_email'];
$cost_email=$_SESSION['cost_logged_in'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$area=$_POST['area'];
$city=$_POST['city'];
$address=$_POST['address'];
$new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
$skill_list=$_POST['skill_list'];
$sql="INSERT INTO `book_master`(`cost_name`,`com_name`,`com_email`, `cost_email`,`description`, `contact`, `area`, `city`, `address`, `new_date`,`status`,`skill_list`) VALUES ('$cost_name','$com_name','$com_email','$cost_email','$description','$contact','$area','$city','$address','$new_date',0,'$skill_list')";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
  echo "Query inserted succesfully";
  echo '<script type="text/javascript">alert("Request Sent Succesfully"); window.location.href = "bookings.php";</script>;';
}
else
{
  echo "query was not inserted succesfully";
}
?>