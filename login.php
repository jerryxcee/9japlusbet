<?php
include('header.php');
?>
    <div id="main-content" style="background-image: url('img/bg-blurred.jpg'); width: auto; margin-top: 2px;">

        <div class="wrapper" style="background-color: #444;">

           <br>
         
        <section class="desk-com">
            <div class="container">
                <div class="row">
                <marquee style="background-color: #444; color: #fff; height: 40px; margin-top: -30px; font-weight: bold; line-height: 40px;">Welcome to 9Ja Plus Bet, Please ensure you keep your account details save to avoid illegal logins. Thanks</marquee>
                    <div class="col-md-3">
                        <img src="img/246g2i.gif">
                    </div>
                    <div class="col-md-5">
                    <?php
                   if (isset($_POST['openx'])) {
                                        $username = mysql_escape_string($_POST['username']);
                                        $password = mysql_escape_string($_POST['password']);
                                    $bam = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'") or die(mysql_error());

                                        if (mysql_num_rows($bam)>0) {
                                            $_SESSION['username'] = $username;
                                            echo '<script type="text/javascript">
                                                   window.location = "bet_home/index.php"
                                                  </script>';
                                            exit();
                                        }else{
                                            echo "sorry, an error occured";
                                        }
                                        $_SESSION['username'] = $_POST['username'];
                                    }  
                    ?>
                    <form action="login.php" method="POST">
                        <input type="text" class="form-control" name="username" placeholder="Username" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="required">

                        <input type="password" name="password" class="form-control" placeholder="Password" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="required">

                    <br>
                    <a href="profile.php">
                    <button type="submit" name="openx" class="btn btn-primary btn-lg btn-block" style="border-radius: 0px;">LOG IN</button>
                    </a>
                    <br>
                    </form>

                    </div>

                     <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="530" height="360" src="https://www.youtube.com/embed/QtDRNtVScrw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>

                </div>

               

            </div>
        </section>



            </div>
            <!-- wrapper -->
        </div>
        <!-- bottom-area-2 -->
    <?php
include('footer.php');
    ?>