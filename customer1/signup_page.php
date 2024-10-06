<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="signup_css.css">
    <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">-->
    <link rel="stylesheet" href="signup_css.css">
</head>

<body>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Customer <br>Login Form</div>
            <div class="title signup">Customer<br>Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="login_logic.php" class="login" method="POST">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                    <div class="signup-link">Login As Company <a href="../company/login.php">Signup now</a></div>
                    <div class="signup-link">Login As Worker <a href="../worker/login.php">Signup now</a></div>
                </form>
                <form action="signup_logic.php" class="signup" method="POST">

                    <div class="field">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>

                    <div class="field">
                        <input type="email" name="email" placeholder="Email Address"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>

                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <!-- <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div> -->

                    <div class="field">
                        <input type="number" name="contact" placeholder="Contact Number" required>
                    </div>

                    <div class="field">
                        <textarea placeholder="Address" name="address" class="address" required></textarea>
                    </div>

                    <div class="field">
                        <select name="city" class="address" required>
                            <option value="city">Select your City</option>
                            <?php $query = "SELECT * FROM city_master";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '<option value="' . $row['city_name'] . '">' . $row['city_name'] . '</option>';
                                }
                            } else {
                                echo '<option value="">city not available</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="signup_js.js"></script>

</body>

</html>