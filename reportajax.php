<?php

	if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
	}

	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch ($cmd) {
		case 1:
			# code...
			addReport();
			break;
		
		default:
			# code...
			echo "wrong command";
			break;
	}

	function addReport(){
		//check if there is a user code
		
		include("report.php");
		if(!isset($_REQUEST["lab"])){
			echo '{"result":0,"message":"lab is empty"}';
			return;
		}
		else{
			$lab=$_REQUEST["lab"];
		}

		if(!isset($_REQUEST["equipment"])){
			echo '{"result":0,"message":"equipment is empty"}';
			return;
		}
		else{
			$equipment=$_REQUEST["equipment"];
		}

		if(!isset($_REQUEST["concern"])){
			echo '{"result":0,"message":"concern is empty"}';
			return;
		}
		else{
			$concern=$_REQUEST["concern"];
		}


		$obj = new report();

		$result=$obj->addReport($lab, $equipment, $concern);
		
		if($result==true){
			echo '{"result":1,"message":"problem added"}';
		}else{
			echo '{"result":0,"message":"query could not complete"}';
		}
	}