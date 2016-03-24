<?php

	include_once("adb.php");

	class ProjectUsers extends adb{
		function login($user,$username,$password){
			$strQuery= "select username from user where username = '$username' and pword='$password'";
			$strQuery;
			return $this->query($strQuery);
		}
	}
?>