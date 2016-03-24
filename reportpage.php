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
/*
			require 'PHPMailerAutoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'ebenezer.dzobo@ashesi.edu.gh';                 // SMTP username
			$mail->Password = 'ebenezer1';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

			$mail->From = 'ebenezer.dzobo@ashesi.edu.gh';
			$mail->FromName = 'Mailer';
			$mail->addAddress('jebenezer.dzobo@ashesi.edu.gh', 'Joe User');     // Add a recipient
			$mail->addAddress('');               // Name is optional
			$mail->addReplyTo('', 'Information');
			$mail->addCC('');
			$mail->addBCC('');

			$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			$mail->addAttachment('');         // Add attachments
			$mail->addAttachment('', '');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = 'Here is the subject';
			$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
*/

			echo"successs";
		}
	
	}else{
		exit();
	}
?>
					
	</body>
</html>	