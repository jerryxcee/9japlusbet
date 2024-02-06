<?php
include'connect.php';
include('other_header.php');
?>
<?php

  $sqs = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game");
  $ros = mysql_fetch_row($sqs);

$sqlx = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$ros[7]'");
$rowx = mysql_fetch_row($sqlx);
?>

                                <ul class="clearfix mb-60" style="padding-left: 10px;">
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
                                $has = mysql_query("SELECT id, username, game_palyed, possible_outcome, stake_amount, game_id, time_joined, game_id, join_pin, game_ava_id FROM join_game WHERE username = '$username' ORDER BY id DESC");
                                while ($bam = mysql_fetch_array($has)) {
                                ?>
                                    <li style=" margin-bottom: -20px; border: 1px solid #3B5998;">
                                        <div class="match-item list-item">
                                        <?php
                                        $active = "active";
                                        $sqxz = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$bam[9]'");
                                        $vax = mysql_fetch_array($sqxz);
                                        $red = "red";
                                        $yellow = "orange";
                                        $green = "green";
                                        ?>
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px;">
                                                    <tbody>
                                                        <tr> 
                                                            <td>
                                                                <span class="r-content">
                                                                    <img src="logos/<?php echo "$vax[1]"; ?>.<?php 
                                                              if ($vax[4] == $World_cup) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
                                                                    <span style="text-transform: capitalize; font-weight: bold;">
                                                                    <?php echo "$vax[1]"; ?> </span>
                                                                </span>
                                                                -
                                                                <span class="r-content">
                                                                    <span style="text-transform: capitalize; font-weight: bold;">
                                                                    <?php echo "$vax[2]"; ?> </span>
                                                                    <img src="logos/<?php echo "$vax[2]"; ?>.<?php 
                                                              if ($vax[4] == $World_cup) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; width: 30px;" alt="">
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
                                                            &nbsp;<?php echo "$lol[2]"; ?></span></span>
                                                            </td>
                                                            <td>
                                                                <span style="text-align: center; color: green;">₦<?php echo "$bam[4]"; ?></span>
                                                            </td>
                                                            <td>
                                                                <span>Class: <?php echo "$lol[4]"; ?></span>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $count_data = mysql_query("SELECT count(*) from join_game WHERE game_id = '$bam[0]'");
                                                        $rw = mysql_fetch_array($count_data);
                                                        ?>
                                                        <span style="float: left; padding-left: 10px;"><?php echo "$rw[0]"; ?> users Joined</span>
                                                        <small style="float: right; margin-right: 10px;"><?php $str = $bam[6]; echo date('d F Y', strtotime($str)); ?></small>
                                                                <small style="float: right; margin-right: 10px; font-weight: bold;">Created by <?php echo "$bam[1]"; ?></small>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php     
                                            $blue = "#3B5998";  
                                            ?>
                                            <div class="match-info" style="background-color: 
                                            <?php 
                                             if ($bam[3] == $vax[6] AND $bam[3] ==$vax[5]) {
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
                                                
                                                <span style="color: #fff;">Game code: <?php echo "$lol[3]"; ?></span>
                                                <button data-toggle="modal" data-target="#m<?php echo $bam[0]; ?>" style="font-weight: bold; float: left; margin-right: 10px; margin-left: 10px;" class="btn btn-default btn-xs">
                                                    <?php
                                                       $count_comment = mysql_query("SELECT count(*) from cooments WHERE game_pin = '$bam[0]'");
                                                       $rp = mysql_fetch_array($count_comment);
                                                       echo "$rp[0]";
                                                    ?>
                                                    &nbsp;<i class="fa fa-comments-o"></i></button>
                                            </div>
                                            
                                        </div>
                                    </li>

                <div id="m<?php echo "$bam[0]"; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <br>
              <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel" style="margin-left: 10px;">Comments</h4>
                        </div>
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div id="display_comment_<?=$bam[0]?>"></div>
                                        <textarea type="submit" class="form-control" id="msg_<?=$bam[0]?>" placeholder="Type comment..."></textarea>
                                    
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end modal-body -->
                        <div class="modal-footer">
                          <button game_id="<?=$bam[0]?>" style="background-color:  #3B5998; color: #fff; font-weight: bold;" class="comment-button btn">Comment</button>
                        </div>
                      </div>
                    </div>
                    </div>

                                    <?php
                                        }
                                    ?>
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
