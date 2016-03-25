<?php
/**
*/
include_once("adb.php");
/**
*Users  class
*/
class report extends adb{
	function report(){}

	/**
	*Adds a new report
	*@param string usercode  name
	*@param string lab lab name
	*@param string equipment equipment name
	*@return boolean returns true if successful or false
	*/
	function addReport($lab, $equipment, $concern){
		$strQuery="insert into problem set
						LAB='$lab', EQUIPMENT='$equipment',CONCERN='$concern'";
		return $this->query($strQuery);				
	}
	

}
?>