<?php include 'config.php';?>
<?php
session_start();
if(isset($_SESSION['wor_email']))
{
        $from_id=$_SESSION['wor_email'];
        //$toid=$_SESSION['com_username'];
        $to_id=$_GET['email'];
        $q = "SELECT * FROM request_master WHERE from_id='".$from_id."' AND to_id='".$to_id."'";
        $result = mysqli_query($conn, $q);
        if($row = mysqli_fetch_assoc($result))
        {
            echo "Data Already exist";
        }
        else
        {
           // $from_id=$_SESSION['wor_email'];
            //$to_id=$_GET['email'];
            $sql="INSERT INTO request_master(from_id,to_id,response)VALUES('$from_id','$to_id','0')";
            //echo $sql;exit;
            $run_sql=mysqli_query($conn,$sql);
            if($run_sql == true)
            {
            header("location: contact.php");
            }
            else
            {
                header("location: index.php");
            }
        }
}
else{
    echo "get lost";
}
?>