<?php
include('header.php');
?>

<div>


                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                    <li style=" margin-bottom: -20px;">
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

                                                <table class="table table-striped table-bordered table-hover" style="margin-top: 5px;">
                                                    <tbody>
                                                        <tr> 
                                                        <td>
                                                            <span style="">
                                                                <a href="withdraw.php">
                                                                  <button style="font-weight: bold; margin-left: 10px; width: 150px;" name="join_game" class="btn btn-primary">Withdraw</button>
                                                                </a>
                                                            </span>
                                                          </td>
                                                          <td>
                                                          <small style="">
                                                              <?php 
                                                              function credit($username,$amount){
                                                                  $sql = mysql_query("UPDATE users SET balance = balance + $amount WHERE username = '$username'");
                                                                  $sql = mysql_query("INSERT INTO transcetions(id, username, amount, status)VALUES('','$username','')");
                                                                  if($sql){}
                                                              }
                                                              ?>
                                                                <form class="form-inline">
                                                                    <script src="https://js.paystack.co/v1/inline.js"></script>
                                                                  <div class="form-group">
                                                                    <div class="input-group">
                                                                      <div class="input-group-addon">₦</div>
                                                                      <input type="text" class="form-control" id="amount" placeholder="Amount" required>
                                                                      <div class="input-group-addon">.00</div>
                                                                    </div>
                                                                  </div>
                                                                  <button type="button" class="btn btn-primary" onclick="payWithPaystack()">Deposit</button>
                                                                </form>
                                                                <script>
                                                                  function payWithPaystack(){
                                                                    var amount = document.getElementById('amount').value;
                                                                    var email = "<?php echo $row['3']; ?>";
                                                                    var phone = "<?php echo $row['5']; ?>";
                                                                    var handler = PaystackPop.setup({
                                                                      key: 'pk_live_9d584aaaed40a938ade89c381a04ea7b466ebebf',
                                                                      email: email,
                                                                      amount: amount * 100,
                                                                      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                                                      metadata: {
                                                                         custom_fields: [
                                                                            {
                                                                                display_name: "Mobile Number",
                                                                                variable_name: "mobile_number",
                                                                                value: phone
                                                                            }
                                                                         ]
                                                                      },
                                                                      callback: function(response){
                                                                          <?php
                                                                          $amount = "<script>document.writeln(amount);</script>";
                                                                          credit($row['0'],$amount); ?>
                                                                          alert('success. transaction ref is ' + response.reference);
                                                                      },
                                                                      onClose: function(){
                                                                          //alert('window closed');
                                                                      }
                                                                    });
                                                                    handler.openIframe();
                                                                  }
                                                                </script>
                                                          </small>
                                                        </td>
                                                        </tr>

                                                        <tr>
                                                          <td>
                                                            <div style="text-align: center; font-size: 18px;">Transactions history</div>
                                                          </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
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


                       
 <?php
                include('footer.php');
                ?>