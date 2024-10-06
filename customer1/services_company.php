<?php 
if(isset($_POST['skill']))
{
    //include 'config.php';
    //echo $_POST['skill'];
    $s_area=$_POST['area'];
    $s_skill=$_POST['skill'];
    //echo $s_area;
    //$s_skill=$_POST['s_skill'];
    $query="SELECT * FROM company_master_table1 WHERE `area`='".$s_area."' AND `skill_list`='".$s_skill."' AND `com_verified`=1 AND `com_block`=0";
    // $query="SELECT *,rate.rate FROM company_master_table1 INNER JOIN rate ON company_master_table1.email = rate.email WHERE `area`='".$s_area."' AND `skill_list`='".$s_skill."'";

    $result2=mysqli_query($conn,$query);
    // echo $query;
    if($result2 !== FALSE)
    { ?>
<!-- <section class="w3l-content-with-photo-4"> -->
<!-- /content-grids-->
<!-- <div class="content-photo-info"> -->
<div class="container py-lg-5">
    <?php //echo $sql;exit;
            while($row2 = mysqli_fetch_array($result2))
                {//echo $query;exit;?>
    <a href="view_employee.php?emp_detail=<?php echo $row2['company_id'];?>" style="dispaly:block;">
        <div class="card mb-3 mt-2" style="width:100%;height:100%">
            <!-- <table style="width:100%" class="table"> -->
            <div class="card-header" style="color:black;">
                <h4 style="text-transform:capitalize;">Company Name: <?php echo $row2['com_name'];
                                                //$emp_list=$row2['com_name']; ?></h4>
                <!-- <h5 class="card-title"></h5> -->
            </div>
            <div class="card-body">
                <!-- <h5 class="card-title"></h5> -->
                <!-- <section style="dispaly:flex;justify-content:space-between;"> -->
                <table>
                    <tr>
                        <td style="vertical-align:center;width:30%">
                            <img style="width:250px;" src="../company/<?php echo $row2['profile_pic'];?>">
                        </td>
                        <td style="width:40%">
                            Company Email:<p class="card-text"><?php echo $row2['email']; ?></p>
                            Company Area:<p class="card-text"><?php echo $row2['area']; ?></p>
                            Company Skills:<p class="card-text"><?php echo $row2['skill_list']; ?></p>
                            Visit Charges:<p class="card-text"><?php echo $row2['visit_charges']; ?></p>
                        </td>
                        <td style="width:30%;vertical-align:top;">
                            <?php
                        //  $sql3="SELECT * FROM `rate` WHERE `email`='".$row2['email']."'";
                        //  $result5=mysqli_query($conn,$sql3);
                        //  $user3=mysqli_num_rows($result5);
                        //  if($result5 !== FALSE)
                        //  {
                        // $sum_rate=0;
                        // $count=0;
                        // while($row1 = mysqli_fetch_array($result5))
                        // {  
                        //     $sum_rate=$row1['rate']+$sum_rate;
                        //     $count++;
                        // }
                        
                        // $avg_rate=$sum_rate/$count;
                        ?>
                            <!-- <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap" style="text-transform:capitalize;">
                                <?php //echo $avg_rate;?>
                                <span class="fa fa-star checked" style="color: orange;"></span><?php
                                // echo "Ratings From".mysqli_num_rows($result5);?>
                            </h4> -->

                            <?php
                        //  }
                        //  else
                        //  {?>
                            <!-- <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap" style="text-transform:capitalize;">
                                <?php //echo "0";?>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <?php //echo "Ratings From".$user3;?>
                            </h4> --><?php
                        // }
                        ?>
                        </td>
                        <td style="vertical-align:top">
                            <input class="btn btn-primary" type="submit" value="View Profile">
                        </td>
                    </tr>
                    <!-- </section> -->
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
    $query1="SELECT * FROM company_master_table1 WHERE `city`='".$customer_city."' AND `com_verified`=1 AND `com_block`=0";
    // echo $query1;exit;
    $result5=mysqli_query($conn,$query1);
    // echo $query1;
    if($result5 !== FALSE)
    {?>

<div class="container py-lg-5">
    <?php 
     while($row5 = mysqli_fetch_array($result5))
        {?><?php
        
       ?>
    <a href="view_employee.php?emp_detail=<?php echo $row5['company_id'];?>" style="display:block;">
        <div class="card mb-3" style="width:100%;height:100%">
            <div class="card-header" style="color:black;">
                <h4 style="text-transform:capitalize;">Company Name: <?php echo $row5['com_name'];?></h4>
            </div>
            <div class="card-body">
                <table>
                    <tr>
                        <td style="vertical-align:center;width:30%">
                            <img style="width:250px;" src="../company/<?php echo $row5['profile_pic']; ?>">
                        </td>
                        <td style="width:40%">
                            Company Email:<p class="card-text"><?php echo $row5['email']; ?></p>
                            Company Area:<p class="card-text"><?php echo $row5['area']; ?></p>
                            Company Skills:<p class="card-text"><?php echo $row5['skill_list']; ?></p>
                            Visit Charges:<p class="card-text"><?php echo $row5['visit_charges']; ?></p>
                        </td>
                        <td style="width:30%;vertical-align:top;">
                            <?php
                        //  $sql3="SELECT * FROM `rate` WHERE `email`='".$row5['email']."'";
                        //  $result5=mysqli_query($conn,$sql3);
                        //  $user3=mysqli_num_rows($result5);
                        //  if($result5 !== FALSE)
                        //  {
                        // $sum_rate=0;
                        // $count=0;
                        // while($row1 = mysqli_fetch_array($result5))
                        // {  
                        //     $sum_rate=$row1['rate']+$sum_rate;
                        //     $count++;
                        // }
                        
                        // $avg_rate=$sum_rate/$count;
                        ?>
                            <!-- <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap" style="text-transform:capitalize;">
                                <?php //echo $avg_rate;?>
                                <span class="fa fa-star checked" style="color: orange;"></span><?php
                                // echo "Ratings From".mysqli_num_rows($result5);?>
                            </h4> -->

                            <?php
                        //  }
                        //  else
                        //  {?>
                            <!-- <h4 class="pt-sm-2 pb-1 mb-0  ml-5 text-nowrap" style="text-transform:capitalize;">
                                <?php //echo "0";?>
                                <span class="fa fa-star checked" style="color: orange;"></span>
                                <?php //echo "Ratings From 0";?>
                            </h4>--><?php
                        // }
                        ?>
                        </td>
                        <td style="vertical-align:top">
                            <input class="btn btn-primary" type="submit" value="View Profile">
                        </td>
                    </tr>
                    </section> 
                </table>
            </div>
        </div>
    </a>

    <?php }
    }?>
</div>
<?php
}?>