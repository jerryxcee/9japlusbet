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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Admin Dashboard</h4>
                </div>
            </div>
            <?php
           $count_student = mysql_query("SELECT count(*) from users");
           $rp = mysql_fetch_array($count_student);
            ?>
            <div class="row">
                 <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa dashboard-div-icon"><h1 style="margin-top: -6px;"><?php echo $rp[0]; ?></h1></i>
                         <h5>Number of users</h5>
                    </div>
                </div>
                <?php
                $count_data = mysql_query("SELECT count(*) from all_teams");
                $rw = mysql_fetch_array($count_data);
                ?>
                 <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa dashboard-div-icon"><h1 style="margin-top: -6px;"><?php echo $rw[0]; ?></h1></i>
                         <h5>Number of teams</h5>
                    </div>
                </div>
                <?php
               $count_audothor = mysql_query("SELECT count(*) from avaliabe_games");
               $ru = mysql_fetch_array($count_audothor);
                ?>
                 <div class="col-md-4 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                          <i  class="fa fa dashboard-div-icon"><h1 style="margin-top: -6px;"><?php echo $ru[0]; ?></h1></i>
                         <h5>Number of avaliable games</h5>
                    </div>
                </div>
                

            </div>
           
        </div>
    </div>
        <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
<?php
include'footer.php';
?>