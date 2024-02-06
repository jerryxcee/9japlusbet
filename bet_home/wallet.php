<?php
include'connect.php';
include('other_header.php');

?>




                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                    <li style=" margin-bottom: -20px; border: 1px solid #3B5998;">
                                        <div class="match-item list-item" style=" background-color: transparent;">
                     
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px; height: 200px;">
                                                    <tbody>
                                                        <tr> 
                                                            <td style="background-color: #3B5998; text-align: center; padding-top: 70px;">
                                                                
                                                                <span style="color:#fff;text-shadow:0 0 3px rgba(0,0,0,1.8); font-weight: bold; font-size: 30px;"> 
                                                                  ₦<?php echo "$row[12]"; ?>
                                                                </span>
                                                               
                                                            </td>
                                                        </tr>
                                            </tbody>
                                            </table>
                                            </div>
                                            <script src="https://checkout.simplepay.ng/v2/simplepay.js">
                                          </script>

                                          <script>
                                          // Example Configuration SimplePay's Gateway
                                          // Open SimplePay's Gateway
                                          function pay() {
                                          var handler = SimplePay.configure({
                                             token: 'processPayment',
                                             key: 'test_pu_55233424d17c4437a78969a3a0f702dc',
                                             image: ''
                                          });
                                          handler.open(SimplePay.CHECKOUT,
                                              {
                                                 email: 'customer@store.com',
                                                 phone: '+234*',
                                                 description: 'My Test Store Checkout 123-456',
                                                 address: '31 Kade St, Abuja, Nigeria',
                                                 postal_code: '110001',
                                                 city: 'Abuja',
                                                 country: 'NG',
                                                 amount: '110000',
                                                 currency: 'NGN'
                                              });
                                          console.log('executed');
                                          }
                                          </script>
                                            
                                                <table class="table table-striped table-bordered table-hover" style="margin-top: 5px;">
                                                    <tbody>
                                                        <tr> 
                                                        <td>
                                                          <span style="float: left; padding-left: 10px;">
                                                          <button style="font-weight: bold; margin-left: 10px; width: 200px;" name="join_game" class="btn btn-primary btn-xs">Withdraw</button>
                                                          </span>
                                                        <small style="float: right; margin-right: 10px;">
                                                          <button style="font-weight: bold; margin-right: 10px; width: 200px;" name="join_game" class="btn btn-primary btn-xs" onclick="pay();">Deposit</button>
                                                        </small>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                          <td>
                                                            <div style="text-align: center; font-size: 18px; font-weight: 900;">Transactions history</div>
                                                          </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table-striped table-bordered table-hover" style="margin-top: -20px;">
                                                <thead>
                                                  <tr style="background-color: #eee;">
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                  </tr>
                                                </thead>
                                                    <tbody>
                                                   
                                                    <tr> 


                                                    </tr>
                                                   
                                                    </tbody>

                                                </table>


                                            <br>
                                           
                                           
                                        </div>
                                    </li>



                                    
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
    <!-- main-content -->
    <div id="bottom-sidebar">

        <div class="bottom-area-1">

            <div class="wrapper">

                <div class="kopa-logo">
                    <a href="#"><img src="fixtures-results_data/logo.png" alt="logo"></a>
                </div>
                <!-- logo -->

                <nav class="bottom-nav">
                    <ul style="line-height: 99px;" class="bottom-menu">
                   <li><a href="#">
                        <span style="text-transform: capitalize; font-weight: bold;">Help</span>
                        </a>
                    </li>
                        <li>
                            <a href="#"><span style="text-transform: capitalize; font-weight: bold;">News</span></a>
                        </li>
                    <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Check bet slip</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Other users</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Match tables</span></a>
                        </li>
                        <li>
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Create game</span></a>
                        </li>
                        <li class="current-menu-item">
                            <a class="sf-with-ul" href="#"><span style="text-transform: capitalize; font-weight: bold;">Home</span></a>
                        </li>
                    </ul>                
                </nav>

                <!--/main-menu-mobile-->
            
            </div>
            <!-- wrapper -->
        </div>
        <!-- bottom-area-2 -->

        <div class="bottom-area-3">

            <div class="wrapper">

                <div class="widget kopa-newsletter-widget">
                    <div class="newsletter-intro">
                        <span class="news-icon fa fa-envelope"></span>
                            <p>Subscribe to our email newsletter</p>
                    </div>
                    <div class="newsletter-content">
                        <span class="input-icon fa fa-envelope"></span>
                        <form class="newsletter-form clearfix" method="post" action="#">
                            <div class="input-area">
                                <input value="Enter Your Email Address..." size="40" class="name" name="name" type="text">
                            </div>
                            <button type="submit" class="search-submit">
                                <span>Sign me up</span>
                                <span class="fa fa-chevron-right"></span>
                            </button>                 
                        </form>
                        <div id="newsletter-response"></div>
                    </div>
                </div>
                <!-- widget -->
            
            </div>
            <!-- wrapper -->

        </div>
        <!-- bottom-area-3 -->

    </div>
    <!-- bottom-sidebar -->

    <footer id="kopa-footer">
        
        <div class="wrapper clearfix">

            <p id="copyright" class="">Copyright © 2017. All Rights Reserved <a href="#"> Naijaplusbet.com</a></p>

        </div>
        <!-- wrapper -->

    </footer>
    <!-- kopa-footer -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<br><br>
  <div class="modal-dialog" role="document" style="position: relative; z-index: 2000;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Challenge</h4>
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



    <a href="#" class="scrollup"><span class="fa fa-chevron-up"></span></a>

    <script src="js/jquery-1.js"></script> 
    <script src="js/bootstrap.js"></script>
    <script src="js/js"></script>
    
</body>
</html>