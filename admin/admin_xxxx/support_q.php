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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-8">
                        <h1 class="page-head-line">SUPPORT</h1>
                        <?php
                        if (isset($_POST['reply'])) {
                          $uname = mysql_escape_string($_POST['uname']);
                          $ema = mysql_escape_string($_POST['ema']);
                          $msg = mysql_escape_string($_POST['msg']);
                          $admin = "admin";

                          mysql_query("INSERT INTO support(id, u_name, email, message, admin)VALUES('','$uname','$ema','$msg','$admin')");
                        }
                        ?>
                        <form action="support_q.php" method="POST">
                                <div class="Compose-Message">               
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <input name="ema" placeholder="Paste user email"/>
                                                <input class="pull-right" value="admin" disabled="disabled" />
                                            </div>
                                            <div class="panel-heading">
                                                <input name="uname" placeholder="Paste user username"/>
                                            </div>
                                            <div class="panel-body">
                                                <label>Enter Message : </label>
                                                <textarea rows="9" name="msg" class="form-control" required=""></textarea>
                                                <hr />
                                                <button type="submit" name="reply" class="btn btn-warning">REPLY SUPPORT</button>
                                            </div>
                                        </div>
                                             </div>
                                        </div>
                                </form>              
                    </div>
                </div>
                <div class="row">
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ref. No.</th>
                                            <th>Username</th>
                                            <th>User email</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                  include'../../connect.php';
                                 $c = mysql_query("SELECT id, u_name, email, message, admin FROM support WHERE admin = ''");
                                 while ($r=mysql_fetch_array($c)){
                                  ?>
                                        <tr>
                                            <td>#</td>
                                            <td><?php echo $r[1]; ?></td>
                                            <td>
                                                <label class="label label-info"><?php echo $r[2]; ?></label>
                                            </td>
                                            <td style="max-width: 300px;">
                                                <p style="word-break: break-all;"><?php echo $r[3]; ?>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>

                </div>
               
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
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
