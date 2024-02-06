<?php
include('header.php');
?>
<div style="">

<div class="bets m10">
                            <p class="sport-type-match  soccer" style="background-color: #3B5998;">Created games </p>
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
                                $has = mysql_query("SELECT id, team_played, possible_outcome, bet_pin, game_type, stake_amount, created_by, game_id, time_created FROM create_game WHERE created_by = '$username' ORDER BY id DESC");
                                while ($bam = mysql_fetch_array($has)) {
                                ?>
                                    <div style="border: 1px solid #3B5998; margin-bottom: 10px;">
                                        <div class="match-item list-item">
                                        <?php
                                        $sqxz = mysql_query("SELECT id, home_team, away_team, game_time, league, team_win, posssible_outcome FROM avaliabe_games WHERE id = '$bam[7]'");
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
                                                        <small style="float: right; margin-right: 10px;"><?php echo( date('d F Y', time('time_created') ) ); ?></small>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>

                                            <?php
                                            $blue = "#3B5998";
                                            ?>

                                             <div class="match-info" style="background-color: <?php 
                                            if ( $bam[2] == $vax[6] AND $bam[1] ==$vax[5]) {
                                                echo "$green";
                                            }
                                            if ($vax[5] == "" AND $vax[6] == "") {
                                                echo "$blue";
                                            }
                                            if ($vax[6] != "" AND $vax[5] !="") {
                                                if ($vax[6] != $bam[2] OR $vax[5] != $bam[1]) {
                                                    echo "$red";
                                                }
                                            }
                                             ?>; border-color: #3B5998;">
                                               
                                               <a href="check.php?join_game=<?php echo "$bam[7]"; ?>">
                                                    <button style="font-weight: bold; float: right; margin-right: 10px;" class="btn btn-default btn-xs"><i class="fa fa-search"></i>&nbsp;&nbsp;Check</button>
                                                </a>
                             
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
                                                               
                                                            </div>


                                    
																	</div>
																	</div>

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