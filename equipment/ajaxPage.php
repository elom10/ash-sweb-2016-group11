<?php
   /**
   *switch case to choose the command that should be used to continue the ajax
   */
   if(!isset($_REQUEST['cmd'])){
   	echo "cmd is not provided";
   	exit();
   }
   $cmd=$_REQUEST['cmd'];
   switch($cmd){
   	case 1:
   		searchEquip();	
   		break;
   	case 2:
   		deleteEquip();	
   		break;
	case 3:
		addEquip();
		break;
   	default:
   		echo "wrong command";	
   		break;
   }
   /**
   *Extend this page to include the equipment class
   *<code>
   *@include equipment.php
   *</code>
   *searchEquip searches for a particular equipment from a list of equipment
   */
   function searchEquip(){
   	//check if there is a user code
   	if(!isset($_REQUEST['uc'])){
   		echo'{"result":0,"message":"data can not be retrieved"}';
   		exit();
   	}
   	
   	$name=$_REQUEST['uc'];
   	include("equipment.php");
   	$obj=new equipment();
   	
   	if($obj->search($name)){
   		
   		$row=$obj->fetch();
   		//echo $row;
   		$result=array();
   		while($row!=false){
   			//echo ' inside while loop';
   			$result[]=$row;
   			$row=$obj->fetch();
   		}
   		echo'{"result":1,"equipment":';
   		echo json_encode($result);
   		echo '}';
   	}
   	else{
   		echo'{"result":0,"message":"this equipment can not be found"}';
   	}
   }
   /**
   *deleteEquip removes an equipment from the list of equipment
   */	
   function deleteEquip(){
   	//check if there is a user code
   	if(!isset($_REQUEST['uc'])){
   		echo'{"result":0,"message":"data can not be retrieved"}';
   		exit();
   	}
   	
   	$equipID=$_REQUEST['uc'];
   	include("equipment.php");
   	$obj=new equipment();
   	
   	if($obj->deleteEquip($equipID)){
   		echo'{"result":1,"message":"an equipment was removed"}';
   	}
   	else{
   		echo'{"result":0,"message":"Oops!! equipment can not be deleted"}';
   	}
   }
   function addEquip(){
	//check if there is an equipSerialNumber
	if(!isset($_REQUEST['uc'])){
	echo "equipment ID is not given";
	return;
	}

	$name=$_REQUEST['uc'];
	$labNumber=$_REQUEST['ac'];
	include_once('equipment.php');
	$obj=new equipment();

	//add new equipment
	if($obj->addEquip($name,$labNumber)){
	echo '{"result":1, message:"equipment added"}';
	}else{
	echo '{"result":0,"message":"Equipment was not added"}';
	}
}
   ?>