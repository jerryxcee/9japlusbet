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
                        <h1 class="page-head-line" style="text-transform: uppercase;">Update games results<span class="pull-right"></span></h1>
                    </div>
              </div>
              <table class="table table-striped table-bordered table-hover" style="background-color: #fff;">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Home team</th>
                    <th></th>
                    <th>Away team</th>
                    <th>Game date</th>
                    <th>Team</th>
                    <th>Possible out come</th>
                    <th>Update</th>
                  </tr>
                </thead>
                <?php 
                  $ban = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games ORDER BY id DESC");
                  while ($nas = mysql_fetch_array($ban)) {
                ?>
               <?php 
                  $wan = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome, game_status FROM avaliabe_games WHERE id = '$nas[0]'");
                  $oas = mysql_fetch_array($wan);
                ?>
                <thead>
                  <tr style="background-color:  <?php if ($oas[7] == 'inactive') echo '#FF9999'; ?>;">
                    <td><?php echo $nas[0]; ?></td>
                    <td><?php echo "$nas[1]"; ?></td>
                    <td>v</td>
                    <td><?php echo "$nas[2]"; ?></td>
                    <td><?php echo "$nas[3]"; ?></td>
                     <?php
                        if (isset($_POST[$nas[0]])) {
                          $team = mysql_escape_string($_POST['team']);
                          $possible = mysql_escape_string($_POST['possible']);
                            $status = "inactive";

                          mysql_query("UPDATE avaliabe_games SET team_win = '$team', posssible_outcome = '$possible', game_status = '$status' WHERE id = '$nas[0]'");
                        }
                      ?>
                    <form action="dynamic.php?id=<?php echo $nas[0]; ?>" method="post">
                    <td>

                      <div id="win" style="display:block;">
                      <select name="team">
                        <option value="<?php echo $oas[1]; ?>" <?php if ($oas[1] == $oas[5]) echo 'selected="selected"'; ?>><?php echo "$nas[1]"; ?></option>
                        <option value="<?php echo $oas[2]; ?>" <?php if ($oas[2] == $oas[5]) echo 'selected="selected"'; ?>><?php echo "$nas[2]"; ?></option>
                        <option value="both">both (select for draw)</option>
                      </select>
                      </div>

                    </td>

                    <td>
                       
                      <select onchange="showstuff(this.value);" name="possible">
                        <option value="win" <?php if ($oas[6] == 'win') echo 'selected="selected"'; ?>>win</option>
                        <option value="draw" <?php if ($oas[6] == 'draw') echo 'selected="selected"'; ?>>draw</option>
                      </select>
                    </td>
                    
                    </td>
                    
                    <td>
                
                 
                  <a href="dynamic.php?id=<?php echo $nas[0]; ?>">
                  <button type="submit" name="<?php echo $nas[0]; ?>" class="btn btn-primary">
                    Update
                  </button>
                </a>

                </form>

                      </td>
                  </tr>
                </thead>
                <?php
                  }
                ?>
              </table>
        </div>
    </div>


<script type="text/javascript">
function showstuff(element){
    document.getElementById("win").style.display = element=="win"?"block":"none";
    document.getElementById("draw").style.display = element=="draw"?"block":"none";
}
</script>


    <!-- Button trigger modal -->
<?php
include('footer.php');
?>