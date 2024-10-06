<?php
    $query1="SELECT * FROM book_master WHERE `cost_email`='".$_SESSION['cost_logged_in']."' AND `self`=0";
    // echo $query1;exit;
    $result5=mysqli_query($conn,$query1);
    // echo $query1;
    if($result5 !== FALSE)
    { ?>
    <section class="w3l-content-with-photo-4">
        <!-- /content-grids-->
        <!-- <div class="content-photo-info py-5"> -->
        <div class="container py-lg-5">
            <?php //echo $sql;exit;
     while($row5 = mysqli_fetch_array($result5))
        {//echo $query;exit;?><?php
        
        //echo $sql;exit;
        //$user = mysqli_fetch_assoc($result);
        //echo "hey";exit;?>
            <a href="view_status.php?emp_detail=<?php echo $row5['book_id'];?>" style="display:block;">
                <div class="card mb-3" style="width:100%;height:100% ">
                    <!-- <div class="card-header" style="color:black;">
                        <h4 style="text-transform:capitalize;">Company Name: <?php //echo $row5['com_name'];?></h4>
                    </div> -->
                    <div class="card-body">
                        <table>
                            <tr>
                                <td style="vertical-align:center;width:30%">
                                    Company Name:<p class="card-text" style="text-transform:capitalize;">
                                        <?php echo $row5['com_name']; ?></p>
                                    Company Area:<p class="card-text"><?php echo $row5['area']; ?></p>
                                    Booked For:<p class="card-text"><?php echo $row5['skill_list']; ?></p>
                                </td>
                                <td style="width:60%">
                                    <?php
                                    if($row5['status'] == 0)
                                    {
                                        echo "<h4>Request has send succesfully</h4>";
                                    }
                                    else if($row5['status'] == 1)
                                    {
                                        echo "<h4>Company has assigned a worker for you</h4>";
                                    }
                                    else if($row5['status'] == 2)
                                    {
                                        echo "<h4>Please give OTP to the worker.</h4>";
                                    }
                                    else if($row5['status'] == 3)
                                    {
                                        echo "<h4>Order Completed.</h4>";
                                    }
                                    else if($row5['status'] == 4)
                                    {
                                        echo "<h4>Declined By Company.</h4>";
                                    }
                                    $timestamp = strtotime($row5['new_date']);
                                    $day = date('l', $timestamp);
                                    echo "<br>".$day;
                                    ?>
                                </td>
                                <td style="vertical-align:top">
                                    <input class="btn btn-primary" type="submit" value="View Status"><br><br>
                                    <a href="delete_booking.php?emp_detail=<?php echo $row5['book_id'];?>"
                                        class="btn btn-primary">Delete Booking</a>
                                </td>
                            </tr>
                            <!-- </section> -->
                        </table>
                    </div>
                </div>
            </a>

            <?php }
    }?>
    </div>
    </section>