<html>
	<head>
		<title>Add New User</title>
		<link rel="stylesheet" href="css/style.css">
		<script>
			<!--add validation js script here
		</script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
					Application Header
				</td>
			</tr>
			<tr>
				<td id="mainnav">
					<div class="menuitem">menu 1</div>
					<div class="menuitem">menu 2</div>
				</td>
				<td id="content">
					<div id="divPageMenu">
						<span class="menuitem" >page menu 1</span>
						<input type="text" id="txtSearch" />
					<!--	<span class="menuitem">search</span>	-->	
					</div>
					<div id="divStatus" class="status">
						status message
					</div>
					<div id="divContent">
						Content space
					<form action="" method="GET">
						<div>Lab Name: <input type="text" name= "lab" /></div>
						<div>Equipment: <input type="text" name= "equipment" /></div>
						<div>Concern: <input type="text" name= "concern"/></div>
						<input type="submit" name="reported" value="Send report">
					</form>	









<?php
	include_once("report.php");
	$obj = new report();

	if(isset($_REQUEST['reported'])){

		$result = $obj->addReport($_REQUEST['lab'],$_REQUEST['equipment'],$_REQUEST['concern']);
	
	}else{
		exit();
	}

?>


					</div>
				</td>
			</tr>
		</table>
	</body>
</html>	