<?php
ob_start();
session_start();
include'connect.php';
$username = $_SESSION['username'];
if(!isset($_SESSION['username'])){
  header("Location:../index.php");
  exit();
}

$sql = mysql_query("SELECT id, fname, lname, email, username, phone_num, country, city, bet_pin, birth_day, birth_month, birth_year, balance, password FROM users WHERE username = '$username'");
  $row = mysql_fetch_row($sql);

if (isset($_POST['done'])) {
 // $like = mysql_escape_string($_POST['like']);
  $game_id = $_POST['game_id'];
  $like_count = 1;

    $sl = mysql_query("SELECT * FROM game_likes WHERE username = '$username' AND game_id = '$game_id'");
        if (mysql_num_rows($sl) > 0 ) {

          exit();
        }

    mysql_query("INSERT INTO game_likes (game_id, like_count, username)VALUES('{$game_id}','{$like_count}','{$username}')");

    exit();
}
    
 else if(isset($_POST['game_id'])){
  $game_id = $_POST['game_id'];
 
    $qux = mysql_query("SELECT sum(like_count) as like_count from game_likes WHERE game_id = '$game_id'");
      while ($rex=mysql_fetch_array($qux)) {
    
        echo "$rex[like_count]";
      }
}
   ?>