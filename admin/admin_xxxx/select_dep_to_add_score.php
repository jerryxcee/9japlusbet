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
                        <h1 class="page-head-line">Add new game</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <?php
                        if (isset($_POST['add_student'])) {
                          $home_team = mysql_escape_string($_POST['home_team']);
                          $away_team = mysql_escape_string($_POST['away_team']);
                          $game_time = mysql_escape_string($_POST['game_time']);
                          $league = mysql_escape_string($_POST['league']);
                          $game_day = mysql_escape_string($_POST['game_day']);
                          $game_status = "active";

                         $add_student =  mysql_query("INSERT INTO avaliabe_games(id, home_team, away_team, game_time, league, game_status, game_day)VALUES('','$home_team','$away_team','$game_time', '$league','$game_status','$game_day')");
                         if ($add_student == 1) {
                          ?>
                          <div style="color: green; font-weight: bold; text-align: center; font-size: 15px; text-transform: capitalize;">
                          <?php
                           echo "<strong>Game Added Successfully.<strong>";
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
                       <form action="select_dep_to_add_score.php" method="POST">
                       <div class="form-group">
                          <label for="exampleInputPassword1">Home team</label>
                          <select class="form-control" name="home_team" required="required">
                          <?php
                          $law = mysql_query("SELECT id, team_name FROM all_teams");
                          while ($gax = mysql_fetch_array($law)) {
                          ?>
                          <option><?php echo "$gax[1]"; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Away team</label>
                          <select class="form-control" name="away_team" required="required">
                          <?php
                          $law2 = mysql_query("SELECT id, team_name FROM all_teams");
                          while ($gax2 = mysql_fetch_array($law2)) {
                          ?>
                          <option><?php echo "$gax2[1]"; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Game day</label>
                          <select class="form-control" name="game_day" required="required">
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Game time</label>
                          <input type="text" name="game_time" class="form-control" placeholder="Game time" required="required">
                        </div>

                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">Add League</label>
                          <select class="form-control" name="league" required="required">
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
                        
                        <button class="btn pull-right" type="submit" name="add_student" style="background-color: #00468C; color: #fff; border-radius: 0px;">ADD GAME</button>
                          
                      </form>
                    </div>
                  </div>
                </div>
                   
        </div>
    </div>
<?php
include'footer.php';
?>