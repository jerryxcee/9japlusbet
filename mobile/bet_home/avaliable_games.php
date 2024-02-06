<?php
include('header.php');

$game_day = $_GET['game_day'];
?>
<div style="">

<div class="bets m10">
                        <p class="sport-type-match  soccer" style="background-color: #3B5998;">Avaliable games <span style="float: right; margin-right: 20px;"><?php echo "$game_day"; ?></span> </p>
                            <p class="sport-type-match  soccer" style="background-color: #3B5998;">
                                <center class="sport-type-match  soccer" style="background-color: #3B5998;">
                                <a href="avaliable_games.php?game_day=<?php echo "Sunday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Sunday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Sunday</button>
                                </a>
                                <a href="avaliable_games.php?game_day=<?php echo "Monday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Monday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Monday</button>
                                </a>
                                <a href="avaliable_games.php?game_day=<?php echo "Tuesday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Tuesday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Tuesday</button>
                                </a>
                                <a href="avaliable_games.php?game_day=<?php echo "Wednesday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Wednesday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Wednesday</button>
                                </a>
                                <a href="avaliable_games.php?game_day=<?php echo "Thursday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Thursday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Thursday</button>
                                </a>
                                <hr style="margin: 5px;">
                                <a href="avaliable_games.php?game_day=<?php echo "Friday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Friday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Friday</button>
                                </a>
                                <a href="avaliable_games.php?game_day=<?php echo "Saturday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Saturday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Saturday</button>
                                </a>
                                <br><br>
                            </center>
                            </p>
                            
                            <wraptag>

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
                                    $International_Friendlies = "International Friendlies";
                                    $England_League_1 = "England League 1";
                                    ?>
                                    <div class="sidebar widget-area-11" style="">
                                                        <div class="widget kopa-point-widget" style="border: 0px; padding: 1.5px;">
                                                                
                                                                <ul class="clearfix" style="">
                                                                <?php
                                                                $active = "active";
                                                                $ham = mysql_query("SELECT id, home_team, away_team, game_time, league, game_status, game_day FROM avaliabe_games WHERE game_status = '$active' AND game_day = '$game_day' ORDER BY id DESC");
                                                                while ($ewe = mysql_fetch_array($ham)) {
                                                                ?>
                                                                    <li style="border: 1px solid #3B5998; background-color: #eee;">
                                                                         <small style="margin-left: 20px; position: relative; z-index: 200;"><?php echo "$ewe[4]"; ?></small>
                                                                        <small style="margin-right: 20px; float: right; position: relative; z-index: 200;"><?php echo "$ewe[3]"; ?></small>
                                                                        <a href="create_game.php?game_id=<?php echo "$ewe[0]"; ?>">
                                                                        <div class="point-item" style="padding: 5px;">
                                                                            <div class="" style="text-align: center;">

                                                                                <span class="point-thumb">
                                                                                    <img src="logos/<?php echo "$ewe[1]"; ?>.<?php 
                                                                                                  if ($ewe[4] == $World_cup OR $ewe[4] == $International_Friendlies) {
                                                                                                    echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; float: left; width: 30px;" alt="">
                                                                                </span>
                                                                                
                                                                                    <span style="text-transform: capitalize; text-align: center; font-weight: bold; font-size: 12px; color: #444;">
                                                                                        <?php echo "$ewe[1]"; ?> - <?php echo "$ewe[2]"; ?>
                                                                                    </span>

                                                                                <span class="point-thumb" style="">
                                                                                    <img src="logos/<?php echo "$ewe[2]"; ?>.<?php 
                                                                                                  if ($ewe[4] == $World_cup OR $ewe[4] == $International_Friendlies) {
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