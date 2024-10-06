<?php 

// $s_area=$_POST['area'];
// echo $s_area;exit;
 
if(isset($_POST['skill']))
{
    include 'config.php';
    //echo $_POST['skill'];
    $s_area=$_POST['area'];
    //echo $s_area;
    //$s_skill=$_POST['s_skill'];
    $query="SELECT * FROM worker_master INNER JOIN company_master_table1 ON worker_master.com_name = company_master_table1.company_id WHERE `wor_area`='".$s_area."'";
    $result2=mysqli_query($conn,$query);
    //echo $query;
    if($result2 !== FALSE)
    {?> <section class="w3l-content-with-photo-4">
        <!-- /content-grids-->
        <div class="content-photo-info py-5">
            <div class="container py-lg-5">
                <?php //echo $sql;exit;
     while($row2 = mysqli_fetch_array($result2))
        {//echo $query;?><?php
        
        //echo $sql;exit;
        //$user = mysqli_fetch_assoc($result);
        //echo "hey";exit;?>
                <table border="1px">
                    <tr>
                        <td><?php echo $row2['wor_name'];?> </td>
                        <td><?php echo $row2['com_name'];?></td>
                    </tr>
                </table>
 <?php } 
    }?>
            </div>
        </div>
    </section>
    <?php //header("location:services.php");

}
else
{
    //include 'config.php';
    //session_start();
    $customer_id=$_SESSION['cost_logged_in'];
    $sql3="SELECT * FROM worker_master WHERE wor_email='".$customer_id."'";
    $result3=mysqli_query($conn,$sql3);
    //echo $sql3;exit;
    if($result3 !== FALSE)
    {   //echo $sql3;exit;
        while($row3=mysqli_fetch_array($result3))
        {
            $customer_city_id=$row3['wor_city'];
            echo $customer_city_id;
        }
    }
    $sql4="SELECT * FROM city_master WHERE city_id='".$customer_city_id."'";
    $result4=mysqli_query($conn,$sql4);
    //echo $sql4;exit;
    if($result4 !== FALSE)
    {   //echo $sql3;exit;
        while($row4=mysqli_fetch_array($result4))
        {
            $customer_city=$row4['city_name'];
            echo $customer_city;exit;
        }
    }
    header("location:services.php");
    //echo "Not Found Anything Here";
}
?>