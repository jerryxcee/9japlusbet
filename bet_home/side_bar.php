<?php
$Premier  = "Premier League";
$Champions_l  = "Champions League";
$Bundesliga = "Bundesliga";
$Serie = "Serie A";
$Ligue = "Ligue 1";
$La = "La Liga";
$World_cup = "World cup 2018";
$International_Friendlies = "International Friendlies";
?>
<div class="sidebar widget-area-11" style="margin-left: -15px; padding: 1px;">
                    <div class="widget kopa-point-widget" style="border: 0px; padding: 1.5px;">
                            <h3 class="widget-title style5" style="font-size: 13px;color: #444; background-color: #eee; border: 1px solid#3B5998;">
                               Avaliable games
                            </h3>
                            <ul class="clearfix" style="">
                            <?php
                            $active = "active";
                            $ham = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games WHERE game_status = '$active' ORDER BY id DESC");
                            while ($ewe = mysql_fetch_array($ham)) {
                            ?>
                                <li style=" border: 1px solid #3B5998; background-color: #eee;">
                                     <small style="margin-left: 10px; position: relative; z-index: 200;"><?php echo "$ewe[4]"; ?></small>
                                    <small style="margin-right: 10px; float: right; position: relative; z-index: 200;"><?php echo "$ewe[3]"; ?></small>
                                    <a href="create_game.php?game_id=<?php echo "$ewe[0]"; ?>">
                                    <div class="point-item" style="padding: 5px;">
                                        <div class="" style="text-align: center;">

                                            <span class="point-thumb">
                                                <img src="logos/<?php echo "$ewe[1]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $rowx[4] == $International_Friendlies) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; float: left; width: 30px;" alt="">
                                            </span>
                                            
                                                <span style="text-transform: capitalize; text-align: center; font-weight: bold; font-size: 12px;">
                                                    <?php echo "$ewe[1]"; ?> - <?php echo "$ewe[2]"; ?>
                                                </span>

                                            <span class="point-thumb" style="">
                                                <img src="logos/<?php echo "$ewe[2]"; ?>.<?php 
                                                              if ($rowx[4] == $World_cup OR $rowx[4] == $International_Friendlies) {
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
                        <!-- widget --> 

                    <!-- widget --> 

                    <!-- widget --> 

                    
                    <!-- widget --> 

                </div>
                <!-- sidebar -->