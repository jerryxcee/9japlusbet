<?php
include('header.php');
?>
<div style="">

<div class="bets m10">
                            <p class="sport-type-match  soccer" style="background-color: #3B5998;">Joined games </p>
                            <br>
                            <wraptag>
                               
                                <div class="table game-showdown overview compact" style="margin-top: -20px;">
                                <div>
                                <ul class="clearfix mb-60" style="">
                                <?php
                                $Premier  = "Premier League";
                                $Champions_l  = "Champions League";
                                $Bundesliga = "Bundesliga";
                                $Serie = "Serie A";
                                $Ligue = "Ligue 1";
                                $La = "La Liga";
                                $World_cup = "World cup 2018";

                                $has = mysql_query("SELECT id, username, game_palyed, possible_outcome, stake_amount, game_id, time_joined, game_id, join_pin, game_ava_id FROM join_game WHERE username = '$username' ORDER BY id DESC");
                                while ($bam = mysql_fetch_array($has)) {
                                ?>
                                    <div style="border: 1px solid #3B5998; margin-bottom: 10px;">
                                        <div class="match-item list-item" style="">
                                        <?php
                                        $sqxz = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$bam[9]'");
                                        $vax = mysql_fetch_array($sqxz);
                                        $red = "red";
                                        $yellow = "orange";
                                        $green = "green";
                                        ?>
                                            <div class="r-item">
                                                <table class="table" style="background-color: #eee;">
                                                    <tbody>
                                                        <tr> 
                                                            <td>
                                                                <span class="r-content">
                                                                    
                                                                <span style="text-transform: capitalize; font-weight: bold; color: #444;">
                                                                    <?php echo "$vax[1]"; ?> </span>
                                                                </span>
                                                                -
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: bold; color: #444;">
                                                                    <?php echo "$vax[2]"; ?> </span>    
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $fas = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id FROM create_game WHERE id = '$bam[7]' ORDER BY id DESC");
                                                                $lol = mysql_fetch_array($fas)
                                                                ?>
                                                           
                                                            <span style="color: #444;"><?php echo "$lol[1]"; ?>
                                                                <span style="color: <?php
                                                            if ($lol[2] == 'win') {
                                                                echo "$green";
                                                            }
                                                            if ($lol[2] == 'loss') {
                                                                echo "$red";
                                                            }
                                                            if ($lol[2] == 'draw') {
                                                                echo "$yellow";
                                                            }
                                                            ?>
                                                            ;">
                                                            &nbsp;<?php echo "$lol[2]"; ?>
                                                        </span>
                                                    </span>
                                                            </td>
                                                            <td>
                                                                <span style="text-align: center; color: green;">₦<?php echo "$bam[4]"; ?></span>
                                                            </td>
                                                            <td>
                                                                <span style=" color: #444;">Class: <?php echo "$lol[4]"; ?></span>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                $count_data = mysql_query("SELECT count(*) from join_game WHERE game_id = '$lol[0]'");
                                                        $rw = mysql_fetch_array($count_data);
                                                        ?>
                                                        <span style="float: left; padding-left: 10px; color: #444;"><?php echo "$rw[0]"; ?> Joined</span>
                                                        <small style="float: right; margin-right: 10px;"><?php echo( date('d F Y', time('time_joined') ) ); ?></small>
                                                        <small style="float: right; margin-right: 10px; text-transform: capitalize;">Created by <?php echo "$lol[6]"; ?></small>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <?php     
                                            $blue = "#3B5998";  
                                            ?>
                                            <div class="match-info" style="background-color: 
                                            <?php 
                                             if ( $bam[3] == $vax[6] AND $bam[3] ==$vax[5]) {
                                                echo "$green";
                                            }
                                            if ($vax[5] == "" AND $vax[6] == "") {
                                                echo "$blue";
                                            }
                                            if ($vax[6] != "" AND $vax[5] !="") {
                                                if ($vax[6] != $bam[3] OR $vax[5] != $bam[2]) {
                                                    echo "$red";
                                                }
                                            }
                                             ?>; border-color: #3B5998;">
                                                
                                               <a href="check.php?join_game=<?php echo "$bam[9]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-search"></i>&nbsp;&nbsp; Check</button>
                                                </a>
                                      
                                            </div>
                                            
                                        </div>
                                    </div>

                <div id="m<?php echo "$bam[0]"; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                    <?php
                                        }
                                    ?>
                                </ul>
                                                               
                                                            </div>


                                    
																	</div>
																	</div>
                                                              


<?php
include('footer.php');
?>