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
                            <marquee style="font-size: 15px; color: #fff;"></marquee>
                        </li>
                    </ul>           

                </nav>
             
                <br>


    <!-- Load jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Load Stats FC League Table SDK -->
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://statsfc-4f51.kxcdn.com/widget/table-2.0.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'statsfc-table-js'));
    </script>

    <!-- Your league table here -->
    <div class="statsfc-table"
        data-key="dC_ioFOVPTvB1X74I2Wm3GQ0SPFgg_f_6QmymfqD"
        data-competition="EPL"
        data-table-type="full"
        data-show-badges="true"
        data-use-default-css="true">
    </div>




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
                               <a href="register.php">
                                    <button type="button" style="margin-bottom: -20px;" class="btn btn-primary btn-lg btn-block">Register</button>
                               </a>
                               <br>
                               <a href="login.php">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Login</button>
                                </a>
                            </h3>
                            <ul class="clearfix" style="">

                                <img src="img/246g2i.gif" style="width: 100%;">
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