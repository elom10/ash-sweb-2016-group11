<?php
/**
*Database connection helper
*/
include_once("setting.php");
/**
* Database connection helper class
*/
class adb{
	var $db=null;
	var $result=null;
	function adb(){
	}
	/**
	*Connect to database 
	*@return boolean ture if connected else false
	*/
	function connect(){
		
		//connect
		$this->db=new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
		if($this->db->connect_errno){
			//no connection, exit
			return false;
		}
		return true;
	}
	
	/**
	*Query the database 
	*@param string $strQuery sql string to execute
	*/
	function query($strQuery){
		if(!$this->connect()){
			return false;
		}
		if($this->db==null){
			return false;
		}
		$this->result=$this->db->query($strQuery);
		if($this->result==false){
			return false;
		}
		return true;
	}
	/*
	* Fetch from the current data set and return
	*@return array one record
	*/
	function fetch(){
		//Complete this funtion to fetch from the $this->result
		if($this->result==null){
			return false;
		}
		
		if($this->result==false){
			return false;
		}
		
		return $this->result->fetch_assoc();
	}
}
/*
This is a test code
$obj=new adb();
if(!$obj->query("select * from equipment"))
{
	echo "error";
	exit();
}
print_r($obj->fetch());
*//*
//SQL test code right input for add equipment 
$obj=new adb();		
if(!$obj->query("insert into equipment set EQUIPSERIALNUMBER='99808765',EQUIPNAME='projector',QUANTITY='1',LABNUMBER='3'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code wrong input for add equipment 
$obj=new adb();		
if(!$obj->query("insert into equipment set EQUIPSERIALNUMBER='aaaaaaa',EQUIPNAME='projector',QUANTITY='1',LABNUMBER='two'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code right inputfor edit equipment 
$obj=new adb();		
if(!$obj->query("update equipment set EQUIPNAME='projector',QUANTITY='1',LABNUMBER='2' where  EQUIPSERIALNUMBER='$99808765'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code wrong input for edit equipment 
$obj=new adb();		
if(!$obj->query("update equipment set EQUIPNAME='projector',QUANTITY='two',LABNUMBER='3' where  EQUIPSERIALNUMBER='$99808765'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code right input for delete equipment 
$obj=new adb();		
if(!$obj->query(""DELETE FROM equipment WHERE EQUIPSERIALNUMBER=99808765)){
	echo "error";
	exit();
}
print_r($obj->fetch());

//SQL test code wrong input for delete equipment 
$obj=new adb();		
if(!$obj->query(""DELETE FROM equipment WHERE EQUIPSERIALNUMBER=99808765)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code right input for search equipment 
$obj=new adb();		
if(!$obj->filter=" EQUIPNAME like '%$text%' or ENAME like '%$text%'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());


//SQL test code wrong input for search equipment 
$obj=new adb();		
if(!$obj->filter=" EQUIPNAME like '%$text%' or ENAME like '%$text%'";)){
	echo "error";
	exit();
}
print_r($obj->fetch());

*/

?>