<?php
include_once("dbconn.php");
class IT extends dbconn{
	
function login($username,$password){
	$strQuery= "select * from itpersonnel where Name like '$username' and ID like '$password'";
	return $this->query($strQuery);

}
}
?>