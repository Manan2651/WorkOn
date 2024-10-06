<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure CSS Vertical Stepper Example</title>
    <meta name="author" content="Codeconvey" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome 4-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />

</head>

<body>
    <?php
    $query1="SELECT * FROM book_master WHERE `book_id`='".$_GET['emp_detail']."'";
    $result5=mysqli_query($conn,$query1);
    $user=mysqli_fetch_assoc($result5);
    if($user['self'] == 0)
    {
        
    ?>
    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <?php
                    
                    
                    if($user['status'] == 0)
                    {
                    ?>
                    <!-- Stepper HTML -->
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <div class="caption">Request Sent Succesfully</div>
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">2</div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <!-- <div class="caption">This is description of second step.</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <div>
                            <div class="title">Third Step</div>
                            <!-- <div class="caption">Some text about Third step. </div> -->
                        </div>
                    </div>

                    <div class="step">
                        <div>
                            <div class="circle">4</div>
                        </div>
                        <div>
                            <div class="title">Finish</div>
                        </div>
                    </div>
                    <?php
                    }
                    else if($user['status'] == 1)
                    {
                    ?>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <!-- <div class="caption">Request Sent Succesfully</div> -->
                        </div>
                    </div>
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <div class="caption">Company has accepted your request and <br>assigned a worker for your
                                work.</div>
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <div>
                            <div class="title">Third Step</div>
                            <!-- <div class="caption">Some text about Third step. </div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">4</div>
                        </div>
                        <div>
                            <div class="title">Finish</div>
                        </div>
                    </div>
                    <?php
                    }
                    else if($user['status'] == 2)
                    {
                    ?>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <!-- <div class="caption">Request Sent Succesfully</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <!-- <div class="caption">This is description of second step.</div> -->
                        </div>
                    </div>
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Third Step</div>
                            <div class="caption">Give OTP to worker. </div>
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">4</div>
                        </div>
                        <div>
                            <div class="title">Finish</div>
                        </div>
                    </div>
                </div><?php
                    }
                    else if($user['status'] == 3)
                    {
                    ?>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <!-- <div class="caption">Request Sent Succesfully</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <!-- <div class="caption">This is description of second step.</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <div>
                            <div class="title">Third Step</div>
                            <!-- <div class="caption">Some text about Third step. </div> -->
                        </div>
                    </div>
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Completed</div>
                            <div class="caption">Finish</div>
                        </div>
                    </div>
                </div><?php
                    }
                    ?>

                <!-- End Stepper HTML -->


            </div>
        </div>
        </div>
    </section>
    <?php    
    }
    else
    {?>
        <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <?php
                    
                    
                    if($user['status'] == 0)
                    {
                    ?>
                    <!-- Stepper HTML -->
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <div class="caption">Request Sent Succesfully</div>
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">2</div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <!-- <div class="caption">This is description of second step.</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <div>
                            <div class="title">Finish</div>
                        </div>
                    </div>
                    <?php
                    }
                    else if($user['status'] == 1)
                    {
                    ?>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <!-- <div class="caption">Request Sent Succesfully</div> -->
                        </div>
                    </div>
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <div class="caption">Worker has accepted your request and <br>Give OTP to worker.</div>
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle">3</div>
                        </div>
                        <div>
                            <div class="title">Finish</div>
                        </div>
                    </div>
                    <?php
                    }
                    else if($user['status'] == 2)
                    {
                    ?>
                    <p style="color:red">OREDER DECLINED BY WORKER</p>
                    <?php
                    }
                    
                    else if($user['status'] == 3)
                    {
                    ?>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">First Step</div>
                            <!-- <div class="caption">Request Sent Succesfully</div> -->
                        </div>
                    </div>
                    <div class="step">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Second Step</div>
                            <!-- <div class="caption">This is description of second step.</div> -->
                        </div>
                    </div>
                    <div class="step step-active">
                        <div>
                            <div class="circle"><i class="fa fa-check"></i></div>
                        </div>
                        <div>
                            <div class="title">Completed</div>
                            <div class="caption">Finish</div>
                        </div>
                    </div>
                </div><?php
                    }
                    ?>

                <!-- End Stepper HTML -->


            </div>
        </div>
        </div>
    </section><?php
    }?>
</body>

</html>