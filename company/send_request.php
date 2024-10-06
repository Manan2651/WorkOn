                  <!-- <div class="col-lg-6 grid-margin stretch-card"> -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Company List</h4>
                            <p class="card-description">Send Request
                            </p>

                            <?php
                            // $from_id=$_SESSION['wor_email'];
                            // $q = "SELECT * FROM request_master WHERE  from_id='".$from_id."'";// AND to_id='".$row['email']."'";
                          
                            // $result1 = mysqli_query($conn, $q);
                            // echo $result1;exit;
                    $sql = "SELECT * FROM `company_master_table1`";
                    //echo $sql;
                    $result = mysqli_query($conn, $sql);
                    if($result !== FALSE)
                    {
                        
                        ?>
                            <?php
                                                // AND to_id='".$to_id."'
                            ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Company Email</th>
                                            <th>Company Contact</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      while($row = mysqli_fetch_array($result))
                                      {
                                       
                                       ?>
                                        <tr>
                                            <td><?php echo $row['com_name'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['contact'];?></td>
                                            <?php //$to_id=$row['email'];
                                                    //if($row['email'] === $result1){
                                                      //while($row = mysqli_fetch_array($result1))
                                                     //{?>
                                            <td><a href="see_profile.php?email1=<?php echo $row['email'];?>"><input
                                                        type="submit" value="Send Request"
                                                        style="background:#ffab2d;color:#ffffff;border:0px;border-radius:6px;padding:5px 7px;font-family:Rubik,sans-serif;font-size: 13px;"/></a>
                                            </td>
                                            <?php //}}
                                                    //else{
                                                        //while($row1 = mysqli_fetch_array($result1))
                                                        //{?>
                                            <!-- <td><a href="send_request1.php?email=<?php //echo $row['email'];?>"><input
                                                        type="submit" value="Send Request"
                                                        style="background:#ffab2d;color:#ffffff;border:0px;border-radius:6px;padding:5px 7px;font-family:Rubik,sans-serif;font-size: 13px;" /></a>
                                            </td> -->
                                            <?php //}
                                            // }
                                        }?>
                                        </tr>
                                        <?php  //}?>
                                        <!-- <td>
                                            <label class="badge badge-warning">In progress</label>
                                        </td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php
                         }?>
                    </div>
                </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
