<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to = "pranjal04das@gmail.com";
// Get data from form 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From:" . $email;
$txt = "From:" . $name . "Message:" . $message;
if(mail($to,$subject,$message,$headers)) {
    echo "Message sent successfully.";
} else {
    echo "Message was not sent. Retry after some time";
}
?>
