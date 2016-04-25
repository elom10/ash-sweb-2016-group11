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
						LAB AID
			<ul>
			  <li><a href="default.asp">Home</a></li>
			  <li><a href="news.asp">Add Euipment</a></li>
			  <li><a href="contact.asp">Report Problem</a></li>
			  <li><a href="about.asp">About</a></li>
<!-- 			  <li><a href="about.asp"><img src="images/logo.png" alt="some_text" style="width:30px;height:30px; padding-left: 200px";></a></li> -->
			  <li style="float:right"><a class="active" href="#logout">Log out</a></li>
			</ul>	
		</div>


				
					<div class="centered">
					<form>
						<div>Lab Name:<input type="text" class="txtbox"  id="lab"/></div><br>
						<div>Equipment:<input type="text" class="txtbox"  id="equip" /></div><br>
						<div>Concern:<input type="text" class="concerntxtbox"  id="conc"/></div><br>
		</div>
						<button onclick="addReport()"><span>Send</span></button>
					</form>	


<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
		<script>

$("form").submit(function(e){
	e.preventDefault();
});

	function addReport(){
		var labvalue=document.getElementById('lab').value;
		var equipvalue=document.getElementById('equip').value;
		var concernvalue=document.getElementById('conc').value;

		var ajaxPageUrl="reportajax.php?cmd=1&lab="+labvalue+"&equipment="+equipvalue+"&concern="+concernvalue;
		$.ajax(ajaxPageUrl,{async:false,complete:addReportComplete});

	}

		function addReportComplete(xhr,status){
			if(status!="success"){
					alert("error while adding report");
					return;
				}
				
				var obj=$.parseJSON(xhr.responseText);
				if(obj.result==0){
					alert("error while adding report");	
				}else{
					
					alert("report sent");
						
				}
		}



			
</script>

	</body>
	<div class="footer"> Made with hearts by Lab Aid studios</div>	
</html>	