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
$department = $_GET['department'];

$level = $_GET['level'];

?>
<?php
$fake = mysql_query("SELECT id, fname, lname, email, state_of_origin, age, department, level, password, reg_num FROM students WHERE department = '$department' AND level = '$level'");
$row = mysql_fetch_array($fake);
?>
    <!-- MENU SECTION END-->
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DEPARTMENT: <?php echo "$row[6]"; ?> <span class="pull-right">LEVEL: <?php echo "$row[7]"; ?></span></h1>
                    </div>
                </div>

                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong> Students assessment </strong>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Assignment</th>
                                            <th>Test</th>
                                            <th>Exams</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       $fake = mysql_query("SELECT id, fname, lname, email, state_of_origin, age, department, level, password, reg_num, student_pin FROM students WHERE department = '$department' AND level = '$level'");
                                        while ($row = mysql_fetch_array($fake)) {
                                        ?>
                                        <tr>
                                            <td><?php echo "$row[0]"; ?></td>
                                            <td><?php echo "$row[1]"; ?></td>
                                            <td><?php echo "$row[2]"; ?></td>
                                            <?php
                                            if (isset($_POST[$row[10]])) {
                                            $ass = mysql_escape_string($_POST['ass']);
                                            $test = mysql_escape_string($_POST['test']);
                                            $exam = mysql_escape_string($_POST['exam']);

                                            mysql_query("INSERT INTO scores(id, assignment, test, exam, student_pin)VALUES('','$ass','$test','$exam','$row[10]')");
                                            }
                                            ?>
                                            <form action="add_score.php?department=<?php echo "$department"?>&level=<?php echo "$level"?>" method="POST">
                                            <td><input name="ass"> </td>                                            
                                            <td><input name="test"> </td>
                                            <td><input name="exam"> </td>
                                            <td>
                                                <div class="col-md-2">
                                                <a href="add_score.php?department=<?php echo "$department"?>&level=<?php echo "$level"?>">
                                                    <button type="submit" name="<?php echo "$row[10]"; ?>" class="btn" style="background-color: #00468C; color: #fff; border-radius: 0px;">ADD
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
    </div>
   