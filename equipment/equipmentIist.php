<html>
   <!--@adwoba.bota
      This code displays the equipment list for uses-->
   <head>
      <title>Equipment table</title>
      <script src="js\jquery-1.12.1.js"></script>
      <link rel="stylesheet" href="../CSS/stylesheet.css">
      <script>
         function equipDel(ID){
         var ajaxPageUrl="ajaxPage.php?cmd=2&uc="+ID;
         var code=ID;
         
         $.ajax(ajaxPageUrl,{ async:true, complete:deleteEquipmentComplete});
         }
         
         function deleteEquipmentComplete(xhr,status){
         if(status!="success"){
         	divStatus.innerHTML="error deleting this record!!";
         	return;
         }
         else{
         	var object= $.parseJSON(xhr.responseText);
         	if(object.result==0){
         		divStatus.innerHTML=object.message;
         	}
         	else{
         		divStatus.innerHTML="record has been deleted";
         	}
         }
         }	
            
      </script>
   </head>
   <body>
      <div colspan="2" id="reportHeader">
         <ul>
            <li><a href="equipInterface">Home</a></li>
            <li><a href="addEquipment.php">Add an Equipment</a></li>
            <li style="float:right"><a class="active" href="loginAjax.php">Log out</a></li>
         </ul>
      </div>
      <div class="centered">
         <div id="divStatus">Ready</div>
         <br>
         <?php
            /**
            *Extend this page to include the equipment class
            *<code>
            *\@include equipment.php
            *</code>
            *function getEquip - retrieves the list of equipment
            */
              include_once ("equipment.php");
              $obj = new equipment();
              $r=$obj->getEquip(); 
              if(!$r){
              	echo "Error retrieving equipment";
              }   
              echo "<center>
              <table>
              <tr>
              <th>Equipment Id</th>
              <th>Equipment Name</th>
              <th>Lab</th>
              <th></th>
              <th>Delete</th>
              </tr></center>";
              while($row = $obj->fetch())
              {
            $ID=$row['equipID'];
            
              	echo"<center>
            <tr>
              		<td>{$row['equipID']}</td>
              		<td>{$row['equipName']}</td>
              		<td>{$row['labName']}</td>
            	<td>
            	<td><span onclick='equipDel({$row['equipID']})'>Delete<span></td>
            	</tr></center>";
              }
              echo"<center></table><center>";
              ?>
      </div>
   </body>
   <div class="footer"> Made with hearts by Lab Aid studios</div>
</html>