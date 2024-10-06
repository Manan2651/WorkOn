<?php
    $customer_id=$_SESSION['cost_logged_in'];
    $sql3="SELECT * FROM bookmark_master WHERE from_id='".$customer_id."'";
    $result3=mysqli_query($conn,$sql3);
    //echo $sql3;exit;
    if($result3 !== FALSE)
    {   //echo $sql3;exit;
            // echo $customer_city_id;?>
            <div class="container py-lg-5"><?php
            while($row3=mysqli_fetch_array($result3))
            {
                $com_email=$row3['com_id'];
            
    $query1="SELECT * FROM company_master_table1 WHERE `email`='".$com_email."'";
    $result5=mysqli_query($conn,$query1);
    if($result5 !== FALSE)
    { ?>


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
    }
}
}?>
</div>