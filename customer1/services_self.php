<?php 
if(isset($_POST['skill']))
{
    //include 'config.php';
    //echo $_POST['skill'];
    $s_area=$_POST['area'];
    $s_skill=$_POST['skill'];
    //echo $s_area;
    //$s_skill=$_POST['s_skill'];
    $query="SELECT * FROM worker_master WHERE `wor_area`='".$s_area."' AND `wor_skills`='".$s_skill."' AND `wor_self_emp` =1 AND `wor_verified` =1 AND `wor_block` =0";
    $result2=mysqli_query($conn,$query);
    //echo $query;
    if($result2 !== FALSE)
    { ?>
<!-- <section class="w3l-content-with-photo-4"> -->
<!-- /content-grids-->
<!-- <div class="content-photo-info"> -->
<div class="container py-lg-5">
    <?php //echo $sql;exit;        
     while($row2 = mysqli_fetch_array($result2))
        {//echo $query;exit;?>
    <a href="view_employee_self.php?emp_detail=<?php echo $row2['worker_id'];?>" style="dispaly:block;">
        <div class="card mb-3 mt-2" style="width:100%;height:100%">
            <!-- <table style="width:100%" class="table"> -->
            <div class="card-header" style="color:black;">
                <h4 style="text-transform:capitalize;">Worker Name: <?php echo $row2['wor_name'];
                                        //$emp_list=$row2['com_name']; ?></h4>
                <!-- <h5 class="card-title"></h5> -->
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title"></h5> -->
                <table>
                    <tr>
                        <td style="vertical-align:center;width:30%">
                            <img style="width:250px;" src="../worker/<?php echo $row2['wor_profile']; ?>">
                        </td>
                        <td style="width:60%">
                            Worker Email:<p class="card-text"><?php echo $row2['wor_email']; ?></p>
                            Worker Area:<p class="card-text"><?php echo $row2['wor_area']; ?></p>
                            Worker Skills:<p class="card-text"><?php echo $row2['wor_skills']; ?></p>
                            Visit Charges:<p class="card-text"><?php echo $row2['visit_charges']; ?></p>
                        </td>
                        <td style="vertical-align:top">
                            <input class="btn btn-primary" type="submit" value="View Profile">
                        </td>
                    </tr>
                </table>
                <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
            </div>

            <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
        </div>
    </a>
    <?php } 
    }?>
    <!-- </div> -->
</div>

<!-- </div> -->
<!-- </section> -->
<?php //header("location:services.php");

}
elseif(!isset($_POST['skill']))
{
    //include 'config.php';
    //session_start();
    $customer_id=$_SESSION['cost_logged_in'];
    $sql3="SELECT * FROM customer_master WHERE email='".$customer_id."'";
    $result3=mysqli_query($conn,$sql3);
    //echo $sql3;exit;
    if($result3 !== FALSE)
    {   //echo $sql3;exit;
        while($row3=mysqli_fetch_array($result3))
        {
            $customer_city_id=$row3['city'];
            // echo $customer_city_id;
        }
    }
    $sql4="SELECT * FROM city_master WHERE city_name='".$customer_city_id."'";
    $result4=mysqli_query($conn,$sql4);
    //echo $sql4;exit;
    if($result4 !== FALSE)
    {   //echo $sql3;exit;
        while($row4=mysqli_fetch_array($result4))
        {
            $customer_city=$row4['city_id'];
            // echo $customer_city;
        }
    }
    $query1="SELECT * FROM worker_master WHERE `wor_city`='".$customer_city."' AND `wor_self_emp` =1 AND `wor_verified` =1 AND `wor_block` =0";
    // echo $query1;exit;
    $result5=mysqli_query($conn,$query1);
    // echo $query1;
    if($result5 !== FALSE)
    { //echo $query1;?>
<!-- <section class="w3l-content-with-photo-4"> -->
<!-- /content-grids-->
<!-- <div class="content-photo-info"> -->
<div class="container py-lg-5">
    <?php //echo $sql;exit;
     while($row5 = mysqli_fetch_array($result5))
        {//echo $query;exit;?><?php
        
        //echo $sql;exit;
        //$user = mysqli_fetch_assoc($result);
        //echo "hey";exit;?>
    <a href="view_employee_self.php?emp_detail=<?php echo $row5['worker_id'];?>" style="display:block;">
        <div class="card mb-3" style="width:100%;height:100%">
        <div class="card-header" style="color:black;">
                <h4 style="text-transform:capitalize;">Worker Name: <?php echo $row5['wor_name'];
                                        //$emp_list=$row2['com_name']; ?></h4>
                <!-- <h5 class="card-title"></h5> -->
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title"></h5> -->
                <table>
                    <tr>
                        <td style="vertical-align:center;width:30%">
                            <img style="width:250px;" src="../worker/<?php echo $row5['wor_profile']; ?>">
                        </td>
                        <td style="width:60%">
                            Worker Email:<p class="card-text"><?php echo $row5['wor_email']; ?></p>
                            Worker Area:<p class="card-text"><?php echo $row5['wor_area']; ?></p>
                            Worker Skills:<p class="card-text"><?php echo $row5['wor_skills']; ?></p>
                            Visit Charges:<p class="card-text"><?php echo $row5['visit_charges']; ?></p>
                        </td>
                        <td style="vertical-align:top">
                            <input class="btn btn-primary" type="submit" value="View Profile">
                        </td>
                    </tr>
                </table>
                <!-- <a href="#" class="btn btn-primary">See Profile</a> -->
            </div>
        </div>
    </a>

    <?php }
    }?>
</div>
<!-- //header("location:services.php");
    //echo "Not Found Anything Here"; -->
<?php
}?>