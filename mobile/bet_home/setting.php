<?php
include('header.php');
?>
<div style="background-color: #444;">
<h4 style="color: #fff; margin-left: 20px;">Change password</h4>
<br>
<div class="col-md-12" style="background-color: #444;">
  
                    <?php
                          if (isset($_POST['personal'])) {
                            $was = mysql_query("SELECT id, password FROM users WHERE username = '$username'");
                            $now = mysql_fetch_array($was);

                          $old_pass = mysql_escape_string($_POST['old_pass']);
                          $new_pass = mysql_escape_string($_POST['new_pass']);
                          $new_pass_2 = mysql_escape_string($_POST['new_pass_2']);

                          if ($new_pass != $new_pass_2) {
                          ?>
                          <div style="color: #fff; text-align: center;" class="animated shake">
                          <?php
                            echo "Sorry, your new passwords does not match";
                          ?>
                          </div>
                          <?php
                          }else{

                          if ($old_pass != $now[1]) {
                          ?>
                          <div style="color: #fff; text-align: center;" class="animated shake">
                          <?php
                            echo "sorry, the old password you entered is wrong";
                          ?>
                          </div>
                          <?php
                          }else{

                           mysql_query("UPDATE users SET password = '$new_pass' WHERE email = '$email' OR username = '$email'");
                           ?>
                           <div style="color: #fff; text-align: center;" class="animated shake">
                          <?php
                           echo "Password updated successfully";
                          ?>
                          </div>
                          <?php
                        }
                        }
                        }
                        ?>
                        <form action="setting.php" method="post">
                      
                                 
                                    <input style="border-radius: 0px;" placeholder="Old password" name="old_pass" class="form-control" type="password">
                             	<br>
                                    <input style="border-radius: 0px;" pattern=".{6,}" title="your password must be up to 6 characters" placeholder="New password" name="new_pass" class="form-control" type="password">
                          <br>
                                    <input style="border-radius: 0px;" pattern=".{6,}" title="your password must be up to 6 characters" placeholder="Confirm New password" name="new_pass_2" class="form-control" type="password">
    <br>
                                     
                    <button type="submit" name="personal" class="btn btn-primary btn-lg btn-block" style="border-radius: 0px;">Update</button>
             
               <br>
                              
                              </form>

</div>

<?php
include('footer.php');
?>