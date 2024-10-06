<?php 
// Include the database config file 
include_once 'config.php'; 
 
if(!empty($_POST["city_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM area_master WHERE city_id = ".$_POST['city_id'].""; 
    $result = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        //echo '<option value="">Select Area</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['area_name'].'">'.$row['area_name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Area not available</option>'; 
    } 
}
?>