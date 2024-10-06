<?php
session_start();
include 'config.php';
$book_id=$_GET['emp_detail'];
$sql="DELETE FROM `book_master` WHERE `book_id`='".$book_id."'";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
  echo "Booking Deleted succesfully";
  echo '<script type="text/javascript">alert("Booking Deleted succesfully"); window.location.href = "bookings.php";</script>;';
}
else
{
  echo "Please try again";
}
?>