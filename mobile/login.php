<?php
include('header.php');
?>
    <div id="main-content" style="background-color: #444;; width: auto; margin-top: 2px;">

           <br>
               
        <section class="desk-com">
            <div class="container">
                <div class="row">
                <marquee style="background-color: #444; color: #fff; height: 40px; margin-top: -30px; line-height: 40px;">Welcome to 9Ja Plus Bet, Please ensure you keep your account details save to avoid illegal logins. Thanks</marquee>
                    <div class="col-md-12">
                    <br>

                    <?php
                    include('connect.php');
                    if (isset($_POST['pass_up'])) {
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
                    ?>
                    <div style="color: red; text-align: center;">
                    <?php
                        echo "Sorry, Wrong login details";
                    ?>
                    </div>
                    <?php
                    }
                    $_SESSION['username'] = $_POST['username'];
                    }
                    ?>
                    <form action="login.php" method="POST">
                        <input type="text" class="form-control" name="username" placeholder="Username" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="">

                        <input type="password" class="form-control" name="password" placeholder="Password
                        " style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;" required="">
                   
                        <input style="" name="remember" type="checkbox">
                        <small class="" style="margin-left: 5px; color: #fff;">Always keep me logged in</small>
                    <br>
                    <input type="submit" name="pass_up" onclick="this.style='background-color: green;'" value="Log in" class="btn btn-primary btn-lg btn-block" style="border-radius: 0px;">
                   <br>
                    
                    <div class="forgot">    
                        <a href="forgot_p.php" style="font-size: 12px; color: #fff;">Forgot password?</a>
                    </div>
                  
                    </form>
                    </div>


                </div>

               

            </div>
        </section>

<br>
<?php
include('footer.php');
?>