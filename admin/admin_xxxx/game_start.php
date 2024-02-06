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

                    <th>Away team</th>
                    <th>Game date</th>
                    <th>Update</th>
                  </tr>
                </thead>
                <?php 
                $star = "1";
                  $ban = mysql_query("SELECT id, created_by, team_played, possible_outcome, bet_pin, game_status FROM create_game ORDER BY id DESC");
                  while ($nas = mysql_fetch_array($ban)) {

                ?>
                <thead>

                  <tr style="background-color:  <?php if ($nas[5] == "$star") echo '#FF9999'; ?>;">
                    <td><?php echo $nas[0]; ?></td>
                    <td><?php echo "$nas[1]"; ?></td>
                    
                    <td><?php echo "$nas[2]"; ?></td>
                    <td><?php echo "$nas[3]"; ?></td>
                     <?php
                        if (isset($_POST[$nas[0]])) {
                          $status = mysql_escape_string($_POST['status']);

                          mysql_query("UPDATE create_game SET game_status = '$status' WHERE id = '$nas[0]'");
                        }
                      ?>
                    <form action="game_start.php?id=<?php echo $nas[0]; ?>" method="post">
                    <td>
                       
                      <select name="status">
                        <option value="" <?php if ($nas[5] == $star) echo 'selected="selected"'; ?>>Pending</option>
                        <option value="1" <?php if ($nas[5] == $star) echo 'selected="selected"'; ?>>Started</option>
                      </select>
                    </td>

                 
                    
                    </td>
                    
                    <td>
                
                 
                  <a href="game_start.php?id=<?php echo $nas[0]; ?>">
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

    <!-- Button trigger modal -->
<?php
include('footer.php');
?>