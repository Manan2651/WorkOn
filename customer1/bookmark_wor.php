<?php
    $customer_id=$_SESSION['cost_logged_in'];
    $sql3="SELECT * FROM bookmark_master WHERE from_id='".$customer_id."'";
    $result3=mysqli_query($conn,$sql3);
    //echo $sql3;exit;
    if($result3 !== FALSE)
    {   //echo $sql3;exit;?>
<div class="container py-lg-5">
    <?php
        while($row3=mysqli_fetch_array($result3))
        {
            $wor_id=$row3['wor_id'];
            // echo $customer_city_id;
       
    $query1="SELECT * FROM worker_master WHERE `wor_email`='".$wor_id."'";
    // echo $query1;exit;
    $result5=mysqli_query($conn,$query1);
    // echo $query1;
    if($result5 !== FALSE)
    { //echo $query1;?>
    <!-- <section class="w3l-content-with-photo-4"> -->
    <!-- /content-grids-->
    <!-- <div class="content-photo-info"> -->

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
    }
}
}
?>
</div>