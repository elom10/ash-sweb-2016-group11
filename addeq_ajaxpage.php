
<?php
//emmanuela.mensah
//check command
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
	case 1:
	addEquip();
	break;
	default:
	echo "wrong cmd";
	break;
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