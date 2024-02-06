<?php
include('header.php');
?>

<?php
$join_game = $_GET['join_game'];

  $sqs = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game WHERE game_id = '$join_game'");
  $ros = mysql_fetch_row($sqs);

$sqlx = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$ros[7]'");
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
                                                                echo "img/Serie_A.jpg";
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
                                                              if ($rowx[4] == $Ligue) {
                                                                echo "img/ligue1.jpg";
                                                              }
                                                             ?>'); text-align: center; padding-top: 70px; background-repeat: no-repeat; background-size: cover; background-position: 100% 30%;">
                                                                <span class="r-content" style="">
                                                                    <img src="logos/<?php echo "$rowx[1]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 12px;"><?php echo "$rowx[1]"; ?>&nbsp;&nbsp;&nbsp;</span>

                                                                </span>
                                                                <span style="color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-weight: bold;"> v </span>
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: 900;color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-size: 12px;">&nbsp;&nbsp;&nbsp;<?php echo "$rowx[2]"; ?>  </span>
                                                                    <img src="logos/<?php echo "$rowx[2]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
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
                                                            if ($rowx[6] == $ros[2] AND $rowx[5] == $ros[1]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6]  AND $rowx[5] != "") {
                                                              if ($rowx[6] != $ros[2] OR $rowx[5] != $ros[1]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;">
                                                            <small style="text-transform: capitalize;font-weight: bold;"><?php echo "$ros[6]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($rowx[6] == $ros[2] AND $rowx[5] == $ros[1]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] AND $rowx[5] != "") {
                                                              if ($rowx[6] != $ros[2] OR $rowx[5] != $ros[1]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;"><?php echo( date('d F Y', time($ros[8]) ) ); ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($rowx[6] == $ros[2] AND $rowx[5] == $ros[1]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] AND $rowx[5] != "") {
                                                              if ($rowx[6] != $ros[2] OR $rowx[5] != $ros[1]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;">₦<?php echo "$ros[5]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($rowx[6] == $ros[2] AND $rowx[5] == $ros[1]) {
                                                                echo "$green";
                                                            }
                                                            if ($rowx[6] AND $rowx[5] != "") {
                                                              if ($rowx[6] != $ros[2] OR $rowx[5] != $ros[1]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;">
                                                            <small style="font-weight: bold;"><?php echo "$ros[1]"; ?> - <?php echo "$ros[2]"; ?></small>
                                                            <small style="float: right;">creator</small>
                                                          </td>

                                                        </tr>
                                                    <?php 
                                                      $ban = mysql_query("SELECT id, username, game_palyed, possible_outcome, stake_amount, game_id, time_joined, game_ava_id FROM join_game WHERE game_ava_id = '$join_game'");
                                                      while ($nas = mysql_fetch_array($ban)) {

                                                        $exxp = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$ros[7]'");
                                                          $mom = mysql_fetch_row($exxp);
                                                    ?>
                                                        <tr> 
                                                        
                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3] AND $mom[5] == $nas[2]) {
                                                                echo "$green";
                                                            }
                                                            if ($mom[6] AND $mum[5] != "") {
                                                              if ($mom[6] !== $nas[3] OR $mom[5] !== $nas[2]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;">
                                                            <small style="text-transform: capitalize;"><?php echo "$nas[1]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3] AND $mom[5] == $nas[2]) {
                                                                echo "$green";
                                                            }
                                                             if ($mom[6] AND $mum[5] != "") {
                                                              if ($mom[6] !== $nas[3] OR $mom[5] !== $nas[2]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;
                                                            ?>;">
                                                            <small style=""><?php echo( date('d F Y', time($nas[6]) ) ); ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3] AND $mom[5] == $nas[2]) {
                                                                echo "$green";
                                                            }
                                                             if ($mom[6] AND $mum[5] != "") {
                                                              if ($mom[6] !== $nas[3] OR $mom[5] !== $nas[2]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;
                                                            ?>;">
                                                            <small style="">₦<?php echo "$nas[4]"; ?></small>
                                                          </td>

                                                          <td style="background-color: <?php
                                                            if ($mom[6] == $nas[3] AND $mom[5] == $nas[2]) {
                                                                echo "$green";
                                                            }
                                                             if ($mom[6] AND $mum[5] != "") {
                                                              if ($mom[6] !== $nas[3] OR $mom[5] !== $nas[2]) {
                                                                echo "$red";
                                                              }
                                                            }
                                                            ?>;
                                                            ?>;">
                                                            <small style=""><?php echo "$nas[2]"; ?> - <?php echo "$nas[3]"; ?></small>
                                                          </td>

                                                        </tr>
                                                      <?php
                                                        }
                                                        $exp = mysql_query("SELECT sum(stake_amount) FROM join_game WHERE game_id = '$ros[0]'");
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
                                                 
                                            ?>
                                            </div>

                                           
                                        </div>
                                    </li>



                                    
                                </ul>

<script type="text/javascript">
function showstuff(element){
    document.getElementById("win").style.display = element=="win"?"block":"none";
    document.getElementById("draw").style.display = element=="draw"?"block":"none";
}
</script>



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

