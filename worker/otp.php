<?php
include 'config.php';
$otp=$_POST['otp'];
$id=$_POST['id'];
$sql="SELECT * FROM book_master where `book_id`='".$id."'";
$result=mysqli_query($conn,$sql);
$user=mysqli_fetch_assoc($result);
if($user['otp'] ==$otp)
{
    $sql1="Update book_master SET `status`=3 WHERE `book_id`='".$id."'";
    $result1=mysqli_query($conn,$sql1);
    if($result1 !== FALSE)
    {
        echo '<script type="text/javascript">alert("Order Completed Succesfully..👍");window.location.href = "work_1.php";</script>;';
    }
    else 
    {
        echo "Error";
    }
}
else
{
    echo "error";
}
?>