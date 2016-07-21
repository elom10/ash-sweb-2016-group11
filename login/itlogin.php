<?php 
  if(!isset($_REQUEST['cmd'])){
  	echo "cmd is not provided";
  	exit();
  }
  /*get command*/
  $cmd=$_REQUEST['cmd'];
  switch($cmd){
  	case 1:
  		AdminLogin();		
  		break;
  }
  
  function AdminLogin(){
  	 include_once("it.php");
  
  	if(!isset($_REQUEST['id'])){
  		echo "usercode is not given";		
  		exit();
  	}
  $password=$_REQUEST['id'];
  if(isset($_REQUEST['username'])){
  $username=$_REQUEST['username'];
  }
  if(isset($_REQUEST['usertype'])){
  $usertype=$_REQUEST['usertype'];
  }
  
     $obj = new it();
     $result = $obj->login($username,$password, $usertype);
     $row = $obj->fetch();
         if($row<1){
  
  		echo '{"result":0,"message":"This user does not exist"}';	
  		return;
  	}else{
  			session_start();
  			$_SESSION['userId']=$row['userId'];
  	echo '{"result":1,"user":';
  		echo json_encode($row);
  	echo '}';
   }
  }
?>