<?php
include('header.php');
?>
<div style="">

<div class="bets m10">
                            <p class="sport-type-match  soccer" style="background-color: #3B5998;">Avaliable games </p>
                            <wraptag>
                                <p class="match-date match-home-style">
                                    <span><?php echo( date('d F Y') ); ?></span>
                                </p>
                                <div class="table game-showdown overview compact" style="margin-top: -20px;">
							<div class="">
								 <?php
                                    $Premier  = "Premier League";
                                    $Champions_l  = "Champions League";
                                    $Bundesliga = "Bundesliga";
                                    $Serie = "Serie A";
                                    $Ligue = "Ligue 1";
                                    $La = "La Liga";
                                    $World_cup = "World cup 2018";
                                    ?>
                                    <div class="sidebar widget-area-11" style="">
                                                        <div class="widget kopa-point-widget" style="border: 0px; padding: 1.5px;">
                                                                
                                                                <ul class="clearfix" style="">
                                                                <?php
                                                                $ham = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games ORDER BY id DESC");
                                                                while ($ewe = mysql_fetch_array($ham)) {
                                                                ?>
                                                                    <li style=" border: 1px solid#3B5998;">
                                                                        <a href="login.php">
                                                                        <div class="point-item" style="padding: 5px;">
                                                                            <div class="" style="text-align: center;">

                                                                                <span class="point-thumb">
                                                                                    <img src="logos/<?php echo "$ewe[1]"; ?>.<?php 
                                                                                                  if ($ewe[4] == $World_cup) {
                                                                                                    echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; float: left; width: 30px;" alt="">
                                                                                </span>
                                                                                
                                                                                    <span style="text-transform: capitalize; text-align: center; font-weight: bold; font-size: 12px;">
                                                                                        <?php echo "$ewe[1]"; ?> - <?php echo "$ewe[2]"; ?>
                                                                                    </span>

                                                                                <span class="point-thumb" style="">
                                                                                    <img src="logos/<?php echo "$ewe[2]"; ?>.<?php 
                                                                                                  if ($ewe[4] == $World_cup) {
                                                                                                    echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; float: right; width: 30px;" alt="">
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        </a>
                                                                    </li>

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