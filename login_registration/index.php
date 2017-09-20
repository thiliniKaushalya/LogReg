
<!DOCTYPE html>


<?php

require 'x.php';


?>


<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>Login or Create a Free Account!</h1>
		</div>
		<p>You can upload or watch images from the Image Gallery </p>
			< <form action="register.php" method="post">
				<ul class="left-form">
					<h2>New Account:</h2>
					<li>
						<input type="text"  name="username"  placeholder="Username" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"  name="email" placeholder="Email" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<input type="number"  name="phoneno" placeholder="Phone Number" required/>
						<a href="#" class="icon ticker"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password" name="password"  placeholder="password" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"  name="confirmpassword" placeholder="password" required/>
						<a href="#" class="icon into"> </a>
						<div class="clear"> </div>
					</li> 
					
					<input type="submit" onclick="myFunction()" value="Submit">
						<div class="clear"> </div>
				</ul>
			</form>
			<form method="post">
				<ul class="right-form">
					<h3>Login:</h3>
					<div>
						<li><input type="text"  name="email" placeholder="Email" required/></li>
						<li> <input type="password" name="password" placeholder="Password" required/></li>
						<h4>I forgot my Password!</h4>
							<input type="submit" onclick="myFunction()" name="btn-login" value="Login" >
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
			
		</div>
			

	
</body>
</html>