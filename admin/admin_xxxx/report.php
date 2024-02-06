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
                        <h1 class="page-head-line" style="text-transform: uppercase;">Uers Wallet<span class="pull-right"></span></h1>
                    </div>
              </div>
              <table class="table table-striped table-bordered table-hover" style="background-color: #fff;">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Wallet</th>
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


                    <?php
                      if (isset($_POST[$nas[0]])) {
                        $wallet = mysql_escape_string($_POST['wallet']);

                        mysql_query("UPDATE users SET balance = '$wallet' WHERE id = '$nas[0]'");
                    }
                  ?>
                  <form action="report.php?id=<?php echo $nas[0]; ?>" method="post">
                      <td><input name="wallet" value="<?php echo "$nas[12]"; ?>"> </td>
                      </td><td>
                      <a href="report.php?id=<?php echo $nas[0]; ?>">
                        <button class="btn btn-primary" type="submit" name="<?php echo $nas[0]; ?>">
                          Credit Users wallet
                        </button>
                      </a>
                  </form>
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