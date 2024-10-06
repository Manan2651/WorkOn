<?php
session_start();
unset($_SESSION["com_email"]);
unset($_SESSION["com_logged_in"]);
header("Location:login.php");
session_destroy();
?>
