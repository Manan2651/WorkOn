<?php
include 'config.php';
$worker_email=$_GET['worker_email'];
$assign_id=$_GET['assign_id'];
// $otp=(rand(100000,999999));
$sql="UPDATE `book_master` SET `wor_email`='".$worker_email."',`status`=1 WHERE `book_id`='".$assign_id."'";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result !== FALSE)
{
    echo '<script type="text/javascript">alert("The worker has been assigned for your work..👍");
     window.location.href = "index.php";</script>;';
}
?>