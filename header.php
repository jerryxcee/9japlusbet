<?php
ob_start();
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Bomvibe">
<meta name="author" content=""> 

<meta charset="utf-8">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#3B5998">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#3B5998">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#3B5998">
<meta name="description" content="9Ja Plus Bet, The best social bet in Nigeria">
<meta name="keywords" content="9Ja Plus Bet, The best social bet in Nigeria">
   
        <meta charset="utf-8">
        <title>9jplusbet | Nigeria Sports Social betting platform</title>
        <link rel="shortcut icon" href="img/logo.png">
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

<?php
@include("Mobile_Detect.php");
$detect = new Mobile_Detect();
if ($detect->isMobile() && isset($_COOKIE['mobile']))
{
$detect = "false";
}
elseif ($detect->isMobile())
{
$game_day = date('l');
header("Location:m/index.php?game_day=$game_day");
}
?>

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
                        <li><a href="help.php">
                            <span style="text-transform: capitalize;">Help</span>
                            </a>
                        </li>
                        <li><a href="faq.php">
                            <span style="text-transform: capitalize;">FAQ</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="sf-with-ul" href="premier_leg.php"><span style="text-transform: capitalize;">Premier league</span></a>
                        </li>
                        
                        <li>
                            <a class="sf-with-ul" href="livescores.php"><span style="text-transform: capitalize;">Live scores</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="games.php"><span style="text-transform: capitalize;">Games</span></a>
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