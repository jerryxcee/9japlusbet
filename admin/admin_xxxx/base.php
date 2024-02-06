<?php
ob_start();
session_start();
include'../../connect.php';
$email = $_SESSION['login'];
include('header.php');
if(!isset($_SESSION['login']))
{
  ?>
  <strong style="color:red;">
  <?php
  header("Location: ../index.php");
  exit();
}
         //alphabets_rand
          $arr = str_split('abcdefghijklmnoprstuwxyz');
          shuffle($arr);
          $arr = array_slice($arr, 0, 10);
          $str = implode('', $arr);

          //digits_num rand
          $rand = rand(100000000000000000, 999999999999999999999);
          $hash = "$rand"."$str";
?>
<br><br><br><br><br>
<center>
<a href="an_1.php">
<button type="button" class="btn btn-primary">10,000 users</button>
</a>
<a href="an_2.php">
<button type="button" class="btn btn-primary">20,000 users</button>
</a>
<a href="an_3.php">
<button type="button" class="btn btn-primary">50,000 users</button>
</a>
<a href="an_4.php">
<button type="button" class="btn btn-primary">100,000 users</button>
</a>
<a href="an_5.php">
<button type="button" class="btn btn-primary">250,000 users</button>
</a>
<a href="an_6.php">
<button type="button" class="btn btn-primary">500,000 users</button>
</a>
</center>