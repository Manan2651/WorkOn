<?php
session_start();
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "Select * from worker_master where wor_email='$username' AND wor_password='$password'";
    //$sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {


        header("location: index.php");
        $_SESSION['wor_logged_in'] = true;
        //$_SESSION['username']=$username;
        $_SESSION['wor_email'] = $username;
    } else {
        echo '<script type="text/javascript">alert("Incorrect Username Or Password"); window.location.href = "login.php";</script>;';
        // header("location: login.php");
    }
}
?>

<html>

<head>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <style>
        body {
            background-color: #F3EBF6;
            font-family: 'Ubuntu', sans-serif;
        }

        .main {
            background-color: #FFFFFF;
            width: 400px;
            height: 420px;
            margin: 7em auto;
            border-radius: 1.5em;
            box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
        }

        .sign {
            padding-top: 30px;
            color: #8C55AA;
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            font-size: 23px;
        }

        .un {
            width: 76%;
            color: rgb(38, 50, 56);
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background: rgba(136, 126, 126, 0.04);
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            outline: none;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.02);
            margin-bottom: 60px;
            margin-left: 46px;
            text-align: center;
            margin-bottom: 27px;
            font-family: 'Ubuntu', sans-serif;
        }

        form.form1 {
            padding-top: 40px;
        }

        .pass {
            width: 76%;
            color: rgb(38, 50, 56);
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1px;
            background: rgba(136, 126, 126, 0.04);
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            outline: none;
            box-sizing: border-box;
            border: 2px solid rgba(0, 0, 0, 0.02);
            margin-bottom: 50px;
            margin-left: 46px;
            text-align: center;
            margin-bottom: 27px;
            font-family: 'Ubuntu', sans-serif;
        }

        .check {
            width: 10%;
            margin-left: 34px;
            margin-bottom: 30px;
        }


        .un:focus,
        .pass:focus {
            border: 2px solid rgba(0, 0, 0, 0.18) !important;

        }

        .submit {
            cursor: pointer;
            border-radius: 5em;
            color: #fff;
            background: linear-gradient(to right, #9C27B0, #E040FB);
            border: 0;
            padding-left: 40px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-top: 10px;
            font-family: 'Ubuntu', sans-serif;
            margin-left: 35%;
            font-size: 13px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
        }

        .forgot {
            text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
            color: black;
            padding-top: 1px;
        }

        a {
            text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
            color: blue;
            text-decoration: none
        }

        /* @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        } */
    </style>
</head>

<body>
    <div class="main">
        <p class="sign" align="center">Login</p>
        <form class="form1" method="post" action="login.php">
            <input class="un " type="text" align="center" name="username" placeholder="Username"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            <input class="pass" type="password" align="center" name="password" id="password-field"
                placeholder="Password" required><br>
            <input class="check" type="checkbox" onclick="myFunction()" toggle="password-field">Show Password<br>
            <input class="submit" type="submit" align="center" value="Login">
            <!-- <p class="forgot" align="center"><a href="#">Forgot Password?</p> -->
            <p class="forgot" align="center">Don't have an account? <a href="signup.php"> Sign Up Here</p>

        </form>
    </div>

</body>

</html>

<script>
    function myFunction() {
        var x = document.getElementById("password-field");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>