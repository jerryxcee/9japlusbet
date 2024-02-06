<?php
ob_start();
session_start();
include('connect.php');
?>
<html class="ui-mobile">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Bomvibe">
<meta name="author" content=""> 

<meta charset="utf-8">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#3B5998">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#3B5998">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#3B5998">
<meta name="description" content="9Ja Plus Bet, The best social bet in Nigeria">
<meta name="keywords" content="9Ja Plus Bet, The best social bet in Nigeria">
<title>9jplusbet | Nigeria best Social bet</title>
<link rel="shortcut icon" href="img/logo.png">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/superfish.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/megafish.css"> 
        <link rel="stylesheet" type="text/css" href="css/jquery.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/owl_002.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/owl.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/jquery_002.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
    
<link href="css/jquery_1.23.2.min.css" rel="stylesheet">
<link href="css/styles_1.23.2.min.css" rel="stylesheet">
               
        
            </head>
<body class="ui-mobile-viewport ui-overlay-a">
	<div>
		<wrap data-reactroot="">
			<!-- react-empty: 2 --><wrap>
				<!-- react-empty: 4 -->
				<!-- react-empty: 5 -->
		</wrap>
			<wraptag>
				<header>
					<div class="h-s logged-in">
						<div class="h-s_elements">
							<div class="h-s--item register">
								<div class="amount-holder">
									<a href="register.php">
										<button class="btn btn-primary" style="background-color: #3B5998; color: #fff; font-weight: bold; border-color: #3B5998;">
										<span class="fa fa-pencil"></span>
										<span class="login-area_logged-in-item">Register</span>
										</button>
									</a>
								</div>
							</div>
							<div class="h-s--item h-s_logo">
								<a class="h-s_logo-link ui-link" href="index.php">
									<img src="img/logo.png" style="width: 300px; height: 40px;">
								</a>
							</div>
							<div class="h-s--item login-area">
								<div class="amount-holder">
									<a href="login.php">
										<button class="btn btn-primary" style="background-color: #3B5998; color: #fff; font-weight: bold; border-color: #3B5998;">
										<span class="fa fa-arrow-right"></span>
										<span class="login-area_logged-in-item">Log in</span>
										</button>
									</a>
								</div>
							</div>
						</div>
					</header>
					<div data-role="page" class="ui-page ui-page-theme-a ui-page-active">
						<div class="app">
							<div>
								<nav class="pml no-app-bar" style="background-color: blue;">
									<div class="app-bar">
										<div class="app-bar__get table">
											<div class="app-bar__logo table-cell"></div>
												<div class="app-bar__intro-txt table-cell">
													<div class="app-bar--head-txt">Get the Bet9ja App</div>
													<div class="app-bar--txt">Enhance your experience</div>
												</div>
												<div class="app-bar__go table-cell">
													<span class="app-bar__go--download" title="Download">Download</span>
												</div>
											</div>
										</div>
							

										<div id="wrapper" class="wrapper"></div>
										<div class="m-menu"><div class="m-menu__item pm-trigger" style="background-color: #3B5998;">
											<a href="index.php">
											<img src="img/home.png" width="40px;">
											<div class="m-menu__item-title">Home</div>
											</a>
										</div>
										<div class="m-menu__item" style="background-color: #3B5998;">
											<a href="livesores.php">
											<img src="img/footbal.png" width="30px;">
											<div class="m-menu__item-title">Live score</div>
											</a>
										</div>
											<div class="m-menu__item" style="background-color: #3B5998;">
												<a href="avaliable_games.php">
												<img src="img/game.png" width="40px;">
												<div class="m-menu__item-title">Games</div>
												</a>
											</div>
											<div class="m-menu__item register" style="background-color: #3B5998;">
												<a href="register.php">
												<img src="img/users.png" width="30px;">
												<div class="m-menu__item-title" style="color: #fff;">Register</div>
												</a>
											</div>
											
												<div class="m-menu__item" style="background-color: #3B5998;">
													<a href="login.php">
													<img src="img/login.png" width="30px;">
													<div class="m-menu__item-title">Login</div>
													</a>
												</div>
											
											</div>
											<div class="push-menu-mask"></div>
										</div>
									</div>
									<div class="wrapper" id="wrapper">
										<main style="min-height: 300px;"> 
											<div>
												<div class="choose-time-filter">
													<ul>
														<li style="margin-right: 4px; margin-top: 1px;">
															<div style="">
																<a class="soccer" href="index.php" title="Soccer" style="">
																	<img src="img/home.png" width="40px;">
																</a>
															</div>
															<span>Home</span>
														</li>
														<li style="margin-right: 4px; margin-top: 1px;">
															<div>
																<a class="livebetting" href="avaliable_games.php" title="Live" style="">
																	<img src="img/game.png" width="40px;">
																</a>
															</div>
															<span>Games</span>
														</li>
														
														<li style="margin-right: 4px; margin-top: 1px;">
															<div>
																<a class="livebetting" href="livesores.php" title="Live" style="">
																	<img src="img/footbal.png" width="30px;">
																</a>
															</div>
															<span>Live scores</span>
														</li>
														<li style="margin-right: 4px; margin-top: 1px;">
															<div>
																<a class="livebetting" href="premier.php" title="Live" style="">
																	<img src="img/premier.png" width="30px;">
																</a>
															</div>
															<span>Premier League Table</span>
														</li>
														
													</ul>

													</div>