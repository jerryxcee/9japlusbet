<?php
ob_start();
session_start();
include'connect.php';
$email_a = $_SESSION['login'];
include('header.php');
if(!isset($_SESSION['login']))
{
  header("Location: ../index.php");
  exit();
}
?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="text-transform: uppercase;">View users<span class="pull-right"></span></h1>
                    </div>
              </div>
              <table class="table table-striped table-bordered table-hover" style="background-color: #fff;">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <?php 
                  $ban = mysql_query("SELECT id, fname, lname, email, username, phone_num, country, city, bet_pin, birth_day, birth_month, birth_year, balance, password FROM users ORDER BY id DESC");
                  while ($nas = mysql_fetch_array($ban)) {
                ?>
                <thead>
                  <tr>
                    <td><?php echo $nas[0]; ?></td>
                    <td><?php echo "$nas[1]"; ?></td>
                    <td><?php echo "$nas[2]"; ?></td>
                    <td><?php echo "$nas[3]"; ?></td>
                    
                    </td>
                    
                    <td>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $nas[0]; ?>myModal">
                    Delete
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="<?php echo $nas[0]; ?>myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Data delete</h4>
                        </div>
                        <center><h4>Are you sure you would want to Delete this user...?</h4></center> 
                          <?php
                            if (isset($_POST[$nas[0]])) {
                              mysql_query("DELETE FROM users WHERE id = '$nas[0]'");
                              }
                          ?>
                          <form action="dynamic.php?=id<?php echo $nas[0]; ?>" method="post">
                            <div class="modal-footer">
                               <a href="dynamic.php?=id<?php echo $nas[0]; ?>">
                                  <button type="submit" name="<?php echo $nas[0]; ?>" class="btn btn-info">Delete</button>
                                </a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>

                      </td>
                  </tr>
                </thead>
                <?php
                  }
                ?>
              </table>
        </div>
    </div>

    <!-- Button trigger modal -->
<?php
include('footer.php');
?>