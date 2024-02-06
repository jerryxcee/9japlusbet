

                                <?php
include'connect.php';
include('other_header.php');
?>

                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                <div class="clearfix mb-60" style="background-color: #444;">
                               <br><br><br><br><br>
                                    <div class="r-item" style="padding-left: 60px;">
                                        <div class="col-md-7">
                                            <form action="register.php" method="POST">
                                                <input type="text" class="form-control" name="fname" placeholder="First name" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="required">

                                                <input type="text" class="form-control" name="lname" placeholder="Last name" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="required">
                                            </form>
                                        </div>
                                    </div>
                                    <br><br><br><br><br>
                                </div>



                                    
                                </ul>


                            </div>
                            <!-- widget --> 
                            
                        </div>
                        <!-- tab-pane -->
                       
                    </div>

                </div>
                <!-- main-col -->

                 <?php
                include('side_bar.php');
                ?>

            </div>
            <!-- row -->
        
        </div>
        <!-- wrapper -->

    </div>
<?php
include('footer.php');
?>
