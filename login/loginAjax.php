<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery-1.12.1.js"></script>
    <script type="text/javascript">
      function AdminComplete(xhr,status){
      		if(status!="success"){
      			window.alert("Error sending Request");
      			return;
      		}
      		var obj=JSON.parse(xhr.responseText);
      		if(obj.result==0){
      			window.alert(obj.message);
      		}else{
      			if(document.getElementById("admin").checked ==true){
      				window.location.assign( "equipment/equipmentIist.php");
      		   }else{
      			window.location.assign( "report/reportpageajax.php");	
      		  }
      		currentObject=null;
      		}
      	}
      function Admin(){
      		var currentName=$('#username').val();
      		var password=$('#password').val();
      
      		if((password=="") || (currentName=="")){
      			return window.alert("Please enter details into the empty field");
      		}
      		if(password.length < 1){
      			return window.alert("Passwords must be at least 1 character");
      		}
      		if(currentName.length < 6){
      			return window.alert("Usernames must be at least 6 characters");
      		}
      		if (!/[a-z.]/.test(currentName)){
      			return window.alert("Usernames must be only small letters and a dot!");
      		}
      		if (document.getElementById("user").checked ==true){
      		    var usertype=$('#user').val(); 
      	    }
      	    if (document.getElementById("admin").checked ==true){
      		var usertype=$('#admin').val();
      	    }
      	    if (usertype==null){
      	  	return window.alert("Select your usertype");
      	    }
      		var theUrl="itlogin.php?cmd=1&id="+password +"&username="+currentName +"&usertype="+usertype;
      		$.ajax(theUrl, {async:true,complete:AdminComplete});
      	}
    </script>
  </head>
  <body>
    <div id = "welcomeText">
      <h1> Welcome To LabAid</h1>
      <p>
        Get instant help with IT related issues! <br>
        Log in your problems and picture help rolling at you!
      </p>
    </div>
    <center>
      <div name="login-form" class="login-form" action="" method="post">
        <div class="header">
          <h1>Login To LabApp</h1>
        </div>
        <div class="content">
          <input id="username" type="text" class="input username"  placeholder="username" />
          <input id="password" type="password" class="input password"  placeholder="password"/> <br><br>
        </div>
        <div class="footer">
          <input type="submit" name="submit" value="Login" class="button" onclick="Admin()">
          <input type="button" name="submit" value="Login As" class="register" />
          <input id="user" type="radio" name="radio"value="user">User
          <input id="admin" type="radio" name="radio"value="Admin">Admin
    </center>
    </div>
    </div>
  </body>
</html>