<?php
include('header.php');
//$game_day = $_GET['game_day'];
$fake = "jerry";
?>

    <div id="main-content" style="background-image: url('img/bg-blurred.jpg'); width: auto; margin-top: 2px;">
        <div class="wrapper" style="background-color: #444;">
        <div class="row" style="">

            <div class="sidebarx" style="">

               <ul class="clearfix mb-60" style="padding-left: 10px;">
                <script>
                function redirect() {
                    document.location.href = 'fake.php?fake=<?php echo $fake ?>' + document.getElementById('search').value;
                    return false;
                }
                </script>
                <br>
                <form onsubmit="return redirect();">
                <input id="search" style="margin-left: 20px;" type="text" />
                <input type="submit" style="border: 0px; border-radius: 0px; color: #fff; font-weight: bold; text-transform: capitalize; background-color: #054E9E;" value="Search">
                </form>

                                    <li style="list-style-type: none; margin-bottom: -20px;">
                                        <div class="match-item list-item">
                                            <div class="match-info" style="background-color: #3B5998; border-color: #444;">
                                               <a href="#">
                                                <span style="color: #ffff; text-transform: capitalize;">Soccer</span>
                                                <span style="color: #ffff;" class="fa fa-plus"></span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </li>

                                    <li style="list-style-type: none;">
                                        <div class="match-item list-item">
                                            <div class="match-info" style="background-color: #3B5998; border-color: #444;">
                                               <a href="#">
                                                <span style="color: #ffff; text-transform: capitalize;">Soccer</span>
                                                <span style="color: #ffff;" class="fa fa-plus"></span>
                                                </a>
                                            </div>
                                            
                                        </div>
                                    </li>
 
                                </ul>
        

            </div>
<style type="text/css">
.carousel-caption{
  padding-bottom:100px;
}
.rw-words-1 span{
    position: absolute;
    opacity: 0;
    overflow: hidden;
    color: #f65a3a;
    font-weight:400 !important;
    -webkit-animation: rotateWord 18s linear infinite 0s;
    -ms-animation: rotateWord 18s linear infinite 0s;
    animation: rotateWord 18s linear infinite 0s;
}
.rw-words-1 span:nth-child(2) { 
    -webkit-animation-delay: 3s; 
    -ms-animation-delay: 3s; 
    animation-delay: 3s; 
    color: #0d9b56;
}
.rw-words-1 span:nth-child(3) { 
    -webkit-animation-delay: 6s; 
    -ms-animation-delay: 6s; 
    animation-delay: 6s; 
    color: #f65a3a; 
}
.rw-words-1 span:nth-child(4) { 
    -webkit-animation-delay: 9s; 
    -ms-animation-delay: 9s; 
    animation-delay: 9s; 
    color:#0d9b56;
}
@-webkit-keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -webkit-transform: translateY(-30px); }
    5% { opacity: 1; -webkit-transform: translateY(0px);}
    17% { opacity: 1; -webkit-transform: translateY(0px); }
    20% { opacity: 0; -webkit-transform: translateY(30px); }
    80% { opacity: 0; }
    100% { opacity: 0; }
}
@-ms-keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -ms-transform: translateY(-30px); }
    5% { opacity: 1; -ms-transform: translateY(0px);}
    17% { opacity: 1; -ms-transform: translateY(0px); }
    20% { opacity: 0; -ms-transform: translateY(30px); }
    80% { opacity: 0; }
    100% { opacity: 0; }
}
@keyframes rotateWord {
    0% { opacity: 0; }
    2% { opacity: 0; -webkit-transform: translateY(-30px); transform: translateY(-30px); }
    5% { opacity: 1; -webkit-transform: translateY(0px); transform: translateY(0px);}
    17% { opacity: 1; -webkit-transform: translateY(0px); transform: translateY(0px); }
    20% { opacity: 0; -webkit-transform: translateY(30px); transform: translateY(30px); }
    80% { opacity: 0; }
    100% { opacity: 0; }
}
.rw-words{
    display: inline;
    text-indent: 10px;
}
.agileits-banner-info span {
    color: #fff;
    font-size: 14px;
    letter-spacing: 3px;
    font-weight: 700;
    text-align: left !important;
}

