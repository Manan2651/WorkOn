<?php
session_start();
unset($_SESSION["cost_logged_in"]);
unset($_SESSION["name"]);
header("Location:signup_page.php");
session_destroy();
?>
