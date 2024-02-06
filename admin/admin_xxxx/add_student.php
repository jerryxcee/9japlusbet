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
                        <h1 class="page-head-line">Add Team </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <?php
                        if (isset($_POST['add_student'])) {
                          $team_name = mysql_escape_string($_POST['team_name']);
                          $team_league = mysql_escape_string($_POST['team_league']);
                          

                         $add_student =  mysql_query("INSERT INTO all_teams(id, team_name, team_league)VALUES('','$team_name','$team_league')");
                         if ($add_student == 1) {
                          ?>
                          <div style="color: green; font-weight: bold; text-align: center; font-size: 15px; text-transform: capitalize;">
                          <?php
                           echo "<strong>$team_name Added Successfully to $team_league.<strong>";
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
                       <form action="add_student.php" method="POST">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Team name</label>
                          <input type="text" name="team_name" class="form-control" placeholder="Team name" required="required">
                        </div>
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Add League</label>
                          <select class="form-control" name="team_league" required="required">
                          <?php
                          $leg = mysql_query("SELECT id, league_name FROM leages");
                          while ($gas = mysql_fetch_array($leg)) {
                          ?>
                          <option><?php echo "$gas[1]"; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        </div>
                        
                        <button class="btn pull-right" type="submit" name="add_student" style="background-color: #00468C; color: #fff; border-radius: 0px;">ADD TEAM</button>
                          
                      </form>
                    </div>
                  </div>
                </div>
                   
        </div>
    </div>
<?php
include'footer.php';
?>