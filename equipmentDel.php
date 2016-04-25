<?php
   /**
   *Extend this page to include the equipment class
   *
   *<code>
   *\@include equipment.php
   *</code>
   *
   *function deleteEquip - removes a particular equipment from a list of equipment upon click of delete
   *
   *@param $equipID
   */
   include_once ('equipment.php');
   $object=new equipment();
   if(isset($_REQUEST['equipID'])){
     		$equipID=$_REQUEST['equipID'];
     		$result=$object->deleteEquip($equipID);
     	}
     	if($result==false){
     		echo"This record could not be deleted, please enter the correct equipment ID";
     	}
     	else{
     		header("Location:equipmentlist.php");
     	} 
   ?>