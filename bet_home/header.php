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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link href="fixtures-results_data/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style 
.gm-style-mtc div{font-size:10px}
</style>
<style type="text/css">
@media print {  
    .gm-style .gmnoprint, .gmnoprint {
    display:none  
    }}@media screen {
      .gm-style .gmnoscreen, .gmnoscreen {
display:none  
}}
</style>
        <meta charset="utf-8">
        <title>9jplusbet | Nigeria Sports Social betting platform</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/superfish.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/megafish.css"> 
        <link rel="stylesheet" type="text/css" href="css/jquery.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/owl_002.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/owl.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/jquery_002.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    </head>
    
<body class="kopa-sub-page" style="background: -moz-linear-gradient(top,#3a3e47 0,#2b2e37 100%); background-repeat: no-repeat;">

    <header class="kopa-header">
        <div style="height: 47px;" class="sticky-wrapper">
        <div class="kopa-header-middle fixed">

            <div class="wrapper">

                <div class="kopa-logo">
                    <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                </div>
                <!-- logo -->

                    <nav class="kopa-main-nav">
                        <ul class="main-menu sf-menu sf-js-enabled sf-arrows">
                        <li>
                            <a class="sf-with-ul" href="help.php"><span style="text-transform: capitalize;">Help</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="faq.php"><span style="text-transform: capitalize;">Faq</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="premiar_leg.php"><span style="text-transform: capitalize;">Premier League table</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="livescores.php"><span style="text-transform: capitalize;">Livescores</span></a>
                        </li>
                        <li class="current-menu-item">
                            <a class="sf-with-ul" href="index.php"><span style="text-transform: capitalize;">Home</span></a>
                        </li>
                        
                    </ul>                
                </nav>
                <!--/end main-nav-->

               
            </div>
            <!-- wrapper -->

        </div></div>
        <!-- kopa-header-middle -->

    </header>
    <!-- kopa-page-header -->
