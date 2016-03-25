<?php

	include_once("adb.php");

	class ProjectUsers extends adb{
		function login($username,$password){
			$strQuery= "select username from users where USERNAME = '$username' and PWORD='$password'";
			$strQuery;
			return $this->query($strQuery);
		}
	}
?>