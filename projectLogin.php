<html>
<head>
<title>
Layout
</title>
<meta name="author"  content="isaac">
<meta name="topics"  content= "">
</head>
<body>

	
	<form action="projectLogin.php" method = "GET">
	<h3> Please enter Username and password to login :)</h3>
	username: <input type= "text" name ="USERNAME"> </br>
	password: <input type= "text" name ="PASSWORD"> </br>

<input type="submit" value="login">

<?php 


include_once("ProjectUsers.php");

$obj = new ProjectUsers();
if(isset($_REQUEST['USERNAME'])){
		$username=$_REQUEST['USERNAME'];
		//print_r($_REQUEST);


	if(isset($_REQUEST['PASSWORD']))
	$password=$_REQUEST['PASSWORD'];
		//if no data, exit	

$result = $obj->login($username,$password);
print_r($result);

    
if($result){

	echo "login successful";
}
else{

	echo "login not successful";
}
}

?>



</form>
</body>
</html>