<?php

include_once("adb.php");

class ProjectUsers extends adb{
	

function login($username,$password){
	$strQuery= "select USERNAME, PASSWORD from users where USERNAME = '$username' and PASSWORD = '$password'";



	return $this->query($strQuery);


}
}









?>