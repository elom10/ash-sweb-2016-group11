<?php
include_once("dbconn.php");
class IT extends dbconn{
	
function login($username,$password){
	$strQuery= "select * from itpersonnel where USERNAME like '$username' and PWORD like '$password'";
	return $this->query($strQuery);

}
}
?>