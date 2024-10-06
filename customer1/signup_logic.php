<?php
session_start();
include 'config.php';
$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$password=$_POST["password"];
$address=$_POST["address"];
$city=$_POST["city"];
$sql1="SELECT * FROM `customer_master` WHERE `email`='".$email."'";
$result1=mysqli_query($conn,$sql1);
$user=mysqli_num_rows($result1);
if($user>0)
{
    echo '<script type="text/javascript">alert("Data Already Exists"); window.location.href = "index.php";</script>;';
}
else
{
    $sql = "INSERT INTO `customer_master` (`name`, `email`, `password`, `contact`, `address`, `city`) VALUES ('$name', '$email', '$password', '$contact', '$address', '$city')";
    //echo $sql;
    $result = mysqli_query($conn,$sql);
    if($result!== FALSE)
    {   

        $_SESSION['cost_logged_in']=$email;
        header("location:index.php");
        //echo '<script type="text/javascript">alert("Data Inserted successfully"); window.location.href = "profile.php";</script>;';
    }
    else
    {
        echo "Not inserted...";
    }
}

?>