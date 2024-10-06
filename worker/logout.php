<?php
session_start();
unset($_SESSION["wor_email"]);
unset($_SESSION["name"]);
header("Location:login.php");
session_destroy();
?>
