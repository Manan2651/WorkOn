<?php
$to_id=$_POST['to_id'];
$from_id=$_POST['from_id'];
$rate=$_POST['rate'];
echo $rate."<br>";
echo $to_id;
echo $from_id;
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,'demo');
$sql="INSERT INTO `rate` (`wor_email`, `from_id`, `rate`) VALUES ('$to_id', '$from_id', '$rate');";
//echo $sql;
$result=mysqli_query($conn,$sql);
if($result == true)
{
    header("location:bookings.php");
}
else{
    echo "failed...";
}
?>