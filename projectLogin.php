<?php 
			/*@Isaac Amoafo
			user login request code
			*/
		include_once("ProjectUsers.php");

		$obj = new ProjectUsers();
		if(!isset($_REQUEST['username'])){
			exit();
		}
		$username=$_REQUEST['username'];
		$password=$_REQUEST['pword'];
		$user=$_REQUEST["labUsers"];	

		$result = $obj->login($user, $username, $password);
			//print_r($result);
 
		if (!$result){
			echo "Access denied";
		}
		else{
			echo "login successful";
		}
?>
