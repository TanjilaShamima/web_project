<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>University Prediction System....</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="shortcut icon" type="image/png" href="images/logo.png" />
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/jquery.min.js"></script>
	
</head>
<body>
	<div class="wrapper">
		<div class="main_wrapper">
			<div class="top_log_header">
				<div class="top_log_head">
					<div class="log_menu_1">
						<ul>
							<li><a href="#"><img src="images/call.png" alt="call" />01616829999</a></li>
							<li><a href="#"><img src="images/gnail.png" alt="gmail" />universitypredictionsystem@gmail.com</a></li>
							</a></li>
							<li><a href="#"><img src="images/map.png" alt="map" />Uttara,Dhaka</a></li>
						</ul>
					</div>
					<div class="log_menu">
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="policy.html">Refund Policy</a></li>
							<li><a href="term.html">Terms of Services</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					
				</div>
				
			</div>
			
			<div class="middle_log_header">
				<div class="middle_log_head">
					<div class="log_logo">
						<img src="images/logo.png" alt="logo" />
						<h2>University Prediction System</h2>
					</div>
				</div>
			</div>
			
			<form action="log.php" method="post">
				<div class="log">
					<div class="log_in_with_social_site">
						<br />
						
						<h2>Log In with</h2>
						<div class="log_social">
							<ul>
								<li><a href="http://facebook.com"><img src="images/iconfinder_facebook_386622.png" alt="facebook" /></a></li>
								<li><a href="http://gmail.com"><img src="images/gnail.png" alt="gmail" /></a></li>
								<li><a href="http://google.com"><img src="images/google.png" alt="google" /></a></li>
							</ul>
						</div>
					</div>
					<div class="log_in_form">
						<div class="log_in">
							<div class="textbox">
								<input type="email" name="email" placeholder="E-mail"/><br />
							</div>									
							<div class="textbox">
								<input type="password" name="pass" placeholder="Password"/><br />
							</div>	<br />					
							<div class="text_box">
								<input type="checkbox" value="Remember Me" name="Remember Me" /><a href="#">Remember Me</a><br />
							</div>
							<div class="text_box2">
								<ul>
									<li><a href=""><img src="images/lock1.png" alt="forgot" />Forgot Password?</a></li>
								</ul>
							</div><br /><br />
							<div class="log_button">
								<input type="submit" value="Log In" name="submit"/>
							</div><br /><br />
							<div class="log_message">
								<p>Don't have an account?</p><br />
								<a href="register.html">Register Now</a>
							</div>
						
						</div>
					</div>
				</div>
			</form>
			
			
			
		</div>
		<br />
		<br />
		<br />
		<br />
		
	</div>
	<?php 
		include_once'footer.php';
	?>
	
</body>
</html>