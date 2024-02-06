<?php
include('header.php');
?>

<div>


                                <ul class="clearfix" style="padding-left: 1px; margin-top: -20px;">

                                    <li style=" margin-bottom: -20px;">
                                        <div class="match-item list-item" style=" background-color: #444;;">
                                            
                                            <div class="r-item">
                                                <table class="table" style="margin-bottom: -10px; height: 200px;">
                                                  <span style="font-weight: bold; font-size: 16px; color: #fff; padding: 10px;">Withdrawal Request form</span>
                                                    <tbody>
                                                      
                                                        <tr> 
                                                        <?php
                                                        if (isset($_POST['withdraw_am'])) {
                                                          $acc_name = mysql_escape_string($_POST['acc_name']);
                                                          $bank = mysql_escape_string($_POST['bank']);
                                                          $acc_num = mysql_escape_string($_POST['acc_num']);
                                                          $withdraw_amount = mysql_escape_string($_POST['withdraw_amount']);

                                                         $solu = mysql_query("INSERT INTO withdraw(id, username, account_name, account_bank, acc_number, amount)VALUES('','$username','$acc_name','$bank','$acc_num','$withdraw_amount')");

                                                          if ($solu == 1) {
                                                            echo "<br><hr><span style='color: #fff;'>Your request has been sent successfully, we will fund your account within 24hours.</span>";
                                                          }else{
                                                            echo "sorry, an error occured please try again.";
                                                          }
                                                        }
                                                        ?>
                                                            <td style="text-align: align-left;">
                                                              <form action="withdraw.php" method="POST">
                                                                <div class="form-group">
                                                                   <label style="color: #fff;">Account name:</label>
                                                                   <input type="text" name="acc_name" class="form-control">
                                                                 </div>

                                                                 <div class="form-group">
                                                                   <label style="color: #fff;">Bank name:</label>
                                                                   <select name="bank" type="text" class="form-control">
                                                                      <option selected>Choose</option>
                                                                      <option value="access">Access Bank</option>
                                                                      <option value="citibank">Citibank</option>
                                                                      <option value="diamond">Diamond Bank</option>
                                                                      <option value="ecobank">Ecobank</option>
                                                                      <option value="fidelity">Fidelity Bank</option>
                                                                      <option value="fcmb">First City Monument Bank (FCMB)</option>
                                                                      <option value="fsdh">FSDH Merchant Bank</option>
                                                                      <option value="gtb">Guarantee Trust Bank (GTB)</option>
                                                                      <option value="heritage">Heritage Bank</option>
                                                                      <option value="Keystone">Keystone Bank</option>
                                                                      <option value="rand">Rand Merchant Bank</option>
                                                                      <option value="skye">Skye Bank</option>
                                                                      <option value="stanbic">Stanbic IBTC Bank</option>
                                                                      <option value="standard">Standard Chartered Bank</option>
                                                                      <option value="sterling">Sterling Bank</option>
                                                                      <option value="suntrust">Suntrust Bank</option>
                                                                      <option value="union">Union Bank</option>
                                                                      <option value="uba">United Bank for Africa (UBA)</option>
                                                                      <option value="unity">Unity Bank</option>
                                                                      <option value="wema">Wema Bank</option>
                                                                      <option value="zenith">Zenith Bank</option>
                                                                      </select>
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label style="color: #fff;">Account number:</label>
                                                                     <input name="acc_num" type="number" class="form-control">
                                                                  </div>
                                                                  <div class="form-group">
                                                                     <label style="color: #fff;">Amount to withdraw <small style="font-size: 11px;">(Amount must not be less than N5000)</small>:</label>
                                                                     <input name="withdraw_amount" type="number" id="inputText" class="form-control">
                                                                  </div>
                                                                 
                                                                 <button name="withdraw_am" style="font-weight: bold; float: right; margin-right: 10px; width: 150px;" class="btn btn-primary btn-xs">Request payment</button>
                                                               </form>
                                                               <br>
                                                            </td>
                                                        </tr>
                                            </tbody>
                                            </table>
                                            </div>

                                            


                                            <br>
                                           
                                           
                                        </div>
                                    </li>



                                    
                                </ul>

  <script type="text/javascript">

      function doIt(e)
      {
          var e = e || event;
          
          if (e.keyCode == 32) return false;
              
      }

      function pasteIt(e)
      {
          var e = e || event;
          
          this.value = this.value.replace(/\s/g,'');
              
      }

      window.onload = function(){
          var inp = document.getElementById("inputText");
          
          inp.onkeydown = doIt;
          inp.oninput = pasteIt;
      };
    </script>


                       
 <?php
                include('footer.php');
                ?>