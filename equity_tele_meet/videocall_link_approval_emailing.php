<?php

/*
The phpmailer keyword must be declared in the outermost or top most scope of a file (the global scope) 
or inside namespace declarations. This is because the importing is done at compile time and not runtime.
 otherwise it will throw error syntax error, unexpected 'use' (T_USE)
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

$fullnamep = strip_tags($_SESSION['fullname1']);
$emailp = strip_tags($_SESSION['email1']);


$sender_name = "$fullnamep from Tele-Meet";
$sender_email = $emailp;
//$sender_phoneno = $_SESSION['user_phoneno_session'];




//error_reporting(0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

include('settings.php');
include('data6rst.php');

$id = intval($_POST["id"]);
$booking_id = strip_tags($_POST["booking_id"]);
$booking_version = strip_tags($_POST["booking_version"]);
$channel = strip_tags($_POST['channel']);



$str = $site_url;
$parts = explode('/', $str);
$rx = $parts[0];

if($rx == 'localhost'){
$site_url_check = 'http';
}else{
$site_url_check = 'https';
}


$email_title = "Your  Appointment Videocall Link";;
$email_message = "Here is your  Videocall Appointment Link:  <a target='_blank' href='$site_url_check://$site_url/videocall.php?channel_id=$channel'> </b>$site_url_check://$site_url/videocall.php?channel_id=$channel</b></a> <br> ";
$email = strip_tags($_POST['email']);
$fullname = strip_tags($_POST['fullname']);



$timer1= time();



if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);



$email_subject = $email_title;
$email_message="$email_message";



// Load Composer's autoloader
require 'mail_vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


$recipient_name = $fullname;
$recipient_email = $email;		    

$messaging = "Hi $recipient_name, You have Message from $sender_name.  <br><br>

<b>Sender Name: </b> $sender_name<br>
<b>Sender Email: </b> $sender_email<br>
<b>Message: </b> $email_message<br>";






// php mailer try starts here

try {
    
    
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

    //Server settings
    $mail->SMTPDebug = 0;                                       // 0 - Disable Debugging, 2 - Responses received from the server
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = $smtp_email_host;  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $smtp_email_username;                     // SMTP username
    $mail->Password   = $smtp_email_password;                               // SMTP password
    $mail->SMTPSecure = 'tls';//PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = $smtp_email_port;                                    // TCP port to connect to

    //Sender and sender name
    //$mail->setFrom('support@fredjarsoft.com', 'fred boy');

    $mail->setFrom('support@fredjarsoft.com', "$sender_name");

//recipient email address and name
    //$mail->addAddress('ese@gmail.com', 'fred recipients');     // Add a recipient
      $mail->addAddress($recipient_email, $recipient_name);     // Add a recipient
  
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body = $messaging;
    $mail->AltBody = $messaging; // for Plain text for non-HTML mails

   $sent =  $mail->send();

    echo "<div style='background:green;color:white;padding:10px;border:none;'> Email Message successfully sent</div>";


$pstmt = $db->prepare('UPDATE booking SET status=:status where id=:id');
$pstmt->execute(array(':status' =>'approved', ':id' =>$id));

if($pstmt){
echo "<script>alert('Approval successful.VideoCall Link Emailed to this User....'); location.reload();</script>";
echo "<div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Approval successful.VideoCall Link Emailed to this User.</div><br>";
}else{
// echo nothing
}



} catch (Exception $e) {
 echo "<div style='background:red;color:white;padding:10px;border:none;'>Email Message not sent. Error: {$mail->ErrorInfo}</div>";

//echo 0;

}


//php mailer try email ends here




   
}


?>