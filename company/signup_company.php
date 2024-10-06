<?php
include 'config.php';
if(isset($_POST['insert']))
{
        //echo "fdsfd";print_r($_POST);
        $com_name=$_POST['com_name'];
        $email=$_POST['email'];
        $fix_c=$_POST['fix_c'];
        $contact=$_POST['contact'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $area=$_POST['area'];
        $com_aadhaar=$_POST['com_aadhaar'];
        $skill_list=$_POST["specialities"];
        $identity_doc = "identity_doc/";  
        $identity_doc = $identity_doc.basename($_FILES['identity_doc']['name']);
        $target_path = "uploads/";  
        $target_path = $target_path.basename($_FILES['file_image']['name']); 
        //$target_path=implode(',',$_FILES['file_image']['name']);	
        $description=$_POST['description'];	
        //var_dump($target_path);
        //var_dump($_FILES);
        $q = "SELECT * FROM company_master_table1 WHERE email= '".$email."'";
        $result = mysqli_query($conn, $q);
        if($row = mysqli_fetch_assoc($result))
        {
            echo "Data Already exist";
        }
        else
        {
            if(move_uploaded_file($_FILES['file_image']['tmp_name'], $target_path))
            {  
                if (move_uploaded_file($_FILES['identity_doc']['tmp_name'], $identity_doc)){
                // $query = "INSERT INTO news(title,description,image_path) VALUES('$title','$description','$target_path')";
                $query = "INSERT INTO company_master_table1(com_name,email,contact,password,address,city,area,visit_charges,skill_list,profile_pic,discription,com_verified,identity_doc,com_aadhar,com_block) VALUES ('$com_name', '$email','$contact', '$password','$address','$city','$area','$fix_c','$skill_list','$target_path','$description',0,'$identity_doc','$com_aadhaar',0)";
                
                $result = mysqli_query($conn,$query);
                if($result === true)
                    header("location:index.php");
                else
                    header("location:signup_company.php");
            } 
            }
            else
            {  
            echo "Sorry, file not uploaded, please try again!";  
            }
        }
}
else {?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="signup_company.css" rel="stylesheet">
</head>

<body>
    <form action="signup_company.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <ul class="progres_bar">
                            <li>Personal Vitae</li>
                            <li>Company Registration Form</li>
                            <li>Company Location</li>
                            <li>Director's Detail</li>
                        </ul>
                    </div>
                    <div class="right-side ">
                        <div class="main active">
                            <div class="manage">
                                <h3>Manage your  buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="written_name" type="text" name="com_name" require
                                        required> <label>Company Name</label> </div>

                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input type="text" name="email" require required>
                                    <label>Email</label>
                                </div>
                                <div class="input_text"> <input type="number" name="contact" require required>
                                    <label>Phone</label>
                                </div>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <input class="pass_type" type="password" name="password"
                                        require required> <label>Password</label> <i
                                        class="fa fa-eye-slash password_eye"></i> </div>
                                <div class="input_text"> <input type="number" min="50" max="300"
                                        name="fix_c" require required> <label>Fix Charges</label> <i
                                        class="fa fa-eye-slash con_eye"></i> </div>
                            </div>
                            <div class="agree"> <span><i class="fa fa-check"></i></span>
                                <p>I agree to the <a href="#"> Terms of Service</a>.</p>
                            </div>
                            <div class="button step_1"> <input type="button" class="next_btn nb" value="Next" /></div>
                        </div>

                        <!-- 2nd page -->

                        <div class="main">
                            <div class="manage">
                                <h3>Manage your freelance buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                <!-- <div class="input_text"> <select>
                                <option>Type of entity</option>
                                <option>OPC</option>
                                <option>LLP</option>
                                <option>Private Limited Company</option>
                                <option>Public Limited Company</option>
                            </select> </div> -->
                                <div class="input_text"> <textarea name="address" placeholder="Address"></textarea>
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
                                <h3>Manage your freelance buisness with us</h3>
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
                                <div class="input_text"> <input class="written_name" type="number" name="com_aadhaar"
                                        require required>
                                    <label>Write Your Aadhaar Card Number</label>
                                </div>
                            </div>
                            <div class="input_div">
                                Upload Aadhaar Card Photo<input type="file" name="identity_doc">
                            </div>

                            <div class="input_div">
                                Upload Your Profile
                                <input type="file" name="file_image">
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
                                <h3>Manage your freelance buisness with us</h3>
                                <p>Take less than 10 minutes to fill out the information needed to register ypour
                                    buisness.</p>
                            </div>
                            <div class="input_div">
                                <div class="input_text"> <textarea name="description" rows="10"
                                        placeholder="Description"></textarea></div>
                                <!-- <div class="input_text"> <input type="number" require required> <label>Phone Number</label> </div>
                        <div class="input_text"> <input type="text" require required> <label>Email Id</label> </div> -->
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
                                <h3>Congratulations <span class="shown_name"></span></h3>
                                <p>Your buisness account have been successfully registered.</p>
                            </div> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>
                            <div class="h4_txt">
                                <h4>For further querries you can contact us on 011-123456789</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="signup_company2.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    </form>
</body>
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