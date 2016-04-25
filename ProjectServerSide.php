
<?php
if(!isset($_REQUEST['cmd'])){
		echo "cmd is not provided";
		exit();
	}
	/*get command*/
	$cmd=$_REQUEST['cmd'];
	switch($cmd){
		case 1:
			login();		//if cmd=1 the call delete
			break;
		}

		function login(){

		if(isset($_REQUEST['username'])){
		$username=$_REQUEST['username'];
		//print_r($_REQUEST);


	if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];

	include("ProjectUsers.php");
		$obj=new ProjectUsers();

		$result = $obj->login($username,$password);


    
if($result= $obj->fetch()){

	echo '{"result":1,"message":"login successful"}';
}
else{

	echo '{"result":0,"message":"User code not provided"}';	
			return;
}

	}
}

?>	