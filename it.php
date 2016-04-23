<?php
include_once("dbconn.php");
class IT extends dbconn{
	
function login($username,$password,$usertype){
	$strQuery= "select * from customer where username = '$username' and pword = '$password' and usertype='$usertype'";
	return $this->query($strQuery);

}
}
?>