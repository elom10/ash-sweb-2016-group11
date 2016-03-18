<html>
			<!--@author: adwoba.bota
					This is the interface code for user login-->
			
	<head>
			<!--list of various styles that will be used in the implementation of the code -->  
		<style>
			.centered{
			position:fixed;
			top:50%;
			left:50%;
			transform:translate(-50%, -50%);
			}
			.image{
			position:fixed;
			top:35%;
			left:50%;
			transform:translate(-50%,-50%);
			}
			
			.body{
			font-family:David;
			background-color:white;
			align:left;
			height:100%;
			font-size:15px;
			}
			
			.wrapper{
			text-align: center;
			position:relative;
			}
			
			.header{
			font-family:David;
			color:#990012;
			text-align:center;
			}
		</style>
	</head>
			<body>
			
				<div class="header">
					<h1><font size =15>LAB_AID</font></h1>
				</div>	
				<div class="wrapper">
					<h3><font size=6> Please enter your details</font></h3>
				</div>
				
				<div class="image">
							<img src="login.jpg" style="width:100px;height:100px;">
							</img></div>
				<!--insert form here-->
				<form action=""method="GET">
					<div class="centered">
							<div>Username:<input type="text" name="username" value=""/> </div><br>
							<div>Password:<input type="text" name="pword" value= "" /></div>
							<div>sign in as:<input type="checkbox" name="sign in"value="user">User
							<input type="checkbox" name="sign in"value="Admin">Admin    <!--currently performs no function in the code-->
					</div>
						<div class="body"><input type="submit" value="submit"></div>
				</form>	
				<a href="Interface.php">Reload</a>
			</body>
			

			<?php
			/*  This is a test case for the login page
				Test for whether login would work 
				
		if(!isset($_REQUEST['username'])){
			exit();	
		}
		$username=$_REQUEST['username'];
		$password=$_REQUEST['pword'];
		
		   //establish connection to database
		$db=new mysqli("127.0.0.1","root","Gyimah@15","webtech");
		if($db->connect_errno){
			//no connection, exit
			exit();
		}
		
		//query the database
		$strQuery="select username, userID from labusers where username like '$username'";
		if($qres=$db->query($strQuery)){
			$result = $qres->fetch_assoc();
		} else {
			echo "Query Failed";
		}
		
		if ($result['userID'] !=$password){
			echo "Access denied";
		}
		else{
			echo "Login successful";
		}
		*/
?>		
</html>	

		
