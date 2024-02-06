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
        <div class="">
            <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-head-line">Investing Users</h1>
                    </div>
                    <div class="col-md-6">
                        <h1 class="page-head-line">Withdrawing Users</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong>confirm  Investing Users </strong>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>email</th>
                                            <th>Level</th>
                                            <th>Phone</th>
                                            <th>Pin</th>
                                            <th>confirm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../../connect.php');
                                        $sql_2 = mysql_query("SELECT id, f_name, l_name, u_name, email, pro_pic, u_pin, phone, level, amount, merged_to FROM merged_pay WHERE merged_to ='' AND u_name != ''");
                                                  while ($row_2=mysql_fetch_array($sql_2))
                                          {
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $row_2[4]; ?></td>
                                            <td><?php echo $row_2[8]; ?></td>
                                            <td><?php echo $row_2[7]; ?></td>
                                            <td><?php echo $row_2[6]; ?></td>
                                            <td>
                                                 <?php
                                            if (isset($_POST[$row_2[6]])) {
                                                $meg2 = "";
                                                mysql_query("UPDATE merged_pay SET u_name = '$meg2' WHERE u_pin = '$row_2[6]'");
                                            }
                                            ?>
                                            <form action="confirm.php?=u_pin<?php echo $row_2[6]; ?>" method="post">
                                                <div class="col-md-2">
                                                    <a href="confirm.php?=u_pin<?php echo $row_2[6]; ?>">
                                                      <button type="submit" name="<?php echo $row_2[6]; ?>" class="btn btn-info">confirm user</button>
                                                    </a>
                                                </div>
                                            </form>
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
                     <!-- End  Kitchen Sink -->
                </div>
               
                      <!-- End  Basic Table  -->
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