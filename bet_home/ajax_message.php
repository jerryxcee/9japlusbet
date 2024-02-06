<?php
ob_start();
session_start();
include'connect.php';
$username = $_SESSION['username'];
if(!isset($_SESSION['username'])){
  header("Location:../index.php");
  exit();
}
?>

<?php
if (isset($_POST['done'])) {
  $msg = $_POST['msg'];
  $game_id = $_POST['game_id'];

    if ($_POST['msg'] == "") {
      #do notting#
    }else{

  mysql_query("INSERT INTO cooments(id, game_pin, username, comments)VALUES('','$game_id','$username','$msg')");

      }
    exit();
  }
 else if(isset($_POST['game_id'])){
  $game_id = $_POST['game_id'];
 
    $qux = mysql_query("SELECT id, game_pin, username, comments, comment_time from cooments WHERE game_pin = '$game_id'");
      while ($rex=mysql_fetch_array($qux)) {
    ?>
    <p style="font-size: 13px; font-weight: bold; color: #555; padding: 10px; text-transform: capitalize;"> <?php echo "$rex[2]"; ?></p>
        <div style="background-color: #eee; border-radius: 30px;">
        <br><br>
          <p style="margin-top: 8px; box-shadow:0 0 1px rgba(0,0,0,0.3); color: #555;">
           <p style="word-wrap: break-word; word-spacing: 2px; text-align: justify-all; padding: 10px; margin-top: -15px;">
            <?php
              echo $rex[3];
            ?>
            </p>
          </p>
          <br>
              <small class="axr" style="float: right; font-size: 10px; margin-right: 20px;">
             <?php 
             $str = $rex[4];
            echo date('d F Y', strtotime($str)); 
              ?>
              </small>
           
        </div>
        <br>
    <?php
      }
      }
   ?>