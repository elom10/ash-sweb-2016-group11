<?php
//emmanuela.mensah
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
   	default:
   		echo "wrong command";	
   		break;
   }
   /**
   *Extend this page to include the equipment class
   *<code>
   *@include equipment.php
   *</code>
   *searchEquip searches for the database for an existing equipment.
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
   		echo'{"result":0,"message":"sorry! this equipment could not be found"}';
   	}
   }

   
   
   
   ?>