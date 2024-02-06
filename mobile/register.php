<?php
include('header.php');
?>
    <div id="main-content" style="background-color: #444; width: auto; margin-top: 2px;">

       

           <br>
               
        <section class="desk-com">
            <div class="container">
                <div class="row">
                <marquee style="background-color: #444; color: #fff; height: 40px; margin-top: -30px; line-height: 40px;">Welcome to 9Ja Plus Bet, Please remember to read and accept the terms and conditions of 9ja Plus Bet before signing up. Under 18 years old users are not accepted. Thanks</marquee>
                    <div class="col-md-12">
                    <?php
                    if (isset($_POST['pass_up'])) {
                        $fname = mysql_escape_string($_POST['fname']);
                        $lname = mysql_escape_string($_POST['lname']);
                        $email = mysql_escape_string($_POST['email']);
                        $username = mysql_escape_string($_POST['username']);
                        $phone_num = mysql_escape_string($_POST['phone_num']);
                        $country = mysql_escape_string($_POST['country']);
                        $city = mysql_escape_string($_POST['city']);
                        $password = mysql_escape_string($_POST['password']);
                        $coupon_key = mysql_escape_string($_POST['coupon_key']);
                        $account = "200";

                        $string2x = str_shuffle('1234567890');
                        $users_id = substr($string2x,0,6);

                    $slx = mysql_query("SELECT * FROM users WHERE username = '$username'");
                    if (mysql_num_rows($slx) > 0 ) {
                        ?>
                        <div style="text-align: center; height: 100px; color: red; font-weight: bold;">
                        <?php
                          echo "sorry, a user with same username already exist";
                        ?>
                        <br><br><br>
                        <a href="register.php">
                            <button name="submit" class="btn btn-primary" style="font-weight: bold;" type="submit">Try again</button>
                        </a>
                        </div>
                        <hr>
                        <?php
                      
                    }else{
                    $sql = mysql_query("INSERT INTO users(id, fname, lname, email, username, phone_num, country, city, password, balance, users_id, bet_pin)VALUES('','$fname','$lname','$email','$username','$phone_num','$country','$city','$password','$account','$users_id','$coupon_key')") or die(mysql_error());
                
                    if ($sql == 1) {
                    ?>
                    <div style="font-weight: 900; color: #fff; text-align: center; font-size: 15px; margin: 20px;">
                    <?php
                      echo "Your Registration was suscessful, please login<br> Save $users_id as your ID";
                    ?>
                    <br><br><br>
                        <a href="login.php">
                            <button name="submit" class="btn btn-primary" style="font-weight: bold;" type="submit">Log in</button>
                        </a>
                        <br>
                    </div>

                    <?php
                    exit();
                    }else{
                        echo "sorry error occured";
                    }
                    }  
                    }   
                    ?>
                    <form action="register.php" method="POST">
                        <input type="text" class="form-control" name="fname" placeholder="First name" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                        <input type="text" class="form-control" name="lname" placeholder="Last name" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                        <input type="text" class="form-control" name="email" placeholder="Email" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                        <input type="text" class="form-control" name="username" placeholder="Username" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                         <input type="text" class="form-control" name="phone_num" placeholder="Phone number" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">


                            <select class="form-control" name="country" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">
                                <option value="Nigeria">Country:</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Anguilla</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaijan</option>
                                <option>Bahamas</option>
                                <option>Bahrain</option>
                                <option>Bangladesh</option>
                                <option>Barbados</option>
                                <option>Belarus</option>
                                <option>Belgium</option>
                                <option>Belize</option>
                                <option>Benin</option>
                                <option>Bhutan</option>
                                <option>Bolivia</option>
                                <option>Bosnia and Herzegovina</option>
                                <option>Botswana</option>
                                <option>Brazil</option>
                                <option>Brunei</option>
                                <option>Bulgaria</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>Cambodia</option>
                                <option>Cameroon</option>
                                <option>Canada</option>
                                <option>Cape Verde</option>
                                <option>Central African Republic</option>
                                <option>Chad</option>
                                <option>Chile</option>
                                <option>China</option>
                                <option>Colombia</option>
                                <option>Comoros</option>
                                <option>Democratic Republic of Congo</option>
                                <option>Republic of Congo</option>
                                <option>Cote d'Ivorie</option>
                                <option>Costa Rica</option>
                                <option>Croatia</option>
                                <option>Cuba</option>
                                <option>Cyprus</option>
                                <option>Czech Republic</option>
                                <option>Denmark</option>
                                <option>Djibouti</option>
                                <option>Dominica</option>
                                <option>Dominican Republic</option>
                                <option>Ecuador</option>
                                <option>Egypt</option>
                                <option>El Salvador</option>
                                <option>Equatorial Guinea</option>
                                <option>Eritrea</option>
                                <option>Estonia</option>
                                <option>Ethiopia</option>
                                <option>Fiji</option>
                                <option>Finland</option>
                                <option>France</option>
                                <option>Gabon</option>
                                <option>Gambia</option>
                                <option>Georgia</option>
                                <option>Germany</option>
                                <option>Ghana</option>
                                <option>Greece</option>
                                <option>Grenada</option>
                                <option>Guatemala</option>
                                <option>Guinea</option>
                                <option>Guinea-Bissau</option>
                                <option>Guyana</option>
                                <option>Haiti</option>
                                <option>Honduras</option>
                                <option>Hungary</option>
                                <option>Iceland</option>
                                <option>India</option>
                                <option>Indonesia</option>
                                <option>Iran</option>
                                <option>Iraq</option>
                                <option>Ireland</option>
                                <option>Israel</option>
                                <option>Italy</option>
                                <option>Jamaica</option>
                                <option>Japan</option>
                                <option>Jordan</option>
                                <option>Kazakhstan</option>
                                <option>Kenya</option>
                                <option>Kiribati</option>
                                <option>Kuwait</option>
                                <option>Kyrgyzstan</option>
                                <option>Laos</option>
                                <option>Latvia</option>
                                <option>Lebanon</option>
                                <option>Lesotho</option>
                                <option>Liberia</option>
                                <option>Libya</option>
                                <option>Liechtenstein</option>
                                <option>Lithuania</option>
                                <option>Luxembourg</option>
                                <option>Macao</option>
                                <option>Macedonia</option>
                                <option>Madagascar</option>
                                <option>Malawi</option>
                                <option>Malaysia</option>
                                <option>Maldives</option>
                                <option>Mali</option>
                                <option>Malta</option>
                                <option>Mauritania</option>
                                <option>Mauritius</option>
                                <option>Mayotte</option>
                                <option>Mexico</option>
                                <option>Monaco</option>
                                <option>Mongolia</option>
                                <option>Montenegro</option>
                                <option>Montserrat</option>
                                <option>Morocco</option>
                                <option>Mozambique</option>
                                <option>Myanmar</option>
                                <option>Namibia</option>
                                <option>Nauru</option>
                                <option>Nepal</option>
                                <option>Netherlands</option>
                                <option>New Caledonia</option>
                                <option>New Zealand</option>
                                <option>Nicaragua</option>
                                <option>Niger</option>
                                <option>Nigeria</option>
                                <option>Niue</option>
                                <option>Norfolk Island</option>
                                <option>North Korea</option>
                                <option>Northern Mariana Islands</option>
                                <option>Norway</option>
                                <option>Oman</option>
                                <option>Pakistan</option>
                                <option>Palau</option>
                                <option>Panama</option>
                                <option>Paraguay</option>
                                <option>Peru</option>
                                <option>Philippines</option>
                                <option>Poland</option>
                                <option>Portugal</option>
                                <option>Puerto Rico</option>
                                <option>Qatar</option>
                                <option>Reunion</option>
                                <option>Romania</option>
                                <option>Russia</option>
                                <option>Rwanda</option>
                                <option>Saudi Arabia</option>
                                <option>Senegal</option>
                                <option>Sierra Leone</option>
                                <option>Singapore</option>
                                <option>Slovakia</option>
                                <option>Slovenia</option>
                                <option>Solomon Islands</option>
                                <option>Somalia</option>
                                <option>South Africa</option>
                                <option>Spain</option>
                                <option>Sudan</option>
                                <option>Suriname</option>
                                <option>Swaziland</option>
                                <option>Sweden</option>
                                <option>Switzerland</option>
                                <option>Taiwan</option>
                                <option>Tajikistan</option>
                                <option>Tanzania</option>
                                <option>Thailand</option>
                                <option>Togo</option>
                                <option>Tonga</option>
                                <option>Tunisia</option>
                                <option>Turkey</option>
                                <option>Uganda</option>
                                <option>Ukraine</option>
                                <option>United Arab Emirates</option>
                                <option>United States</option>
                                <option>Uruguay</option>
                                <option>Uzbekistan</option>
                                <option>Vanuatu</option>
                                <option>United Kingdom</option>
                                <option>Venezuela</option>
                                <option>Yemen</option>
                                <option>Zambia</option>
                                <option>Zimbabwe</option>
                            </select>
                       
                        <input type="text" name="city" class="form-control" placeholder="Location/Address" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                        <input type="password" name="password" class="form-control" placeholder="Password" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                     <input type="text" class="form-control" name="coupon_key" placeholder="Users id(optional)" style="background-color: #fff; color: #444; margin-bottom: 10px; border-radius: 0px;background-color: #eee;">

                    <div class="forgot"> 
                   <label style="color: #fff;">
                    <input required="required" type="checkbox" required=""> 
                    By checking this box, you accept to the 
                    <a href="education.php" style="color: #blue;">terms & conditions</a>, 
                    and have read through our 
                    <a href="service.php" style="color: #blue;">FAQs</a>, you hereby agree to abide by every rules and conduct of this 9Ja Plus Bet.
                    </label>
                    </div>
                    <br>
                   
                    <button type="submit" name="pass_up" class="btn btn-primary btn-lg btn-block" style="border-radius: 0px;">Register</button>
             
                    </form>
                    </div>

                    
                </div>

               

            </div>
        </section>

<br>
<?php
include('footer.php');
?>