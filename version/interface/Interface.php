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
				<?php
				
				echo' <form action=""method="GET">';
					echo'<div class="centered">';

							echo'<div>Username:<input type="text" name="username" value=""/> </div><br>';
							echo'<div>Password:<input type="text" name="pword" value= "" /></div>';
							echo'<div>sign in as:<input type="checkbox" name="labUsers"value="labUsers">User';
							echo'<input type="checkbox" name="Admin"value="Admin">Admin</div>'; 
					echo'</div>';
						echo'<div class="submit"><input type="submit" value="submit"></div>';
				echo'</form>';	
				echo'<a href="Interface.php">Reload</a>';

	if (isset ($_REQUEST['labUsers'])){
						
		include_once("ProjectUsers.php");

		$obj = new ProjectUsers();
		if(!isset($_REQUEST['username'])){
			exit();
		}
		$username=$_REQUEST['username'];
		$password=$_REQUEST['pword'];
		// $user=$_REQUEST["labUsers"];	

	    $result = $obj->login($username,$password);
         $row = $obj->fetch();
			//print_r($result);
 
		if ($row < 1){
			echo "Access denied";
		//	header('Location:reportpage.php');
		}
		else{
			header('Location:reportpage.php');
		}
	}

	if (isset ($_REQUEST['Admin'])){
	include_once("it.php");
         $obj = new it();

    if(isset($_REQUEST['username']))
	$username=$_REQUEST['username'];
		
	if(isset($_REQUEST['pword']))
	$password=$_REQUEST['pword'];

    $result = $obj->login($username,$password);
    $row = $obj->fetch();

    if ($row > 0) {
	echo "login successful";
	header("location:  ../equipment/equipmentlist.php");
	}
    elseif ($row < 1){
	echo "login not successful";
}
}

	?>
</body>
			
</html>	

		
