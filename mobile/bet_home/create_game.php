<?php
include('header.php');

$game_id = $_GET['game_id'];
$sqlx = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games WHERE id = '$game_id'");
$rowx = mysql_fetch_row($sqlx);
?>
<div>
                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                    <li style=" margin-bottom: -20px;">
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
                                        $Europia_league = "Europa League";
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
                                                              if ($rowx[4] == $Europia_league) {
                                                                echo "img/europia_league.jpg";
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
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 12px;"><?php echo "$rowx[1]"; ?>&nbsp;&nbsp;&nbsp;</span>

                                                                </span>
                                                                <span style="color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-weight: bold;"> v </span>
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 12px;">&nbsp;&nbsp;&nbsp;<?php echo "$rowx[2]"; ?>  </span>
                                                                    <img src="logos/<?php echo "$rowx[2]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $rowx[4] == $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
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

                                              if ($row[12] < $stake_amount OR $stake_amount < 100) {
                                              ?>
                                              <center>
                                              <span style="color: red; text-align: center;">
                                              Sorry, surfficient balance or amount is less than ₦100.
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
                                                               <div id="win" style="display:block;" class="form-group">
                                                                  <label for="exampleInputPassword1">Select team</label>
                                                                  <select class="form-control input-sm" name="team_played" required="required">
                                                                  <?php
                                                                  $leg = mysql_query("SELECT id, home_team, away_team FROM avaliabe_games WHERE id = '$game_id'");
                                                                  $gas = mysql_fetch_array($leg);
                                                                  ?>
                                                                  <option><?php echo "$gas[1]"; ?></option>
                                                                  <option><?php echo "$gas[2]"; ?></option>
                                                                  <option value="both">both (select for draw)</option>
                                                                </select>
                                                                </div>

                                                                
                                                            </td>
                                                          </tr>

                                                          <tr>
                                                            <td style="">
                                                            <label for="exampleInputPassword1">Possible out come</label>
                                                               <div class="form-group">
                                                                  <select class="form-control input-sm" name="possible_outcome" required="required">
                                                                  <option value="win">win</option>
                                                                  <option value="draw">draw</option>
                                                                </select>
                                                                </div>
                                                            </td>
                                                          </tr>

                                                          <tr>
                                                            <td style="">
                                                            <label for="exampleInputPassword1">Game type</label>
                                                               <div class="form-group">
                                                                  <select class="form-control input-sm" name="game_type" required="required">
                                                                  <option value="multiple">multiple</option>
                                                                  <option value="pair">pair</option>
                                                                </select>
                                                                </div>
                                                            </td>
                                                          </tr>

                                                             </tr>

                                                             <tr>
                                                            
                                                             </tr>

                                                             <tr>
                                                            <td style="">
                                                            <label for="exampleInputPassword1">Stake amount</label>
                                                               <div class="form-group">
                                                                  <input type="number" id="inputText" placeholder="Amount" class="form-control input-sm" name="stake_amount" required="">
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

                 <?php
                include('footer.php');
                ?>
