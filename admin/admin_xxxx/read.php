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
                        <h1 class="page-head-line" style="text-transform: uppercase;">USers that wants to Withdraw<span class="pull-right"></span></h1>
                    </div>
              </div>
              <table class="table table-striped table-bordered table-hover" style="background-color: #fff;">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th></th>

                    
                  </tr>
                </thead>
                <?php 
                  $ban = mysql_query("SELECT id, username, account_name, account_bank, acc_number, amount, sign_of_pay FROM withdraw ORDER BY id DESC");
                  while ($nas = mysql_fetch_array($ban)) {
                    $boom = mysql_query("SELECT id, fname, lname, email, username, phone_num, country, city, bet_pin, birth_day, birth_month, birth_year, balance, password FROM users WHERE username = '$nas[1]'");
                    $noo = mysql_fetch_array($boom)
                ?>
                <thead>
                  <tr style="background-color:  <?php if ($nas[6] == 'paid') echo '#A3D900'; ?>;">
                    <td><?php echo $nas[0]; ?></td>
                    <td><?php echo "$noo[1]"; ?></td>
                    <td><?php echo "$noo[2]"; ?></td>
                    <td><?php echo "$noo[4]"; ?></td>
                    <td><?php echo "$noo[3]"; ?></td>
                   <td>
                    <button type="button" data-toggle="modal" data-target="#<?php echo $nas[0]; ?>myModal" class="btn btn-primary">
                     View Account details
                    </button>
                  <td>

                  <?php
                      if (isset($_POST[$nas[0]])) {
                        $paid = "paid";

                        mysql_query("UPDATE withdraw SET sign_of_pay = '$paid' WHERE id = '$nas[0]'");
                    }
                  ?>
                  <form action="read.php?id=<?php echo $nas[0]; ?>" method="post">  
                  <td>
                    <a href="read.php?id=<?php echo $nas[0]; ?>">
                    <button type="submit" name="<?php echo $nas[0]; ?>" class="btn btn-primary">
                      <?php if ($nas[6] == 'paid'){ echo 'Paid'; }else{ echo 'Mark as paid'; }?>
                    </button>
                  </a>
                  <td>
                  </form>
                    <!-- Modal -->
                  <div class="modal fade" id="<?php echo $nas[0]; ?>myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        
                        <center><h4></h4></center> 
                          <?php
                           
                          ?>
                          <table class="table">
                            <tr>
                              <td>Account name: <?php echo "$nas[2]"; ?></td>
                            </tr>
                            <tr>
                              <td>Bank name: <?php echo "$nas[3]"; ?></td>
                            </tr>
                            <tr>
                              <td>Account number: <?php echo "$nas[4]"; ?></td>
                            </tr>
                            <tr>
                              <td>Amount: <?php echo "$nas[5]"; ?></td>
                            </tr>
                          </table>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>

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