.agileits_w3layouts_more a {
    font-size: 12px;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    background:#0d9b56;
    padding: .7em 2em;
    display: inline-block;
    margin-top: 40px;
    border-radius:2px;
}
.agileits_w3layouts_more a:focus{
    outline:none;
}
.agileits_w3layouts_more a:hover{
    background:#f65a3a;
}
.agileits_w3layouts_more.menu__item {
    text-align: center;
}

.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
now override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}
</style>

<style type="text/css">
.btn_bet{
    margin-top: -200px;
    margin-right: -360px;
    border: 0px;
    border-radius: 0px;
    font-weight: bold;
    font-size: 17px;
    text-transform: uppercase;
    background-color: #054E9E;
    text-shadow: 1px 2px 2px rgba(0,0,0,0.4);
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6), inset 0 -8px 4px -8px rgba(255,255,255,0.2);}

}
</style>

<style type="text/css">
.btn_bet1{
    margin-top: -200px;
    margin-left: -360px;
    border: 0px;
    border-radius: 0px;
    font-weight: bold;
    font-size: 17px;
    text-transform: uppercase;
    background-color: #054E9E;
    text-shadow: 1px 2px 2px rgba(0,0,0,0.4);
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6), inset 0 -8px 4px -8px rgba(255,255,255,0.2);}

}
</style>
<style type="text/css">
.btn_bet2{
    margin-top: -200px;
    border: 0px;
    border-radius: 0px;
    font-weight: bold;
    font-size: 17px;
    text-transform: uppercase;
    background-color: #054E9E;
    text-shadow: 1px 2px 2px rgba(0,0,0,0.4);
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.6), inset 0 -8px 4px -8px rgba(255,255,255,0.2);}

}
</style>

            <div class="kopa-main-col">

            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" style="height: 275px;">

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">

                 <div class="item active">
                  <img src="slides/slide_1.png" style="height: 275px; min-width: 100%;" alt="...">
                  <div class="carousel-caption">
                    <button type="button" class="btn_bet btn btn-primary btn-lg">Join Now</button>
                  </div>
                </div>

                <div class="item">
                  <img src="slides/slide_2.png" style="height: 275px; min-width: 100%;" alt="...">
                  <div class="carousel-caption">
                    <button type="button" class="btn_bet btn btn-primary btn-lg">Learn more</button>
                  </div>
                </div>

                <div class="item">
                  <img src="slides/slide_3.png" style="height: 275px; min-width: 100%;" alt="...">
                    <div class="carousel-caption">
                    <button type="button" class="btn_bet1 btn btn-primary btn-lg">New games</button>
                  </div>
                </div>

                <div class="item">
                  <img src="slides/slide_4.png" style="height: 275px; min-width: 100%;" alt="...">
                    <div class="carousel-caption">
                    <button type="button" class="btn_bet2 btn btn-primary btn-lg">Play now</button>
                  </div>
                </div>
             
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

              </a>
            </div>

                    <div class="tab-content ft-tab-content mb-30">

                        <div class="tab-pane active" id="fixtures">

                            <div class="widget kopa-match-list-widget">

                                <div class="match-item last-item style1">
                                    <header>
                                    <?php
                                    include('connect.php');
                                    if (isset($_POST['openx'])) {
                                        $username = mysql_escape_string($_POST['username']);
                                        $password = mysql_escape_string($_POST['password']);
                                    $bam = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'") or die(mysql_error());

                                        if (mysql_num_rows($bam)>0) {
                                            $_SESSION['username'] = $username;
                                            echo '<script type="text/javascript">
                                                   window.location = "bet_home/index.php"
                                                  </script>';
                                            exit();
                                        }else{
                                            echo "sorry, an error occured";
                                        }
                                        $_SESSION['username'] = $_POST['username'];
                                    }
                                    ?>
                                        <form action="index.php" method="POST" style="margin-bottom: -30px;">
                                            <input type="text" name="username" placeholder="Username">
                                            <input type="password" name="password" placeholder="Password">
                                            
                                             <button type="submit" name="openx" style="background-color: #3B5998; color: #fff; font-weight: bold; border-color: #3B5998;">Log in</button>
                                            
                                        </form>

                                        <span style="margin-bottom: 6px;"><a href="register.php" style="color: #fff; float: right; text-align: right;"> <em>Register</em></a></span>
                                
                                    </header>
                                
                                </div>  

        
                                <center class="match-date match-home-style" style="font-weight: bold; background-color: #3B5998;">
                                <br>
                                <a href="index.php?game_day=<?php echo "Sunday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Sunday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Sunday</button>
                                </a>
                                <a href="index.php?game_day=<?php echo "Monday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Monday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Monday</button>
                                </a>
                                <a href="index.php?game_day=<?php echo "Tuesday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Tuesday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Tuesday</button>
                                </a>
                                <a href="index.php?game_day=<?php echo "Wednesday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Wednesday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Wednesday</button>
                                </a>
                                <a href="index.php?game_day=<?php echo "Thursday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Thursday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Thursday</button>
                                </a>
                                
                                <a href="index.php?game_day=<?php echo "Friday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Friday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Friday</button>
                                </a>
                                <a href="index.php?game_day=<?php echo "Saturday"; ?>">
                                    <button class="btn btn-info btn-xs" style="
                                    <?php if ($game_day == "Saturday") {
                                        echo "background-color: #ccc";
                                    } ?>;">Saturday</button>
                                </a>
                            <br><br>
                                </center>


                        <ul class="clearfix mb-60" style="padding-left: 10px;">
 
                                <li style="margin-bottom: -25px;">
                                    <small style="color: green;">01:30</small>
                                    <small style="margin-left: 2px; font-weight: bold; font-size: 12px;">Chealsea - manchelster city</small>
                                    &nbsp;
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px; 5px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <hr style="margin-top: 9px;">       
                                </li>

                                <li style="margin-bottom: -25px;">
                                    <small style="color: green;">01:30</small>
                                    <small style="margin-left: 2px; font-weight: bold; font-size: 12px;">Chealsea - manchelster city</small>
                                    &nbsp;
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px; 5px; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <span style="background-color: #3B5998; cursor: pointer; color: #fff; font-weight: bold; border: 0px; border-radius: 0px; padding: 5px; padding-right: 8px; padding-left: 8px;box-shadow: 0 2px 2px rgba(0, 0, 0, 0.6), inset 0 -2px 2px -2px rgba(2,2,2);">1.34</span>
                                    <hr style="margin-top: 12px;">       
                                </li>

                            </ul>
                               

                            </div>
                            <!-- widget --> 
                            
                        </div>
                        <!-- tab-pane -->
                       
                    </div>

                </div>
                <!-- main-col -->


                <div class="sidebar widget-area-11" style="">
                                    

                <div id="carousel-example-genericx" class="carousel slide" data-ride="carousel">


                </div>

                <div class="widget" style="padding: 0px;">

                        <h3 class="widget-title style5" style="font-size: 13px; background-color: #eee; color: #444; border: 1px solid#3B5998;">
                            Live Scores
                        </h3>
                        <ul class="clearfix" style="">
                            <script type="text/javascript" src="https://www.livescore.bz/api.livescore.0.1.js" api="livescore" async></script><a href="https://www.livescore.bz" sport="football(soccer)" data-1="today" lang="en">livescores</a>
                        </ul> 
                    </div>
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