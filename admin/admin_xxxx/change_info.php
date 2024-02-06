<?php
ob_start();
session_start();
include'connect.php';
$email_a = $_SESSION['login'];
include('header.php');
if(!isset($_SESSION['login']))
{
  header("Location: ../index.php");
  exit();
}
?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="col-md-5 col-md-offset-3">
  <div class="panel panel-default">
      <div class="panel-body">
      <?php
      if (isset($_POST['rr'])) {
            $ema = mysql_escape_string($_POST['email']);
            $pass = mysql_escape_string($_POST['pass']);

           $ee = mysql_query("UPDATE admin SET email = '$ema', password = '$pass'");

            if ($ee == 1) {
                echo "Your login informations updated ssuccesfully";
            }else{
                echo "sorry an error occured during updated";
            }
      }
      ?>
      <h5 style="text-align: center; font-weight: bold;">Enter your new Email and Password to Change your login details </h5>
      <hr>
        <form action="change_info.php" method="POST">
                    <div class="form-group">
                    <label>Enter New email</label>
                        <input class="form-control input-sm" name="email" type="email" placeholder="Enter New email" required="">
                    </div>
                    <div class="form-group">
                    <label>Enter New Password</label>
                        <input class="form-control input-sm" name="pass" type="Password" placeholder="Enter New Password" required="">
                    </div>
                    <hr/>
                    <div class="clearfix"></div>
                    <div class="center">
                 
                          <button type="submit" name="rr" class="btn btn-primary">Update login info</button>
                      
                    </div>
                </form>     
            </div>
  </div>
</div>

    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>

    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
