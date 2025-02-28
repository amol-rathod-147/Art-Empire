<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
  //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'artempire2324@gmail.com';                     //SMTP username
    $mail->Password   = 'axqidwrfaecduuiq';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('artempire2324@gmail.com', 'artempire');
    $mail->addAddress($email, $name);     //Add a recipient
    // $mail->addAddress('ellen@example.com');              
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirmation Email';
    $mail->Body   .= 'We received your message!  ';
    $mail->Body     .= "<br> Your Full Name : <b> $name </b>";
    $mail->Body     .= "<br> Your Address   : <b> $address </b>";
    $mail->Body     .= "<br> Your Email Address : <b> $email  </b>";
    $mail->Body     .= "<br> Your Subject : <b> $subject  </b>";
    $mail->Body     .= "<br> Your Message       : <b> $message  </b>";
    $mail->Body     .= "<br>";
    $mail->Body     .= "<br>";
    $mail->Body     .= "<br>";
    $mail->Body     .= "<br>";
    $mail->Body     .= "<br>";
    $mail->Body     .= "<br> <b> Thank you for contacting us.  <br> We've received your query and our team is looking into it. We do our best to respond to every email within 24 hours, so you should be hearing back from one of our customer service team members soon.  </b>";

    $mail->send();
    // echo '<script>alert("Your Message has been sent. We will keep in touch with you soon.")</script>'; 
    // header("location: contact1.php");

    echo '<script>alert("Your Message has been sent. We will keep in touch with you soon."); location.replace(document.referrer);</script>';

} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // echo '<script>alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}")</script>'; 
    echo '<script>alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}"); location.replace(document.referrer);</script>';

}
// header("location: contact1.php");

?>
