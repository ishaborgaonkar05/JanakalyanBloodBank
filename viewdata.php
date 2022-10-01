<?php
  $to=$_POST["recipient"];
  $subject=$_POST["subject"];
  $Name=$_POST["Name"];
  $Email=$_POST["Email"];
  $Message=$_POST["Message"];

  
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<p>Your Name: '.$Name.'<br> Email: '.$Email.'<br> Message: '.$Message.'</p>';
$message .= '</body></html>';
$result=mail($to,$subject,$message, implode("\r\n", $headers));

if($result){
    echo 'Your mail has been sent successfully.';
    header('Location: enquiry.php?mailsend=true');
} else{
    echo 'Unable to send email. Please try again.';
    header('Location: enquiry.php?mailsend=false');
}
  ?>