<?php
ob_start();
session_start();
include'connect.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>9Japlusbet - admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                   <h3 style="color: #fff; font-weight: bold;">ADMIN PANEL</h3>
                </a>
            </div>
            <div class="left-div">
                <i class="fa fa-user-plus login-icon" ></i>
        </div>
            </div>
        </div>
    <!-- LOGO HEADER END-->
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Gain Access </h4>
                </div>
            </div>
            <div class="row">
            <?php
            if (isset($_POST['ad'])) {
                          $email = mysql_escape_string($_POST['email']);
                          $password = mysql_escape_string($_POST['pass']);

                          $admin = mysql_query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'") or die(mysql_error());

                          if (mysql_num_rows($admin)>0) {
                            $_SESSION['login'] = $email;
                            echo '<script type="text/javascript">
                                   window.location = "admin_xxxx/index.php"
                                  </script>';
                            exit();
                          }else{
                            ?>
                            <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                         
                            <?php
                               echo "Sorry, Wrong email and password combination. Are you sure you are the admin of this panel...?";
                         }
                         ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            </div><br><br><br>
                         <?php
                            $_SESSION['login'] = $_POST['email'];
                        }
                    ?>
                <form action="index.php" method="POST">
                    <div class="col-md-6">
                     <label>Enter Email ID : </label>
                        <input type="email" name="email" class="form-control" required=""/>
                        <label>Enter Password :  </label>
                        <input type="password" name="pass" class="form-control" required=""/>
                        <hr />
                        <button type="submit" name="ad" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In</button>&nbsp;
                    </div>
                </form>
                <br>
                <div class="col-md-6">
                    <div class="alert alert-info">
                       <strong>  This panel is strictly for the admin of this site. please read the informations below:</strong>
                        <br />
                        <ul>
                            <li>
                                This panel controls the whole site.
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Security is programmed to the maximium.
                            </li>
                            <li>
                                Contact site programmer(Jerry_cee) for more, and if you find any difficulty in management.
                            </li>
                        </ul>
                       
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 9Ja Plus Bet | Designed By : <a href="http://www.pronuxtech.com/" target="_blank">Designed by Mr Jerry cee</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
