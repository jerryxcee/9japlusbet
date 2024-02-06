<?php
include'connect.php';
include('other_header.php');

$game_id = $_GET['game_id'];
$sqlx = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games WHERE id = '$game_id'");
$rowx = mysql_fetch_row($sqlx);
?>
                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                    <li style=" margin-bottom: -20px; border: 1px solid#3B5998;">
                                        <div class="match-item list-item" style=" background-color: transparent;">
                                         <?php
                                            $Premier  = "Premier League";
                                            $Champions_l  = "Champions League";
                                            $Bundesliga = "Bundesliga";
                                            $Serie = "Serie A";
                                            $Ligue = "Ligue 1";
                                            $La = "La Liga";
                                            $World_cup = "World cup 2018";
                                            $Scotland_Premiership = "Scotland Premiership";
                                            $England_FA_Cup = "England FA Cup";
                                            $International_Friendlies = "International Friendlies";
                                            $England_League_1 = "England League 1";
                                            ?>
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px; height: 200px;">
                                                    <tbody>
                                                        <tr> 
                                                            <td style="background-image: url('<?php 
                                                              if ($rowx[4] == $Premier) {
                                                                echo "img/96239bf09550b1cc00a38ebfbc2776b1.gif";
                                                              }
                                                              if ($rowx[4] == $Serie) {
                                                                echo "img/FIFA17_XB1_PS4_Juventus_Stadium_LR.jpg";
                                                              }
                                                              if ($rowx[4] == $La) {
                                                                echo "img/FC-Barcelona-v-Celta-Vigo-La-Liga.jpg";
                                                              }
                                                              if ($rowx[4] == $Champions_l) {
                                                                echo "img/Champions-League-Stadium-hd-wallpapers.jpg";
                                                              }
                                                              if ($rowx[4] == $Bundesliga) {
                                                                echo "img/About-Us4.jpg";
                                                              }
                                                              if ($rowx[4] == $World_cup) {
                                                                echo "img/Fifa-World-Cup-2018-Wallpapers.jpg";
                                                              }
                                                              if ($rowx[4] == $Scotland_Premiership) {
                                                                echo "img/Scotland_Premiership.jpg";
                                                              }
                                                              if ($rowx[4] == $England_FA_Cup) {
                                                                echo "img/England_FA_Cup.jpg";
                                                              }
                                                              if ($rowx[4] == $International_Friendlies) {
                                                                echo "img/International_Friendlies.gif";
                                                              }
                                                              if ($rowx[4] == $England_League_1) {
                                                                echo "img/stadium1000-16x9.jpg";
                                                              }
                                                             ?>'); text-align: center; padding-top: 70px; background-repeat: no-repeat; background-size: cover; background-position: 100% 30%;">
                                                                <span class="r-content" style="">
                                                                    <img src="logos/<?php echo "$rowx[1]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $rowx[4] == $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 80px; width: 80px;" alt="">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 20px;"><?php echo "$rowx[1]"; ?>&nbsp;&nbsp;&nbsp;</span>

                                                                </span>
                                                                <span style="color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-weight: bold;"> v </span>
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 20px;">&nbsp;&nbsp;&nbsp;<?php echo "$rowx[2]"; ?>  </span>
                                                                    <img src="logos/<?php echo "$rowx[2]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $rowx[4] == $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 80px; width: 80px;" alt="">
                                                                </span>

                                                            </td>
                                                        </tr>
                                            </tbody>
                                            </table>
                                            </div>
                                            <br>
                                            <?php
                                            if (isset($_POST['create_game'])) {
                                              $team_played = mysql_escape_string($_POST['team_played']);
                                              $possible_outcome = mysql_escape_string($_POST['possible_outcome']);
                                              $game_type = mysql_escape_string($_POST['game_type']);
                                              $stake_amount = mysql_escape_string($_POST['stake_amount']);

                                              $arr = str_split('1234567890');
                                              shuffle($arr);
                                              $arr = array_slice($arr, 0, 6);
                                              $str = implode('', $arr);
                                              $rand = rand(0, 10);
                                              $bet_pin = "$rand"."$str";

                                              if ($row[12] < $stake_amount OR $stake_amount == 0) {
                                              ?>
                                              <center>
                                              <span style="color: red; text-align: center;">
                                              Sorry, you dont have surfficient balance for this bet
                                              </span>
                                              </center>
                                              <?php
                                              }
                                              else if ($row[12] >= $stake_amount)
                                              {
                                             $good = mysql_query("INSERT INTO create_game(id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id)VALUES('','$team_played','$possible_outcome','$bet_pin','$game_type','$stake_amount','$username','$game_id')") or die(mysql_error());

                                              $rw = mysql_query("UPDATE users SET balance = balance - $stake_amount WHERE username = '$username'");
                                              
                                              if ($good == 1) {
                                              ?>
                                              <div class="animated shake">
                                              <center>
                                              <span style="color: green; text-align: center;">
                                              <?php
                                                echo "Game created";
                                              }
                                              ?>

                                              </span>
                                              
                                              <span style="text-align: center;">and ₦<?php echo "$stake_amount"; ?> debited from your wallet.
                                              </span>
                                              </center>
                                              </div>
                                              
                                              <?php
                                              }else{
                                              ?>
                                              <div style="color: red;">
                                              <?php
                                                echo "Sorry, an error occured, please try again";
                                              ?>
                                              </div>
                                              <?php
                                              }
                                            }
                                            ?>
                                            <form action="create_game.php?game_id=<?php echo "$game_id"; ?>" method="POST">
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px;">
                                                    <tbody>

                                                         <tr> 
                                                            <td style="">
                                                               <div class="form-group">
                                                                  <label for="exampleInputPassword1">Select team</label>
                                                                  <select class="form-control input-sm" name="team_played" required="required">
                                                                  <?php
                                                                  $leg = mysql_query("SELECT id, home_team, away_team FROM avaliabe_games WHERE id = '$game_id'");
                                                                  $gas = mysql_fetch_array($leg);
                                                                  ?>
                                                                  <option><?php echo "$gas[1]"; ?></option>
                                                                  <option><?php echo "$gas[2]"; ?></option>
                                                                </select>
                                                                </div>
                                                            </td>

                                                            <td style="">
                                                            <label for="exampleInputPassword1">Possible out come</label>
                                                               <div class="form-group">
                                                                  <select class="form-control input-sm" name="possible_outcome" required="required">
                                                                  <option>win</option>
                                                                  <option>draw</option>
                                                                </select>
                                                                </div>
                                                            </td>

                                                            <td style="">
                                                            <label for="exampleInputPassword1">Type</label>
                                                               <div class="form-group">
                                                                  <select class="form-control input-sm" name="game_type" required="required">
                                                                  <option>pair</option>
                                                                  <option>multiple</option>
                                                                </select>
                                                                </div>
                                                            </td>

                                                            <td style="">
                                                            <label for="exampleInputPassword1">Stake amount</label>
                                                               <div class="form-group">
                                                                  <input type="number" id="inputText" placeholder="Amount" class="form-control input-sm" name="stake_amount">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <span style="float: left; padding-left: 10px;"><?php echo "$rowx[3]"; ?></span>
                                                        <small style="float: right; margin-right: 10px;"><?php echo "$rowx[4]"; ?></small>
                                                        </tbody>       
                                                </table>
                                                <hr>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <center>
                                                                <button style="font-weight: bold; margin-right: 10px;" name="create_game" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i>&nbsp;&nbsp; Create bet</button>
                                                            </center>
                                                        </tr>
                                                        <br>
                                                    </tbody>       
                                                </table>
                                            </div>
                                            </form>
                                        </div>
                                    </li>



                                    
                                </ul>


                            </div>
                            <!-- widget --> 
                            
                        </div>
                        <!-- tab-pane -->
                       
                    </div>

                </div>
                <!-- main-col -->

                 <?php
                include('side_bar.php');
                ?>

            </div>
            <!-- row -->
        
        </div>
        <!-- wrapper -->

    </div>
    <!-- main-content -->
    <div id="bottom-sidebar">

        <div class="bottom-area-1">

            <div class="wrapper">

                <div class="kopa-logo">
                    <a href="#"><img src="fixtures-results_data/logo.png" alt="logo"></a>
                </div>
                <!-- logo -->

                <nav class="bottom-nav">
                    <ul style="line-height: 99px;" class="bottom-menu">
                   <li><a href="#">
                        <span style="text-transform: capitalize; font-weight: bold;">Help</span>
                        </a>
                    </li>
                        <li>
                            <a href="#"><span style="text-transform: capitalize; font-weight: bold;">News</span></a>
                        </li>
                    <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Check bet slip</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Other users</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Match tables</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Create game</span></a>
                        </li>
                        <li class="current-menu-item">
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Home</span></a>
                        </li>
                    </ul>                
                </nav>

                <!--/main-menu-mobile-->
            
            </div>
            <!-- wrapper -->
        </div>
        <!-- bottom-area-2 -->

        <script type="text/javascript">

      function doIt(e)
      {
          var e = e || event;
          
          if (e.keyCode == 32) return false;
              
      }

      function pasteIt(e)
      {
          var e = e || event;
          
          this.value = this.value.replace(/\s/g,'');
              
      }

      window.onload = function(){
          var inp = document.getElementById("inputText");
          
          inp.onkeydown = doIt;
          inp.oninput = pasteIt;
      };
    </script>

        <div class="bottom-area-3">

            <div class="wrapper">

                <div class="widget kopa-newsletter-widget">
                    <div class="newsletter-intro">
                        <span class="news-icon fa fa-envelope"></span>
                            <p>Subscribe to our email newsletter</p>
                    </div>
                    <div class="newsletter-content">
                        <span class="input-icon fa fa-envelope"></span>
                        <form class="newsletter-form clearfix" method="post" action="#">
                            <div class="input-area">
                                <input value="Enter Your Email Address..." size="40" class="name" name="name" type="text">
                            </div>
                            <button type="submit" class="search-submit">
                                <span>Sign me up</span>
                                <span class="fa fa-chevron-right"></span>
                            </button>                 
                        </form>
                        <div id="newsletter-response"></div>
                    </div>
                </div>
                <!-- widget -->
            
            </div>
            <!-- wrapper -->

        </div>
        <!-- bottom-area-3 -->

    </div>
    <!-- bottom-sidebar -->

    <footer id="kopa-footer">
        
        <div class="wrapper clearfix">

            <p id="copyright" class="">Copyright © 2017. All Rights Reserved <a href="#"> Naijaplusbet.com</a></p>

        </div>
        <!-- wrapper -->

    </footer>
    <!-- kopa-footer -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<br><br>
  <div class="modal-dialog" role="document" style="position: relative; z-index: 2000;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Check slip</h4>
      </div>
      <form>
      <div class="modal-body">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter slip ID">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Log in</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<br><br>
  <div class="modal-dialog" role="document" style="position: relative; z-index: 2000;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Challenge</h4>
      </div>
      <form>
      <div class="modal-body">
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter slip ID">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Log in</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>



    <a href="#" class="scrollup"><span class="fa fa-chevron-up"></span></a>

    <script src="js/jquery-1.js"></script> 
    <script src="js/bootstrap.js"></script>
    <script src="js/js"></script>
    
</body>
</html>