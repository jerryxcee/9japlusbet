<?php
include('header.php');
?>


    <div id="main-content" style="background-image: url('img/bg-blurred.jpg'); width: auto; margin-top: 2px;">

        <div class="wrapper" style="background-color: #444;">

           

            <div class="row" style="">

                <div class="kopa-main-col">



                    <div class="tab-content ft-tab-content mb-30">

                        <div class="tab-pane active" id="fixtures">

                            <div class="widget kopa-match-list-widget">

                               

                    <nav class="kopa-main-nav" style="background-color: #3B5998;">
                    <ul class="main-menu sf-menu sf-js-enabled sf-arrows">


                       
                        <li>
                            <marquee style="font-size: 15px; color: #fff;">These are our Avaliable games, click on any one to create games for other users to join.</marquee>
                        </li>
                    </ul>           

                </nav>
               <p class="match-date match-home-style" style="font-weight: bold; margin-left: 20px; margin-bottom: -20px;">
                <span>Avaliable games</span><br>
                    <span><?php echo( date('d F Y') ); ?></span>
                </p>
                <br>


                    <?php
                        $Premier  = "Premier League";
                        $Champions_l  = "Champions League";
                        $Bundesliga = "Bundesliga";
                        $Serie = "Serie A";
                        $Ligue = "Ligue 1";
                        $La = "La Liga";
                        $World_cup = "World cup 2018";
                        ?>
                                <ul class="clearfix mb-60" style="padding-left: 10px; padding-right: 10px;">
                                
                            <?php
                            $active = "active";
                            $ham = mysql_query("SELECT id, home_team, away_team, game_time, league FROM avaliabe_games WHERE game_status = '$active' ORDER BY id DESC");
                            while ($ewe = mysql_fetch_array($ham)) {
                            ?>
                                <li style=" border: 1px solid #3B5998; background-color: #eee; margin-bottom: -25px;">
                                    <a href="login.php">
                                    <div class="point-item" style="padding: 15px;">
                                        <div class="" style="text-align: center;">

                                            <span class="point-thumb">
                                                <img src="logos/<?php echo "$ewe[1]"; ?>.<?php 
                                                              if ($ewe[4] == $World_cup) {
                                                                echo "png"; }else{ echo "ico"; } ?>" style="height: 30px; float: left; width: 30px;" alt="">
                                            </span>
                                            
                                                <span style="text-transform: capitalize; text-align: center; font-weight: bold; font-size: 12px;">
                                                    <?php echo "$ewe[1]"; ?>&nbsp;&nbsp; v &nbsp;&nbsp;<?php echo "$ewe[2]"; ?>
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
                            <!-- widget --> 
                            
                        </div>
                        <!-- tab-pane -->
                       
                    </div>

                </div>
                <!-- main-col -->


                <div class="sidebar widget-area-11" style="margin-left: -15px; padding: 1px;">
                    <div class="widget kopa-point-widget" style="border: 0px; padding: 1.5px;">
                            <h3 class="widget-title style5" style="font-size: 13px; background-color: #eee; color: #444; border: 1px solid#3B5998;">
                                Live Scores
                            </h3>
                            <ul class="clearfix" style="">

                            <script type="text/javascript" src="https://www.livescore.bz/api.livescore.0.1.js" api="livescore" async></script><a href="https://www.livescore.bz" sport="football(soccer)" data-1="today" lang="en">livescores</a>


                            </ul>
                            
                        </div>
                        <!-- widget --> 

                    <!-- widget --> 

                    <!-- widget --> 

                    
                    <!-- widget --> 

                </div>
                <!-- sidebar -->

            </div>
            <!-- row -->
        
        </div>
        <!-- wrapper -->

    </div>
    <?php
include('footer.php');
    ?>