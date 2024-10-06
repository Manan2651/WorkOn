<?php
include 'config.php';
if(isset($_POST['insert']))
{
        //echo "fdsfd";print_r($_POST);
        $wor_name=$_POST['wor_name'];
        $wor_gender=$_POST['wor_gender'];
        $wor_email=$_POST['wor_email'];
        $wor_password=$_POST['wor_password'];
        $wor_contact=$_POST['wor_contact'];
        $wor_address=$_POST['wor_address'];
        $wor_city=$_POST['city'];
        $wor_area=$_POST['area'];
        $wor_exp=$_POST['wor_exp'];
        $skill_list=$_POST["specialities"];
        $wor_aadhaar=$_POST['wor_aadhaar'];
        $identity_doc = "identity_doc/";  
        $identity_doc = $identity_doc.basename($_FILES['identity_doc']['name']);
        $target_path = "uploads/";  
        $target_path = $target_path.basename($_FILES['file_image']['name']); 
        //$target_path=implode(',',$_FILES['file_image']['name']);
        $description=$_POST['description'];
        $visit_charges=$_POST['visit_charges'];	
        //var_dump($target_path);
        //var_dump($_FILES);
        $q = "SELECT * FROM worker_master WHERE wor_email= '".$wor_email."'";
        $result = mysqli_query($conn, $q);
        if($row = mysqli_fetch_assoc($result))
        {
            echo '<script type="text/javascript">alert("Data Already Exist"); window.location.href = "signup_worker.php";</script>;';
        }
        else
        {
            if(move_uploaded_file($_FILES['file_image']['tmp_name'], $target_path))
            { if (move_uploaded_file($_FILES['identity_doc']['tmp_name'], $identity_doc)){
               // $con = mysqli_connect('localhost','root','','demo');
                // $query = "INSERT INTO news(title,description,image_path) VALUES('$title','$description','$target_path')";
                $query = "INSERT INTO worker_master(wor_name,wor_gender,wor_email,wor_password,wor_contact,wor_address,wor_city,wor_area,wor_skills,wor_exp,wor_profile,identity_doc,description,wor_aadhar,wor_self_emp,wor_verified,wor_block,visit_charges) VALUES ('$wor_name','$wor_gender','$wor_email','$wor_password','$wor_contact','$wor_address','$wor_city','$wor_area','$skill_list','$wor_exp','$target_path','$identity_doc','$description','$wor_aadhaar',1,0,0,'$visit_charges')";
                //echo $query;exit;
                $result = mysqli_query($conn,$query);
                if($result === true)
                echo '<script type="text/javascript">alert("SignUp Succesfully"); window.location.href = "login.php";</script>;';
                else
                echo '<script type="text/javascript">alert("Please Insert Proper Data"); window.location.href = "signup_worker.php";</script>;';
            }
            } 
            else
            {  
            echo "Sorry, file not uploaded, please try again!";  
            }
        }
}
// $query = "INSERT INTO `company_master_table` (`company_id`, `com_name`, `email`,`contact`, `password`, `address`, `city`,	`state`,`hiring`,`skill_list`,`profile_pic`,`description`) VALUES (NULL,'$com_name', '$email','$contact', '$password', '$address', '$city',	'$state','$hiring','$skill_list','$profile_pic','$description')";
//echo $query;exit;
/*$result = mysqli_query($conn, $query);
if($result === true)
{
    header("location: index.php");
}
else
{
  header("location: signup_company.php");
}*/
else {?>
<?
/*
Step 1: Connect to MySQL Server / DBMS
mysql_connect(servername,username,password)
	Connection Successful : Connection Reference
	Connection Unsuccessful : False

Step 2: Select database
mysql_select_db(database name,connection variable)
	Connection Successful : True
	Connection Unsuccessful : False

Step 3: Execute Query
mysql_query(query,connection variable)
	INSERT,DELETE,UPDATE Query
		Query Execution Successful : True
		Query Execution Unsuccessful : False
	SELECT Query
		Query Execution Successful : Result Set
		Query Execution Unsuccessful : False

Step 4: Display Result(ONLY In case of Select Query)
mysql_fetch_array(resultset)
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="signup_worker.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  
</head>

<body>
    <form action="signup_worker.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <ul class="progres_bar">
                            <li>Personal Infromation</li>
                            <li>Company Location</li>
                            <li>Company Registration Form</li>
                            <li>Director's Detail</li>
                        </ul>
                    </div>
                    <div class="right-side ">
                        <div class="main active">
                            <div class="manage">
                                <h3>Manage your buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="written_name" type="text" name="wor_name"
                                        require required> <label>Worker Name</label> </div>
                                <div class="input_text">

                                    <select name="wor_gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input type="text" name="wor_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" require required>
                                    <label>Email</label>
                                </div>
                                <div class="input_text">
                                    <input type="number" name="wor_contact" pattern="^\d{10}$" required="required" require required>
                                    <label>Contact Number</label>
                                    <i class="fa fa-eye-slash con_eye"></i>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="pass_type" type="password" name="wor_password"
                                        require required> <label>Password</label> <i class="fa fa-eye-slash password_eye"></i>
                                </div>
                                <div class="input_text">
                                    <input type="number" name="visit_charges" min="50" max="350" require required>
                                    <label>Visit Charges</label>
                                    <i class="fa fa-eye-slash con_eye"></i>
                                </div>
                            </div>
                            <div class="agree"> <span><i class="fa fa-check"></i></span>
                                <p>I agree to the <a href="#"> Terms of Service</a>.</p>
                            </div>
                            <div class="button step_1"> <input type="button" class="next_btn nb" value="Next" /></div>
                        </div>

                        <!-- 2nd page -->

                        <div class="main">
                            <div class="manage">
                                <h3>Manage your buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">

                                <div class="input_text"> <textarea name="wor_address" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text">

                                    <select id="city" name="city" style="color:black;">
                                        <option value="">Select city</option>
                                        <?php  $query = "SELECT * FROM city_master"; 
                                                $result = $conn->query($query); 
                                            if($result->num_rows > 0){ 
                                                while($row = $result->fetch_assoc()){  
                                                    echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">city not available</option>'; 
                                            } 
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="agree"> <span><i class="fa fa-check"></i></span>
                        <p>is Company Hiring ?</p>
                    </div> -->

                            <div class="input_div">
                                <!-- <div class="input_text"> -->
                                <select id="area" name="area"
                                    style="height: 45px;width: 100%;outline: 0;border: 1px solid #b1b1b1;border-radius: 5px;padding: 5px;box-sizing: border-box;transition: all 0.5s;cursor: pointer;color:black;">
                                    <option value="">Select city first</option>
                                </select>
                                <!-- </div> -->
                            </div>

                            <div class="button step_2 m_top">
                                <input type="button" class="prev_btn nb" value="Previous" /> <input type="button"
                                    class="next_btn nb" value="Next" />
                            </div>
                            <!--<button class="prev_btn">Previous</button> <button class="next_btn">Next</button> </div> -->
                        </div>

                        <!-- 3rd page -->

                        <div class="main ">
                            <div class="manage">
                                <h3>Manage your buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                <div class="input_text">
                                  
                                    <select id="specialities" name="specialities" style="color:black;">
                                        <option value="">Select Skills</option>
                                        <?php  $query = "SELECT * FROM skill_list"; 
                                                $result = $conn->query($query); 
                                            if($result->num_rows > 0){ 
                                                while($row = $result->fetch_assoc()){  
                                                    echo '<option value="'.$row['name'].'">'.$row['name'].'</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">Skill not available</option>'; 
                                            } 
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="written_name" type="number" name="wor_exp"
                                        require required>
                                    <label>Write Your Total Years of Exerience</label>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="written_name" type="number" name="wor_aadhaar"
                                        require required>
                                    <label>Write Your Aadhaar Card Number</label>
                                </div>
                            </div>
                            <div class="input_div">
                                Upload Aadhaar Card Photo<input type="file" name="identity_doc">
                            </div>


                            <div class="button step_2 m_top">
                                <input type="button" class="prev_btn nb" value="Previous" /> <input type="button"
                                    class="next_btn nb" value="Next" />
                            </div>
                            <!-- <div class="button step_2 step_3"> <button class="prev_btn">Previous</button> <button class="next_btn">Next</button> </div> -->
                        </div>

                        <!-- 4th page -->
                        <div class="main ">
                            <div class="manage">
                                <h3>Manage your buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                Your Profile Photo
                                <input type="file" name="file_image">
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <textarea name="description" rows="10"
                                        placeholder="Description"></textarea></div>
                                <!-- <div class="input_text"> <input type="number"  require required> <label>Phone Number</label> </div>
                        <div class="input_text"> <input type="text"  require required> <label>Email Id</label> </div> -->
                            </div>
                            <div class="agree_submit"> <span><i class="fa fa-check"></i></span>
                                <p>I hereby declare that information provided in the online registration form is true to
                                    the best of my knowledge.</p>
                            </div>
                            <div class="button step_2 m_top">
                                <input type="button" class="prev_btn nb" value="Previous" />
                                <!-- <div class="button step_2 step_4"> <button class="prev_btn">Previous</button> -->
                                <input class="next_btn nb" type="submit" name="insert">
                            </div>
                        </div>
                        <div class="main ">
                            <div class="manage">
                                <h3>Incorrect Data<span class="shown_name"></span></h3>
                                <p>Please Enter the proper  data as per format.</p>
                            </div>
                             <!-- <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg> -->
                            <div class="h4_txt">
                                <h4>For further querries you can contact us on 011-123456789</h4>
                            </div>
                            <div class="button step_2 m_top">
                                <input type="button" class="prev_btn nb" value="Previous" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="signup_worker2.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#city').on('change', function() {
        var cityID = $(this).val();
        if (cityID) {
            $.ajax({
                type: 'POST',
                url: 'ajaxpro.php',
                data: 'city_id=' + cityID,
                success: function(html) {
                    $('#area').html(
                        '<option value="">Select city first</option>'
                    );
                    $('#area').html(html);
                }
            });
        } else {
            $('#area').html('<option value="">Select city first</option>');
        }
    });

});
</script>

</html>
<?php }?>