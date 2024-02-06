<?php
include'connect.php';
include('header.php');
?>
<?php
$join_game = $_GET['join_game'];

  $sqs = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game WHERE id = '$join_game'");
  $ros = mysql_fetch_row($sqs);

$sqlx = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$ros[7]'");
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
                                                             ?>'); text-align: center; padding-top: 70px; background-repeat: no-repeat; background-size: cover; background-position: 100% 30%;">
                                                                <span class="r-content" style="">
                                                                    <img src="logos/<?php echo "$rowx[1]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 80px; width: 80px;" alt="">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 20px;"><?php echo "$rowx[1]"; ?>&nbsp;&nbsp;&nbsp;</span>
                                                                </span>
                                                                <span style="color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-weight: bold;"> v </span>
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 20px;">&nbsp;&nbsp;&nbsp;<?php echo "$rowx[2]"; ?>  </span>
                                                                    <img src="logos/<?php echo "$rowx[2]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 80px; width: 80px;" alt="">
                                                                </span>

                                                            </td>
                                                        </tr>
                                            </tbody>
                                            </table>
                                            </div>

                                            
                                                <table class="table table-striped table-bordered table-hover" style="margin-top: 5px;">
                                                    <tbody>
                                                        <tr> 
                                                        <td>
                                                          <span style="float: left; padding-left: 10px;"><?php echo "$rowx[3]"; ?></span>
                                                        <small style="float: right; margin-right: 10px;"><?php echo "$rowx[4]"; ?></small>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table-striped table-bordered table-hover" style="margin-top: -20px;">
                                                <thead>
                                                  <tr style="background-color: #eee;">
                                                    <th>usernames</th>
                                                    <th>Time joined</th>
                                                    <th>Amount</th>
                                                    <th>Possible outcome</th>
                                                  </tr>
                                                </thead>
                                                    <tbody>
                                                    <?php
                                                    $red = "#FFBFBF";
                                                    $yellow = "#FFFFBF";
                                                    $green = "#CFFFBF";
                                                    ?>
                                                    <tr> 
                                                        
                                                          <td style="background-color: <?php
                                                            if ($rowx[6] == $ros[2]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] != "" AND $rowx[6] != $ros[2]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="text-transform: capitalize;font-weight: bold;"><?php echo "$ros[6]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                           if ($rowx[6] == $ros[2]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] != "" AND $rowx[6] != $ros[2]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;"><?php echo( date('d F Y', time($ros[8]) ) ); ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($rowx[6] == $ros[2]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] != "" AND $rowx[6] != $ros[2]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;">₦<?php echo "$ros[5]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                           if ($rowx[6] == $ros[2]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] != "" AND $rowx[6] != $ros[2]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;"><?php echo "$ros[1]"; ?> - <?php echo "$ros[2]"; ?></small>
                                                            <small style="float: right;">creator</small>
                                                          </td>

                                                        </tr>
                                                    <?php 
                                                      $ban = mysql_query("SELECT id, username, game_palyed, possible_outcome, stake_amount, game_id, time_joined FROM join_game WHERE game_id = '$join_game'");
                                                      
                                                      while ($nas = mysql_fetch_array($ban)) {
                                                        $exxp = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$ros[7]'");
                                                          $mom = mysql_fetch_row($exxp);
                                                    ?>
                                                        <tr> 
                                                        
                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3]) {
                                                                echo "$green";
                                                            }
                                                            if ($mom[6] != "" AND $mom[6] != $nas[3]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="text-transform: capitalize;"><?php echo "$nas[1]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                           if ($mom[6] == $nas[3]) {
                                                                echo "$green";
                                                            }
                                                            if ($mom[6] != "" AND $mom[6] != $nas[3]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style=""><?php echo( date('d F Y', time($nas[6]) ) ); ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3]) {
                                                                echo "$green";
                                                            }
                                                            if ($mom[6] != "" AND $mom[6] != $nas[3]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style="">₦<?php echo "$nas[4]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3]) {
                                                                echo "$green";
                                                            }
                                                            if ($mom[6] != "" AND $mom[6] != $nas[3]) {
                                                              echo "$red";
                                                            }
                                                            ?>;">
                                                            <small style=""><?php echo "$nas[2]"; ?> - <?php echo "$nas[3]"; ?></small>
                                                          </td>

                                                        </tr>
                                                      <?php
                                                        }
                                                        $exp = mysql_query("SELECT sum(stake_amount) FROM join_game WHERE game_id = '$join_game'");
                                                        $boom = mysql_fetch_array($exp);
                                                      ?>
                                                      
                                                       <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                         <td>Total amount staked:<span style="color: green;"> ₦<?php echo $boom[0] + $ros[5]; ?></span></td>
                                                       </tr>
                                                       
                                                    </tbody>

                                                </table>
                                            <br>

                                            <div style="text-align: center;">
                                              <?php
                                                $bans = mysql_query("SELECT id, username, game_palyed, possible_outcome, stake_amount, game_id, time_joined FROM join_game WHERE game_id = '$join_game' AND username = '$username'");
                                                $raq = mysql_fetch_array($bans);
                                                  if ($rowx[6] == $raq[3] AND $raq[1] == $username) {
                                                ?>
                                                <span style="font-weight: 900; color: green; text-transform: capitalize;">
                                                <?php
                                                    echo "Congratulations $raq[1], you won";
                                                }
                                                ?>
                                                </span>
                                                <?php
                                                 if ($rowx[6] != $raq[3] AND $raq[1] == $username) {
                                                ?>
                                                <span style="font-weight: 900; color: red; text-transform: capitalize;">
                                                <?php
                                                    echo "Sorry, $raq[1], you losed";
                                                  ?>
                                                </span>
                                              <?php
                                                  }
                                            ?>
                                            </div>

                                            <?php
                                            if (isset($_POST['join_game'])) {
                                              $team_played = mysql_escape_string($_POST['team_played']);
                                              $possible_outcome = mysql_escape_string($_POST['possible_outcome']);
                                              $stake_amount = mysql_escape_string($_POST['stake_amount']);

                                              if ($row[12] < $stake_amount) {
                                              ?>
                                              <center>
                                              <span style="color: red; text-align: center;">
                                              Sorry, you dont have up to <?php echo "₦$stake_amount"; ?> to join.
                                              </span>
                                              </center>
                                              <?php
                                              exit();
                                              }

                                              $sl = mysql_query("SELECT * FROM join_game WHERE username = '$username' AND game_id = '$join_game'");
                                              if (mysql_num_rows($sl) > 0 ) {
                                                ?>
                                                  <div style="text-align: center; color: red;">
                                                  <?php
                                                    echo "sorry, you have already joined this game";
                                                  ?>
                                                  </div>
                                                  <?php
                                                  exit();
                                              }

                                              $less = "100";
                                              if ($row[12] < $less) {
                                                ?>
                                                  <div style="text-align: center; color: red;">
                                                  <?php
                                                    echo "sorry, you dont surfficient balance in your wallet to join.";
                                                  ?>
                                                  </div>
                                                  <?php
                                                  exit();
                                              }

                                        $good = mysql_query("INSERT INTO join_game(id, username, game_palyed, possible_outcome, stake_amount, game_id)VALUES('','$username','$team_played','$possible_outcome','$stake_amount','$ros[0]')") or die(mysql_error());

                                              $rw = mysql_query("UPDATE users SET balance = balance - $stake_amount WHERE username = '$username'");
                                              
                                              if ($good == 1) {
                                              ?>
                                              <div class="animated shake">
                                              <center>
                                              <span style="color: green; text-align: center;">
                                              <?php
                                                echo "Game created";
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
                                            <form action="join_game.php?join_game=<?php echo "$join_game"; ?>" method="POST">
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px;">
                                                    <tbody>

                                                         <tr> 
                                                            <td style="">
                                                               <div class="form-group">
                                                                  <label for="exampleInputPassword1">Select team</label>
                                                                  <select class="form-control input-sm" name="team_played" required="required">
                                                                  <?php
                                                                  $leg = mysql_query("SELECT id, home_team, away_team FROM avaliabe_games WHERE id = '$ros[7]'");
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
                                                            <label for="exampleInputPassword1">Stake amount</label>
                                                               <div class="form-group">
                                                                  <input type="number" id="inputText" placeholder="Amount" value="<?php echo "$ros[5]"; ?>" class="form-control input-sm" name="stake_amount">
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        
                                                        </tbody>       
                                                </table>
                                                <hr>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <center>
                                                                <button style="font-weight: bold; margin-right: 10px;" name="join_game" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>&nbsp;&nbsp;Join bet</button>
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
<?php
include('footer.php');
?>
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
