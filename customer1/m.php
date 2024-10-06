<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Generated OTP</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php
                $sql2="SELECT * FROM book_master WHERE `status`=2";
                $result3=mysqli_query($conn,$sql2);
                $user2=mysqli_fetch_assoc($result3);
                $run_sql2=mysqli_num_rows($result3);
                if($run_sql2 > 0)
                {
                ?>
            <div class="modal-body">
                <h5>Your OTP is here:</h5><br>
                <h5 style="color:red;">
                    <lable><?php echo $user2['otp'];?></lable>
                </h5>
            </div>
            <?php
                }
                else
                {?>
            <div class="modal-body">
                <h5>Your OTP is here:</h5><br>
                <h5 style="color:red;">
                    <lable>OTP Has Not Generated Yet</lable>
                </h5>
            </div>
            <?php 
                }
                ?>
        </div>
        </form>
    </div>
</div>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Give Ratings</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="result.php" method="POST">
                <div class="modal-body" style="height:100px;width:100%;margin-top:50px;margin-left:300px;">
                    <?php include 'rating.php';?>
                    <input type="hidden" name="to_id" value="<?php echo $email; ?>">
                    <input type="hidden" name="from_id" value="<?php echo $_SESSION['cost_logged_in']; ?>">
                </div>

                <div class="modal-footer">
                    <?php 
                            $sql4="SELECT * FROM rate WHERE `from_id`='".$_SESSION['cost_logged_in']."' AND `to_id`='".$email."'";
                             //echo $sql4;
                            $result2=mysqli_query($conn,$sql4);
                            // echo mysqli_num_rows($result2);
                            if($result2 !== FALSE)
                             {
                            ?>
                    <lable style="margin-right:90px;color:Blue;">You can give ratings one time only.</lable>
                    <input type="submit" class="btn btn-primary mb-2" value="Submit">
                    <?php
                            }
                             else{
                            ?>
                    <lable style="margin-right:90px;color:red;">You Have Already Given Your FeedBack, Thank You</lable>
                    <!-- <input type="submit" class="btn btn-primary mb-2" value="Book Now" disabled> -->

                    <?php
                            }
                            ?>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>