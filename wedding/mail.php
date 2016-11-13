<?php
if(isset($_POST['submit'])) 
{

$message=
'Név:	'.$_POST['fullname'].'<br />
Tárgy:	'.$_POST['subject'].'<br />
Telefonszám:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Üzenet:	'.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      

    
    $mail = new PHPMailer();

                // Set up SMTP
                $mail->IsSMTP();                // Sets up a SMTP connection
                $mail->SMTPDebug  = 0;          // This will print debugging info
                $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
                $mail->SMTPSecure = "tls";      // Connect using a TLS connection
                $mail->Host = "smtp.gmail.com";
                $mail->Port = 587;
                $mail->Encoding = '7bit';       // SMS uses 7-bit encoding
                $mail->IsHTML(true);            // Set email format to HTML
    
    // Authentication  
    $mail->Username   = "clava01@gmail.com"; // Your full Gmail address
    $mail->Password   = "vermis01"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("clava01@gmail.com", "Prem Chand Saini"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
