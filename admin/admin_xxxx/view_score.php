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
                        <h1 class="page-head-line">view students SCORE</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           SELECT DEPARTMENT AND LEVEL TO PROCEED
                        </div>
                        <div class="panel-body">
                       <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Department</label>
                          <select class="form-control">
                          <option>Agricuture</option>
                          <option>Agricutural Economics</option>
                          <option>Agricutural Extension</option>
                          <option>Agronomy</option>
                          <option>Animal Science</option>
                          <option>Christian Religious Studies</option>
                          <option>Mass communication</option>
                          <option>Botany</option>
                          <option>Marine Biology</option>
                          <option>Cell Biology & Genetics</option>
                          <option>Zoology</option>
                          <option>Acturial science</option>
                          <option>Business Management</option>
                          <option>Banking and Finance</option>
                          <option>Hospitality and Tourism</option>
                          <option>Marketing</option>
                          <option>Insurance</option>
                          <option>Industrial Relations and Personal Management</option>
                          <option>Child Dental Health</option>
                          <option>Oral and Maxillofacial Surgery</option>
                          <option>Agricutural Engineering</option>
                          <option>civil Engineering</option>
                          <option>Chemical Engineering</option>
                          <option>Computer Engineering</option>
                          <option>Electrical Engineering</option>
                          <option>Electronic Engineering</option>
                          <option>Marine Engineering</option>
                          <option>Mechanical Engineering</option>
                          <option>Metallurgical and martirial Engineering</option>
                          <option>Petroleum and gas Engineering</option>
                          <option>Architecture</option>
                          <option>Estate Management</option>
                          <option>Quantity Survery</option>
                          <option>Building</option>
                          <option>Geoinformatics and Survery</option>
                          <option>Medical Laboratory Science</option>
                          <option>Medical Radiography and Radiology</option>
                          <option>Nursing Science</option>
                          <option>Commercial and property law</option>
                          <option>private and public law</option>
                          <option>Anatomy</option>
                          <option>Anesthesia</option>
                          <option>Chemical Pathology</option>
                          <option>Community Medicine</option>
                          <option>Survery</option>
                          <option>Pediatrics</option>
                          <option>Pharmacology and Therapuetics</option>
                          <option>Medicine</option>
                          <option>Pharmacognosy</option>
                          <option>Computer science</option>
                          <option>Pediatrics</option>
                          <option>Geology</option>
                          <option>Mathematics</option>
                          <option>Physics and Astronomy</option>
                          <option>Statistics</option>
                          <option>Economice</option>
                          <option>Geography</option>
                          <option>Philisophy</option>
                          <option>Political Science</option>
                          <option>Psychology</option>
                           <option>Vertinary Anotomy</option>
                          <option>Vertinary Surgry</option>
                          <option>Vertinary Medicine</option>
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Level</label>
                           <select class="form-control">
                          <option>100L</option>
                          <option>200L</option>
                          <option>300L</option>
                          <option>400L</option>
                          <option>500L</option>
                        </select>
                        </div>
                        <a href="view_scores_table.php" class="btn pull-right" style="background-color: #00468C; color: #fff; border-radius: 0px;">SUBMIT</a>
                      </form>
                    </div>
                  </div>
                </div>
                   
        </div>
    </div>
<?php
include'footer.php';
?>