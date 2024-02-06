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
                        <h1 class="page-head-line">Add league</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <?php
                        if (isset($_POST['add_student'])) {
                          $league_name = mysql_escape_string($_POST['league_name']);

                         $add_student =  mysql_query("INSERT INTO leages(id, league_name)VALUES('','$league_name')");
                         if ($add_student == 1) {
                          ?>
                          <div style="color: green; font-weight: bold; text-align: center; font-size: 15px; text-transform: capitalize;">
                          <?php
                           echo "<strong>$league_name Added Successfully<strong>";
                           ?>
                           <br>
                           <a href="" class="btn" name="add_student" style="background-color: #00468C; color: #fff; border-radius: 0px;"><i class="fa fa-arrow-left"></i>&nbsp;Go Back</a>
                           </div>
                           <?php
                           exit();
                         }else{
                          echo "SORRY AN ERROR OCCURED DURRING THIS OPERATION";
                          exit();
                         }
                        }
                        ?>
                        <div class="panel-body">
                       <form action="upload.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1">League name</label>
                          <input type="text" name="league_name" class="form-control" placeholder="League name" required="required">
                        </div>
                        
                        <button class="btn pull-right" type="submit" name="add_student" style="background-color: #00468C; color: #fff; border-radius: 0px;">ADD LEAGUE</button>
                          
                      </form>
                    </div>
                  </div>
                </div>
                   
        </div>
    </div>
<?php
include'footer.php';
?>