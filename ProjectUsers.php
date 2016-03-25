<?php

	include_once("adb.php");

	class ProjectUsers extends adb{
		function login($user,$username,$password){
			$strQuery= "select username from customer where username = '$username' and pword='$password'";
			$strQuery;
			return $this->query($strQuery);
		}
	}
?>