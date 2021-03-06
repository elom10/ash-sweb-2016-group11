<?php
   /**
   *Extend this page to include the equipment class
   *<code>
   *@include equipment.php
   *</code>
   *this class has functions that will be used on the equipments
   */
     include_once("adb.php");
     
     class equipment extends adb{
     	function equipment(){}
   /**
   *addEquip adds new equipment to the equipment table
   *@param string $name sets the name of the equipment
   *@param integer $lab sets the lab number
   */   	
     	function addEquip($name, $lab){
     		$strQuery="insert into equipment set equipName='$name', labNumber=$lab";
     		return $this->query($strQuery);
     	}
   /**
   *getEquip retrieves the list of equipment in the table
   *@param string $key sets to false or true
   */   	
     	function getEquip($key=false){
     		$strQuery="select equipID, equipName, ashlaboratory.labName, ashlaboratory.labNumber from equipment left join ashlaboratory on equipment.labNumber=ashlaboratory.labNumber";
     		return $this-> query($strQuery);
     	}
   /**
   *deleteEquip deletes a selected equipment from the table
   *@param int $equipID sets the ID of the equipment
   */      	
     	function deleteEquip($equipID){
     		$strQuery="delete from equipment where equipID=$equipID";
     		return $this->query($strQuery);
     	}
   /**
   *search retrieves an equipment from the table with a search button
   *@param string $text returns the name of the equipment
   */      	
     	function search($text){
   	$strQuery="select equipID, equipName, ashlaboratory.labName, ashlaboratory.labNumber from equipment left join ashlaboratory on equipment.labNumber=ashlaboratory.labNumber where equipName like '%$text%'";
   	return $this->query($strQuery);
     	}
     }
     ?>