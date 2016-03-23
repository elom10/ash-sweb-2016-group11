<html>
			<!--@author: adwoba.bota
					This is the login code for users and IT personnels-->
			
	<head>
			<!--insert css sheet here--> 
		<link rel="stylesheet" href="stylesheet.css">
	</head>
			<body>
			
				<div id="interfaceHeader">
					<h1>LAB_AID</h1>
				</div>	
				<div class="wrapper">
					<h3> Please enter your user details</h3>
				</div>
				
				<div class="image">
							<img src="login.jpg" style="width:100px;height:100px;">
							</img></div>
				<!--insert form here-->
				<form action="projectLogin.php"method="GET">
					<div class="centered">
							<div>Username:<input type="text" name="username" value=""/> </div><br>
							<div>Password:<input type="text" name="pword" value= "" /></div>
							<div>sign in as:<input type="checkbox" name="labUsers"value="labUsers">User
							<input type="checkbox" name="sign in"value="Admin">Admin</div> 
					</div>
						<div class="submit"><input type="submit" value="submit"></div>
				</form>	
				<a href="Interface.php">Reload</a>
			</body>
			
</html>	

		
