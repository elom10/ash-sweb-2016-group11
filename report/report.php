<?php
  /**
  */
  include_once("adb.php");
  /**
  *Users  class
  */
  class report extends adb{
  	function report(){}
  	/**
  	*Adds a new report
  	*@param string usercode  name
  	*@param string lab lab name
  	*@param string equipment equipment name
  	*@return boolean returns true if successful or false
  	*/
  	function addReport($lab, $equipment, $concern){
  		$strQuery="insert into problem set
  						LAB='$lab', EQUIPMENT='$equipment',CONCERN='$concern'";
  		return $this->query($strQuery);				
  	}
  	
  	//Function to sendMail to a customer
  	//The parameters are the person you want to send the
  	//mail and the name of the person
  	function sendMail($cust_email, $cust_name)
  	{
  	    date_default_timezone_set('Etc/UTC');
  	    require '../vendor/autoload.php';
  	    $mail = new PHPMailer();
  	    $mail->isSMTP();
  	    $mail->Debugoutput = 'html';
  	    $mail->Host = "smtp.office365.com";
  	    $mail->Port = 587;
  	    $mail->SMTPAuth = true;
  	//The email you want to use in sending the mail
  	    $mail->Username = "ebenezer.dzobo@ashesi.edu.gh";
  	//Password for sending mails
  	    $mail->Password = "";
  	    $mail->setFrom('ebenezer.dzobo@ashesi.edu.gh', 'ChairGap');
  	//The email of the person you want to sent the mail to.
  	    $mail->addAddress($cust_email, $cust_name);
  	    $mail->Subject = 'ChairGap Acceptance Order';
  	//This is the content of the message in this case I get the message body from a php file
  	//you can insert static string here.
  	    $mail->msgHTML(file_get_contents('../template1/contents.php'), dirname(__FILE__));
  	    $mail->AltBody = 'This is a plain-text message body';
  	//    $mail->addAttachment('images/phpmailer_mini.png');
  	    if (!$mail->send()) {
  	        echo "Mailer Error: " . $mail->ErrorInfo;
  	    } else {
  	        echo "Message sent!";
  	    }
  	}	
  }
?>