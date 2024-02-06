<!DOCTYPE html >
<html>
<head>
	<title>Streamin'</title>
    <script src="script.js" type="text/javascript">
         
    </script>
    
  
    <?php echo $script; ?>
	<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				 <a href="index.php"><img src="images/logo_streamin_big.png" width="250"  alt="" title=""/></a>
									
			</div>
            

			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="" method="post">
					<h1>Member Login</h1>

					
					<label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="password">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="" method="post">
					<h1>Not a member yet? Sign Up!</h1>		
                    
	
					<label class="grey" for="username">Username:</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="email">Password</label>
					<input class="field" type="password" name="password" id="email" size="23" />
					<label>by clicking <b>register</b>, you agree to our Terms.</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>
            
            
            <div class="left">
            
            <h1>Members panel</h1>
            
            <p>You can put member-only data here</p>
            <a href="registered.php">View a special member page</a>
            <p>- or -</p>
            <a href="?logoff">Log off</a>
            
            </div>
            
            <div class="left right">
            </div>

		</div>
	</div> <!-- /login -->	


	
</div> <!--panel -->
	  <div id="background">
			  <div id="page">
			
					 <div class="header">
						<div class="footer">
							<div class="body">
							  
									<div id="sidebar">
									    <a href="index.php"><img id="logo" src="images/logo_streamin.png" width="154"  alt="" title=""/></a>
									
										<ul class="navigation">
										    <li class="active" ><a href="index.php">HOME</a></li>
											<li><a href="index.php">ABOUT</a></li>
											<li><a href="index.php"> POPULAR ALBUM </a></li>
										</ul>
										
										<div class="connect">
										    <a href="http://facebook.com/freewebsitetemplates" class="facebook">&nbsp;</a>
											<a href="http://twitter.com/fwtemplates" class="twitter">&nbsp;</a>
											<a href="http://www.youtube.com/fwtemplates" class="vimeo">&nbsp;</a>
										</div>
										
										<div class="footenote">
										  <span>&copy; Copyright &copy; 2011.</span>
										  <span><a href="index.php">STREAMIN'</a> all rights reserved</span>
										</div>
										
									</div>
									<div id="content" >
									
									    <img src="images/cotton-flower.jpg" width="726" height="546" alt="" title="">
									   
									    	<div id="maincontent">
									    	<img class="loading" src="images/ajax-loader.gif" width="120px" height="120px">
									    	</div>
									    	
										<div class="featured">
										      <div class="header">
											     <ul>
														<li class="first">
															<!--<p>hi.</p> -->
															<img src="images/hi.jpg" width="50" height="62" alt="" title="" >
														</li>
														<li class="last">
															<p>
																Free Streaming mp3 and other audio files. Free Upload your album and downloads.
															</p>
														</li>
												 </ul>
											  </div>
											  <div class="body">
											   <form id="searchForm"  action="">
											<div class="searchLabel">Start Lookin' Here:</div>
											<input class="searchInput" type="text" name="search" id="search" value="" size="20" />
											<button id="searchButton"></button>	
											</form>					
											  </div>
									    </div>
									</div>
						</div>
					 </div>
					 <div class="shadow">&nbsp;</div>
			  </div>    
	  </div>    
	
</body>
</html>

