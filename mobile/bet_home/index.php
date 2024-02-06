<?php
include('header.php');
?>
				<div class="carousel slide">
					<img class="img-responsive" src="img/free-sports-betting-tips-1.jpg">
				</div>

						<div class="bets m10">
                            
                            <p class="sport-type-match  soccer" style="background-color: #3B5998;">Other Created Games </p>
                            <br>
                             <form action="" method="post">
                                <span>Search game:</span><br>
                                <input name="term" placeholder="Enter game code">
                                <button class="btn btn-primary btn-xs">Search</button>
                            </form>
                             <?php
                          include('connect.php');
                         
                          ?>
                          <?php

                          $has = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game ORDER BY id DESC");
                            $bam = mysql_fetch_array($has);
                                   
                          if (!empty($_REQUEST['term'])) {
                            $term = mysql_real_escape_string($_REQUEST['term']); 

                            if ($_REQUEST['term'] == "") {
                                
                            }else{

                            $slx = mysql_query("SELECT * FROM create_game WHERE bet_pin = '$term'");
                            if (mysql_num_rows($slx) > 0 ) {
                                
                            }else{
                            ?>
                            <span style="color: red;">
                            <?php
                                echo "Sorry, game code does not exits";
                            ?>
                            </span>
                            <?php
                            }

                              
                          $sql = "SELECT * FROM create_game WHERE bet_pin LIKE '%".$term."%'"; 
                          $r_query = mysql_query($sql); 

                            while ($row = mysql_fetch_array($r_query)){  
                            ?>
                             <div style="border: 1px solid #3B5998; margin-bottom: 10px;">
                                        <div class="match-item list-item">
                                        <?php
                                        $active = "active";
                                        $sqxz = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome, game_status FROM avaliabe_games WHERE id = '$bam[7]' AND game_status = '$active'");
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
                                                           
                                                            <span style="color: #444;"><?php echo "$bam[1]"; ?>
                                                                <span style="color: <?php
                                                            if ($bam[2] == 'win') {
                                                                echo "$green";
                                                            }
                                                            if ($bam[2] == 'loss') {
                                                                echo "$red";
                                                            }
                                                            if ($bam[2] == 'draw') {
                                                                echo "$yellow";
                                                            }
                                                            ?>
                                                            ;">
                                                            &nbsp;<?php echo "$bam[2]"; ?>
                                                        </span>
                                                    </span>
                                                            </td>
                                                            <td>
                                                                <span style="text-align: center; color: green;">₦<?php echo "$bam[5]"; ?></span>
                                                            </td>
                                                            <td>
                                                                <span style="color: #444;">Class: <?php echo "$bam[4]"; ?></span>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $count_data = mysql_query("SELECT count(*) from join_game WHERE game_id = '$bam[0]'");
                                                        $rw = mysql_fetch_array($count_data);
                                                        ?>
                                                        <span style="float: left; padding-left: 10px; color: #444;"><?php echo "$rw[0]"; ?> Joined</span>
                                                        <small style="float: right; margin-right: 10px;">
                                                            <?php 
                                                            $str = $bam[8];
                                                             echo date('d F Y', strtotime($str)); 
                                                             ?>
                                                        </small>
                                                        <small style="float: right; margin-right: 10px; color: #444; text-transform: capitalize;">Created by <?php echo "$bam[6]"; ?></small>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="match-info" style="background-color: #3B5998; border-color: #3B5998;">
                                                
                                                <?php
                                                  if ($vax[6] == "") {
                                                ?>
                                               <a href="join_game.php?join_game=<?php echo "$bam[0]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-plus"></i>&nbsp;&nbsp; Join</button>
                                                </a>
                                                <?php
                                                }else{
                                                ?>
                                               <a href="join_game.php?join_game=<?php echo "$bam[0]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-search"></i>&nbsp;&nbsp; View</button>
                                                </a>
                                                <?php
                                                }
                                                ?>
                                                <span>Game code: <?php echo "$bam[3]"; ?></span>

                                                <button data-toggle="modal" data-target="#m<?php echo $bam[0]; ?>" style="font-weight: bold; float: left; margin-right: 10px; margin-left: 10px;" class="btn btn-default btn-xs">
                                                    <?php
                                                       $count_comment = mysql_query("SELECT count(*) from cooments WHERE game_pin = '$bam[0]'");
                                                       $rp = mysql_fetch_array($count_comment);
                                                       echo "$rp[0]";
                                                    ?>
                                                    &nbsp;<i class="fa fa-comments-o"></i></button>
                                                    
                                            </div>
                                            
                                        </div>
                                    </div>

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

                            }
                        }
                            ?>
                            <hr style="margin: 0px;">
                            <wraptag>
                                <p class="match-date match-home-style">
                                    <span><?php echo( date('d F Y') ); ?></span>
                                </p>
                                <div class="table game-showdown overview compact" style="margin-top: -10px;">
							 <ul class="clearfix mb-60" style="">
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
                                $has = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game WHERE game_status = '' ORDER BY id DESC");
                                while ($bam = mysql_fetch_array($has)) {
                                ?>
                                    <div style="border: 1px solid #3B5998; margin-bottom: 10px;">
                                        <div class="match-item list-item">
                                        <?php
                                        $active = "active";
                                        $sqxz = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome, game_status FROM avaliabe_games WHERE id = '$bam[7]' AND game_status = '$active'");
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
                                                           
                                                            <span style="color: #444;"><?php echo "$bam[1]"; ?>
                                                                <span style="color: <?php
                                                            if ($bam[2] == 'win') {
                                                                echo "$green";
                                                            }
                                                            if ($bam[2] == 'loss') {
                                                                echo "$red";
                                                            }
                                                            if ($bam[2] == 'draw') {
                                                                echo "$yellow";
                                                            }
                                                            ?>
                                                            ;">
                                                            &nbsp;<?php echo "$bam[2]"; ?>
                                                        </span>
                                                    </span>
                                                            </td>
                                                            <td>
                                                                <span style="text-align: center; color: green;">₦<?php echo "$bam[5]"; ?></span>
                                                            </td>
                                                            <td>
                                                                <span style="color: #444;">Class: <?php echo "$bam[4]"; ?></span>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $count_data = mysql_query("SELECT count(*) from join_game WHERE game_id = '$bam[0]'");
                                                        $rw = mysql_fetch_array($count_data);
                                                        ?>
                                                        <span style="float: left; padding-left: 10px; color: #444;"><?php echo "$rw[0]"; ?> Joined</span>
                                                        <small style="float: right; margin-right: 10px;">
                                                            <?php
                                                            $str = $bam[8];
                                                             echo date('d F Y', strtotime($str)); 
                                                             ?>
                                                         </small>
                                                        <small style="float: right; margin-right: 10px; color: #444; text-transform: capitalize;">Created by <?php echo "$bam[6]"; ?></small>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="match-info" style="background-color: #3B5998; border-color: #3B5998;">
                                                
                                                <?php
                                                  if ($vax[6] == "") {
                                                ?>
                                               <a href="join_game.php?join_game=<?php echo "$bam[0]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-plus"></i>&nbsp;&nbsp; Join</button>
                                                </a>
                                                <?php
                                                }else{
                                                ?>
                                               <a href="join_game.php?join_game=<?php echo "$bam[0]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-search"></i>&nbsp;&nbsp; View</button>
                                                </a>
                                                <?php
                                                }
                                                ?>
                                                <span style="color: #fff;">Game code: <?php echo "$bam[3]"; ?></span>
                                                <button data-toggle="modal" data-target="#m<?php echo $bam[0]; ?>" style="font-weight: bold; float: left; margin-right: 10px; margin-left: 10px;" class="btn btn-default btn-xs">
                                                    <?php
                                                       $count_comment = mysql_query("SELECT count(*) from cooments WHERE game_pin = '$bam[0]'");
                                                       $rp = mysql_fetch_array($count_comment);
                                                       echo "$rp[0]";
                                                    ?>
                                                    &nbsp;<i class="fa fa-comments-o"></i></button>
                                                    
                                            </div>
                                            
                                        </div>
                                    </div>

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



<script type="text/javascript" src="js/jquery_1.js"></script>
                  <script type="text/javascript">
                        var game_id = undefined;
                        var msg = $("#msg").val();
                        $(document).ready(function(){
                            //alert("jquery is working");
                            $(".comment-button").click(function(elem){
                                console.log(elem.target);
                                console.log("clicked!!!");
                                game_id = $(elem.target).attr("game_id");
                                var msg = $("#msg_"+game_id).val();
                                console.log("Comment is " + msg);
                                $.ajax({
                                    url:"ajax_comment.php",
                                    type: "POST", 
                                    data: {
                                        "done": 1,
                                        "msg" : msg,
                                        "game_id": game_id
                                    },
                                    success: function(data){
                                        displayFromDatabase("display_comment_"+game_id, game_id);
                                        $("#msg").val('');
                                    }
                                })
                            });
                        });

                        function displayFromDatabase(id, game_id){ 
                            console.log("id is " + id, "post id is "+ game_id);
                            $.ajax({
                                url: "ajax_comment.php",
                                type: "POST", 
                                data: {
                                    "display": 1,
                                    "msg" : msg,
                                    "game_id": game_id
                                },
                                success: function(d){
                                    $("#"+id).html(d);
                                }
                            });
                        }
                        $(".comment-button").toArray().forEach(function(evt){

                           var id = $(evt).attr("game_id");
                           displayFromDatabase("display_comment_"+id, id);
                        });
                        displayFromDatabase(); // To output when the page loads
                       // setInterval(displayFromDatabase, (2 * 1000)); // x * 1000 to get it in seconds
                    </script>														


<?php
include('footer.php');
?>
