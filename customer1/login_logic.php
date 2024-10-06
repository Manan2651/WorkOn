<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

include 'config.php';
//$sql = "INSERT INTO `customer_master` (`customer_id`, `name`, `email`, `password`, `contact`, `address`, `city`) VALUES (NULL, '$name', '$email', '$password', '$contact', '$address', '$city');";
//echo $sql;

$sql = "Select * from customer_master where email='$email' AND password='$password'";
//echo $sql;
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1) {
    header("location: index.php");
    $_SESSION['cost_logged_in'] = $email;
    //$_SESSION['username']=$username;
    //echo "Selected";
} else {
    // header("location: signup_page.php");
    echo '<script type="text/javascript">alert("Incorrect Email Or Password");window.location.href = "signup_page.php";</script>;';
}
?>