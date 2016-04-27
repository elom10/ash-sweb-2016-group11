<?php

//by Emmanuela Fosua Mensah
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
   		deleteEquip();	
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
   /**
   *deleteEquip() this function removes entire data of an equipment that already exists in the database
   */	
   function deleteEquip(){
   	//check if there the the equipment id exists
   	if(!isset($_REQUEST['uc'])){
   		echo'{"result":0,"message":"the id was not found"}';
   		exit();
   	}
   	
   	$equipID=$_REQUEST['uc'];
   	include("equipment.php");
   	$obj=new equipment();
   	
   	if($obj->deleteEquip($equipID)){
   		echo'{"result":1,"message":"equipment deleted successfully"}';
   	}
   	else{
   		echo'{"result":0,"message":"Sorry! equipment could not be deleted"}';
   	}
   }
   
   
   
   ?>