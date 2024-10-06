<?php
session_start();
include 'config.php';
$wor_name=$_POST['wor_name'];
$cost_name=$_POST['cost_name'];
$wor_email=$_POST['wor_email'];
$cost_email=$_SESSION['cost_logged_in'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$area=$_POST['area'];
$city=$_POST['city'];
$address=$_POST['address'];
$new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
$skill_list=$_POST['skill_list'];
$sql="INSERT INTO `book_master`(`wor_name`,`wor_email`, `cost_email`,`cost_name`,`description`, `contact`, `area`, `city`, `address`, `new_date`,`status`,`skill_list`,`self`) VALUES ('$wor_name','$wor_email','$cost_email','$cost_name','$description','$contact','$area','$city','$address','$new_date',0,'$skill_list',1)";
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