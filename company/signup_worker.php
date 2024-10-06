<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['com_email']))
{
    header("location: login.php");
} 
if(isset($_POST['insert']))
{
        $sql2="SELECT * FROM company_master_table1 WHERE email='".$_SESSION['com_email']."'";
        $result5=mysqli_query($conn,$sql2);
        $user=mysqli_fetch_assoc($result5);
        $com_name=$user['company_id'];
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
        $identity_doc = "identity_doc/";  
        $identity_doc = $identity_doc.basename($_FILES['identity_doc']['name']);
        $target_path = "uploads/";  
        $target_path = $target_path.basename($_FILES['file_image']['name']); 
        //$target_path=implode(',',$_FILES['file_image']['name']);
        $description=$_POST['description'];	
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
                $query = "INSERT INTO worker_master(wor_name,wor_gender,wor_email,wor_password,wor_contact,wor_address,wor_city,wor_area,wor_skills,wor_exp,wor_profile,identity_doc,description,com_name,wor_self_emp,	wor_verified,wor_block) VALUES ('$wor_name','$wor_gender','$wor_email','$wor_password','$wor_contact','$wor_address','$wor_city','$wor_area','$skill_list','$wor_exp','$target_path','$identity_doc','$description','$com_name',0,0,0)";
                //echo $query;exit;
                $result = mysqli_query($conn,$query);
                if($result === true)
                echo '<script type="text/javascript">alert("SignUp Succesfully"); window.location.href = "index.php";</script>;';
                else
                echo '<script type="text/javascript">alert("Please Insert Proper Data"); window.location.href = "signup_worker.php";</script>;';
            }
            } 
            else
            {  
            // echo "Sorry, file not uploaded, please try again!";
            echo '<script type="text/javascript">alert("Sorry, file not uploaded, please try again!"); window.location.href = "signup_worker.php";</script>;';  
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <link href="core.min.css" rel="stylesheet" />
    <!-- <link href="signup_company.css" rel="stylesheet"> -->
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" /> -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <style>
    /* @import '~mdb-ui-kit/css/mdb.min.css'; */

    @media (min-width: 1025px) {
        .h-custom {
            height: 130vh !important;
        }
    }

    .select {
        height: 45px;
        width: 100%;
        outline: 0;
        border: 1px solid #b1b1b1;
        border-radius: 5px;
        padding: 5px;
        box-sizing: border-box;
        transition: all 0.5s;
        cursor: pointer;
        color: lightslategray;
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        border-color: black;
        /* background-color:black; */
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #a1c4fd;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
    }

    .form-control {
        color: black;
    }

    .form-outline .form-control {
        min-height: auto;
        padding: 0.33em 0.75em;
        border: 10;

        /* background-color:black; */
        color: black;
        /* background: #0000000e; */
        transition: all .2s linear;
    }

    .bg-indigo {
        background-color: #4835d4;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-indigo {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-indigo {
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    }
    </style>
</head>

<body>
    <form action="e.php" method="POST" enctype="multipart/form-data">
        <section class="h-100 h-custom gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="text" id="form3Examplev2"
                                                            class="form-control form-control-lg" required="required"
                                                            name="wor_name" />
                                                        <label class="form-label" for="form3Examplev2">Your
                                                            Name</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="number" id="form3Examplev3" name="wor_contact"
                                                            class="form-control form-control-lg" pattern="^\d{10}$"
                                                            required="required" />
                                                        <label class="form-label" for="form3Examplev3">Contact
                                                            Number</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <select name="wor_gender" class="select">
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="form-outline">
                                                        <input type="number" id="form3Examplev3" name="wor_exp"
                                                            class="form-control form-control-lg"
                                                            required="required" />
                                                        <label class="form-label" for="form3Examplev3">Your Exerience</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Examplev4"
                                                        class="form-control form-control-lg" name="wor_email"
                                                        required="required"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                                    <label class="form-label" for="form3Examplev4">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
                                                    <div class="mb-4 pb-2">
                                                        <div class="form-outline">
                                                            <input type="text" id="form3Examplev4"
                                                                class="form-control form-control-lg" name="wor_password"
                                                                required="required" />
                                                            <label class="form-label"
                                                                for="form3Examplev4">Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4 pb-2">
                                                        <select id="specialities" name="specialities" class="select">
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
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <textarea type="text" id="form3Examplev4" name="address"
                                                        class="form-control form-control-lg"
                                                        required="required"></textarea>
                                                    <label class="form-label" for="form3Examplev4">Address</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">

                                                    <select id="city" name="city" class="select">
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
                                                <div class="col-md-6">


                                                    <select id="area" name="area" class="select">
                                                        <option value="">Select city first</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 bg-indigo text-white">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Your Details</h3>

                                            <div class="row">
                                                <div class="col-md-5 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <input type="number" id="form3Examplea4" min="50" max="300"
                                                            name="visit_charges" class="form-control form-control-lg"
                                                            required="required" />
                                                        <label class="form-label" for="form3Examplea4">Visit
                                                            Charges</label>
                                                    </div>

                                                </div>
                                                <div class="col-md-7 mb-4 pb-2">

                                                    <div class="form-outline form-white">
                                                        <input type="text" id="form3Examplea5" name="wor_aadhaar"
                                                            class="form-control form-control-lg" required="required" />
                                                        <label class="form-label" for="form3Examplea5">Aadhaar Card
                                                            Number</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" style="color:white">Upload Aadhaar Card
                                                        Photo
                                                    </label>
                                                    <!-- <input type="file" name="identity_doc"> -->
                                                    <input type="file" id="form3Examplea2" name="identity_doc"
                                                        class="form-control form-control-lg" />

                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline form-white">
                                                    <label class="form-label" style="color:white">Upload Your Photo
                                                    </label>
                                                    <input type="file" id="form3Examplea2" name="file_image"
                                                        class="form-control form-control-lg" />

                                                </div>
                                            </div>
                                            <div class="mb-4 pb-2">
                                                <div class="form-outline">
                                                    <textarea type="text" id="form3Examplev4"
                                                        class="form-control form-control-lg" name="description"
                                                        required="required" style="color:white"></textarea>
                                                    <label class="form-label" for="form3Examplev4"
                                                        style="color:white">Description</label>
                                                </div>
                                            </div>
                                            <!-- <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                                <input class="form-check-input me-3" type="checkbox" value=""
                                                    id="form2Example3c" />
                                                <label class="form-check-label text-white" for="form2Example3">
                                                    I do accept the <a href="#!" class="text-white"><u>Terms and
                                                            Conditions</u></a> of your site.
                                                </label>
                                            </div> -->

                                            <input type="submit" class="btn btn-light btn-lg"
                                                data-mdb-ripple-color="dark">
                                            <!-- Register</button> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
        </from>
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