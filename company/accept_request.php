<?php
include 'config.php';
?>
<?php 
session_start();
if(!isset($_SESSION['com_email']))
{
    header("location: login.php");
} 
?>
<?php
// session_start();
$user_id=$_GET['from_id'];
$to_id=$_SESSION['com_email'];
$sql="UPDATE `request_master` SET `response` = '1' WHERE from_id='".$user_id."' AND to_id='".$to_id."'";
$run_sql=mysqli_query($conn,$sql);
if($run_sql == true)
{
    $sql1="SELECT * FROM `company_master_table1`WHERE email='".$to_id."'";// SET `response` = '1' WHERE from_id='".$user_id."' AND to_id='".$to_id."'";
    $result=mysqli_query($conn,$sql1);
    if($result !== FALSE){
     //echo $sql1;exit;    
        while($row = mysqli_fetch_array($result))
        { 
            // echo $sql1;exit;              
            $com_id=$row['company_id'];  
            //echo $com_id;exit; 
        }
    }     
    $sql2="UPDATE `worker_master` SET `com_name`='$com_id' WHERE wor_email='".$user_id."'";
    //echo $sql2;exit;
    $run_sql2=mysqli_query($conn,$sql2);
    if($run_sql2 == true)
    header("location: about.php");
}
else
{
    echo "query not worked";
}
?>