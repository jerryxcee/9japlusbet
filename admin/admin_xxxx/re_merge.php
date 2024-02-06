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
                        <h1 class="page-head-line">Re-Merging</h1>
                        <small>Any empty box needs to be remerged.</small>
                    </div>
                
                </div>
                <div class="row">
                
                <?php
                include('../../connect.php');
                $sql_2 = mysql_query("SELECT id, f_name, l_name, u_name, email, pro_pic, u_pin, phone, level, amount, merged_to FROM merged_pay WHERE merged_to =''");
                    while ($row_2=mysql_fetch_array($sql_2))
                    {
                    }
                    ?>
                                       
                    <!-- End  Kitchen Sink -->
                </div>
                <?php
                 $sq = mysql_query("SELECT id, f_name, l_name, u_name, u_pin, pro_pic, email, phone, acc_num, sele_bank, password, refered_user_email, location, bank_name FROM users");
                 $row_z = mysql_fetch_row($sq);

                $sql_vx = mysql_query("SELECT id, f_name, l_name, u_name, email, pro_pic, u_pin, phone, level, amount, merged_to FROM merged_pay");
                $row_vx = mysql_fetch_row($sql_vx);

                $sql_e = mysql_query("SELECT id, f_name, l_name, pro_pic, u_name, u_pin, phone, level, amount, sign, merged_to_i, merged_to_ii FROM merged_withdraw");
                $row_e = mysql_fetch_row($sql_e);

                $e = $row_e[5];
                $id = $row_e[0];

                $d = $row_2[10];
                
                ?>
                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong> Re-Merging </strong>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>username</th>
                                            <th>Level</th>
                                            <th>Phone</th>
                                            <th>FIrst merge</th>
                                            <th>Second merge</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $t = 10000;
                                        $sql_3 = mysql_query("SELECT id, f_name, l_name, pro_pic, u_name, u_pin, phone, level, amount, merged_to_i, merged_to_ii, acc_name, bank, acc_num FROM merged_withdraw WHERE merged_to_i = '' OR merged_to_ii = ''");
                                                  while ($row_3=mysql_fetch_array($sql_3))
                                          {
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $row_3[1]; ?></td>
                                            <td><?php echo $row_3[2]; ?></td>
                                            <td><?php echo $row_3[4]; ?></td>
                                            <td><?php echo $row_3[8]; ?>*2</td>
                                            <td><?php echo $row_3[6]; ?></td>
                                            <?php
                                            if (isset($_POST[$row_3[5]])) {
                                                $meg1 = mysql_escape_string($_POST['meg1']);
                                                $meg2 = mysql_escape_string($_POST['meg2']);

                                                //dont inerst two times//
                                                $s = mysql_query("UPDATE merged_withdraw SET merged_to_i = '$meg1' WHERE id = '$row_3[0]' LIMIT 1");

                                                $sx = mysql_query("UPDATE merged_withdraw SET merged_to_ii = '$meg2' WHERE id = '$row_3[0]' LIMIT 1");

                                               $merge = mysql_query("UPDATE merged_pay SET merged_to = '$row_3[5]' WHERE u_pin = '$meg1' AND merged_to = '' AND u_name != '' LIMIT 1");

                                                $merge2 = mysql_query("UPDATE merged_pay SET merged_to = '$row_3[5]' WHERE u_pin = '$meg2' AND merged_to = '' AND u_name != '' LIMIT 1");
                                            }
                                            ?>
                                            <form action="re_merge.php?=u_pin<?php echo $row_3[5]; ?>" method="POST">
                                            <td>
                                            <input name="meg1" value="<?php echo "$row_3[9]"; ?>"/> </td>
                                            <td><input name="meg2" value="<?php echo "$row_3[10]"; ?>"/> </td>
                                            <td>
                                                <div class="col-md-2">
                                                <a href="re_merge.php?=u_pin<?php echo $row_3[5]; ?>">
                                                    <button type="submit" name="<?php echo $row_3[5]; ?>" class="btn btn-info">
                                                        <span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span>+
                                                        <span class="glyphicon glyphicon-user"></span> &nbsp;Re-Merge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </button>
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