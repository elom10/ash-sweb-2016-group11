<html>
<head>
<title>
Admin
</title>
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.12.1.js"></script>
		<script type="text/javascript">


		function UserComplete(xhr,status){
				if(status!="success"){
					divStat.innerHTML="error sending request";
					return;
				}
				// debugger
				var obj=$.parseJSON(xhr.responseText);

				if(obj.result==0){

					divStat.innerHTML=obj.message;	
				}else{
					
					 divStat.innerHTML="login successful ";
					// window.location="../equipment/equipmentlist.php";
						
				}
				
				currentObject=null;	
			
			}


		// function Adminyuuy(recordID){
		// 	//write a code to send request to AJAX page
  //           // var recordID=document.getElementById("password").value;
		// 		currentObject=obj;
		// 		var theUrl="itlogin.php?cmd=1&id="+recordID;
		// 		$.ajax(theUrl,
		// 			{async:true,complete:AdminComplete}
		// 			);
			
		// 	}

		function User(){

				var currentName=$('#username').val();
				var password=$('#password').val();
				
				var theUrl="ProjectServerSide.php?cmd=1&password="+password +"&username="+currentName;
			 // debugger
			//window.alert(theUrl);
				var variable = $.ajax(theUrl,
					{async:true,complete:UserComplete}
					);

				
			}
		// function editName(obj,id){
		// 		// debugger
		// 		var currentName=obj.innerHTML;
		// 		obj.innerHTML="<input id='password' type='text' > <span class='clickspot' onclick='Admin("+id+")' >save</span>";
		// 		$("#txtName").val(currentName);	
		// 	}

		</script>
</head>
<body>

<center>
	
	<!-- <form action="" method = "POST"> -->
	<h3> Admin Login </h3>
	Username: <input id= 'username' type= "text" name ="username"> </br></br>
	Password: <input id = 'password' type= "text" name ="password"></br></br>
	
    <button onclick="User()">Login</button>

	<div class="status" id="divStat">Loading..</div> 


<!-- </form>
 --></center>

</body>
</html>