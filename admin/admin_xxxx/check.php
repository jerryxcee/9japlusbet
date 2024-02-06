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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DEPARTMENT: COMPUTER SCEINCE <span class="pull-right">LEVEL: 200L</span></h1>
                    </div>
                </div>

                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <strong> Withdrawing Users </strong>
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

                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td>first_name</td>
                                            <td>last_name</td>
                                            <td>86%</td>
                                            <?php
                                           
                                            ?>
                                            
                                            <td>36%</td>
                                            <td>16%</td>
                                            <form action="manual_m.php" method="POST">
                                            <td>
                                                <div class="col-md-2">
                                                <a href="manual_m.php">
                                                    <button type="submit" name="" class="btn" style="background-color: #00468C; color: #fff; border-radius: 0px;">EDIT
                                                    </button>
                                                </a>
                                                </div>
                                                
                                            </td>
                                            </form>

                                            <form action="manual_m.php" method="POST">
                                            <td>
                                                <div class="col-md-2">
                                                <a href="manual_m.php">
                                                    <button type="submit" name="" class="btn" style="background-color: #00468C; color: #fff; border-radius: 0px;">DELETE
                                                    </button>
                                                </a>
                                                </div>
                                                
                                            </td>
                                            </form>
                                             
                                        </tr>
                                        <?php
                                    
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div>
    </div>
   