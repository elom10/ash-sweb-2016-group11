<html>
	<head>
		<title>Add New User</title>
		<link rel="stylesheet" href="stylesheet.css">
		<script>
			<!--add validation js script here
		</script>
	</head>
	<body>
		<div colspan="2" id="reportHeader">
						LAB_AID
		</div>
					<div id="header">
						status message
					</div>
					<div class="centered">
					<form action="" method="GET">
						<div>Lab Name: <input type="text" name= "lab" /></div><br>
						<div>Equipment: <input type="text" name= "equipment" /></div><br>
						<div>Concern: <input type="text" name= "concern"/></div><br>
		</div>
						<div class ="submit"><input type="submit" name="reported" value="Send report"></div>
					</form>	
<?php

	include_once("report.php");
	$obj = new report();

	if(isset($_REQUEST['reported'])){
		$result = $obj->addReport($_REQUEST['lab'],$_REQUEST['equipment'],$_REQUEST['concern']);
		if($result){
			echo"successs";
		}
	
	}else{
		exit();
	}
?>
					
	</body>
</html>	