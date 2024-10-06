<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Star rating using pure CSS</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }

    .rate:not(:checked)>input {
        position: absolute;
        top: -9999px;
    }

    .rate:not(:checked)>label {
        float: right;
        width: 1em;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 30px;
        color: #ccc;
    }

    .rate:not(:checked)>label:before {
        content: '★ ';
    }

    .rate>input:checked~label {
        color: #ffc700;
    }

    .rate:not(:checked)>label:hover,
    .rate:not(:checked)>label:hover~label {
        color: #deb217;
    }

    .rate>input:checked+label:hover,
    .rate>input:checked+label:hover~label,
    .rate>input:checked~label:hover,
    .rate>input:checked~label:hover~label,
    .rate>label:hover~input:checked~label {
        color: #c59b08;
    }
    </style>
</head>

<body>
    
        <!-- Enter to id : <input type="email" name="to_id"><br><br>
        Enter Your id : <input type="email" name="from_id"><br><br> -->
        <div class="rate">
            <!-- Enter Your Rate: -->
            <input type="radio" id="star5" name="rate" value="5" />
            <label for="star5" title="text">5 stars</label>
            <input type="radio" id="star4" name="rate" value="4" />
            <label for="star4" title="text">4 stars</label>
            <input type="radio" id="star3" name="rate" value="3" />
            <label for="star3" title="text">3 stars</label>
            <input type="radio" id="star2" name="rate" value="2" />
            <label for="star2" title="text">2 stars</label>
            <input type="radio" id="star1" name="rate" value="1" />
            <label for="star1" title="text">1 star</label>
        </div>
        <!-- <input type="submit" value="Submit"> -->
        
    
</body>

</html>


<?php
// SELECT * FROM `rate` WHERE `to_id` = 'aa@gmail.com';
// echo " Other Rates:<br>";
// try
// { 
//     $conn=mysqli_connect("localhost","root","");
//     mysqli_select_db($conn,'demo');
//     $sql="SELECT * FROM `rate` WHERE `to_id` = 'mananbhatt@gmail.com';";
//     $result=mysqli_query($conn,$sql);
//     $result1=mysqli_query($conn,$sql);
//     $sum_rate=0;
//     $count=0;
    // while($row = mysqli_fetch_array($result))
    // {  
    //     $sum_rate=$row['rate']+$sum_rate;
    //     $count++;
    // }
    // $avg_rate=$sum_rate/$count;
    // echo "Average Rate : ".$avg_rate."<br><br>";

//     while($row1 = mysqli_fetch_array($result1))
//     {
//         echo $row1['to_id']."<br>";
//         echo $row1['from_id']."<br>";
//         echo $row1['rate']."<br><br><br>";    
//     }  
// }
//     catch(DivisionByZeroError $e)
//     {
//         //echo "error  ";
//     }
?>