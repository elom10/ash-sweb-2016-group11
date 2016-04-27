<html>
   <!--Emmanuela.mensah
      This code displays the equipment list for uses-->
   <head>
      <title>Equipment table</title>
      <link rel="stylesheet" href="CSS/stylesheet.css">
      <script>
         <!--add java script-->
         function addEquipComplete(xhr,status){
         if(status!="success"){
         divStatus.innerHTML="error while adding equipment";
         return;
         }
         divStatus.innerHTML=xhr.responseText;
         }
         /**
         *makes an AJAX call to the server
         */
         
         function addEquip(name,labNumber){
         var ajaxPageUrl="addeq_ajaxpage.php?cmd=1&uc="+name+"&ac="+labNumber;
         $.ajax(ajaxPageUrl,
                 {async:true,complete:addEquipComplete	}	
         );
         }
      </script>
   </head>
   <body>
      <?php
         /**
         *Extend this page to include the equipment class
         *
         *<code>
         *\@include equipment.php
         *</code>
         *
         *function addEquip - adds new equipment to the equipment table
         *
         *@param $name
         *@param $lab
         */
           include_once("equipment.php");
           $object=new equipment();
           if(isset($_REQUEST['equipName'])){
           	$name=$_REQUEST['equipName'];
           	$lab=$_REQUEST['labNumber'];
           	if(isset($_REQUEST['add'])){
           		$result=$object->addEquip($name,$lab);
           		header("Location:equipmentIist.php");
           	}
           } 
           ?>
      <div colspan="2" id="reportHeader">
         <ul>
            <li><a href="equipInterface">Home</a></li>
            <li><a href="equipmentIist.php">View Equipment</a></li>
            <!-- 			  <li><a href="about.asp"><img src="images/logo.png" alt="some_text" style="width:30px;height:30px; padding-left: 200px";></a></li> -->
            <li style="float:right"><a class="active" href="#logout">Log out</a></li>
         </ul>
      </div>
      <div class="centered">
         <h1>Add New Equipment</h1>
         <div id="divStatus">Ready</div>
         <br>
         <form action="addEquipment.php" method="GET">
            <div><input type="text" class="txtbox" name="equipName" placeholder="Equipment Name"/></div>
            <br>
            <div><input type="number" class="txtbox" name="labNumber" placeholder="Laboratory"/></div>
            <br>
            <button type="submit" onclick="addEquip(equipName, labNumber)" name = "add"/><span>Add</span></button><br>
         </form>
      </div>
   </body>
   <div class="footer"> Made with hearts by Lab Aid studios</div>
</html>