<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #mySidenav a {
        position: absolute;
        /* Position them relative to the browser window */
        right: -70px;
        /* Position them outside of the screen */
        transition: 0.3s;
        /* Add transition on hover */
        padding: 10px 0 10px 30px;
        /* 15px padding */
        width: 100px;
        height: 50px;
        /* Set a specific width */
        text-decoration: none;
        /* Remove underline */
        font-size: 20px;
        /* Increase font size */
        color: white;
        /* White text color */
        border-radius: 5px 0 0 5px;
        /* Rounded corners on the top right and bottom right side */
    }

    #mySidenav a:hover {
        right: 0;
        /* On mouse-over, make the elements appear as they should */
    }

    #contact {
        top: 0;
        background-color: #f45d01
            /* Light Black */
    }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a onclick="myFunction()" id="contact">Logout</a>
    </div>
</body>

</html>

<script>
function myFunction() {
  let text = "Are you sure";
  if (confirm(text) == true) {
    window.location.href = "logout.php";
  } else {
    window.close();
  }
  document.getElementById("demo").innerHTML = text;
}
</script>