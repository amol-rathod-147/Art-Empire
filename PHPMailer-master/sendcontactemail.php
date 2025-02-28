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
    echo '<script>alert("Your Message has been sent. We will keep in touch with you soon.")</script>'; 
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo '<script>alert("Message could not be sent. Mailer Error: {$mail->ErrorInfo}")</script>'; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/styleContactUs.css">
</head>
<body>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Phone:</span> <a href="#">+91 9876543210</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Gmail:</span> <a href="#">artempire2324@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">artempire.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="sendcontactemail.php" method="post">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" id="name" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="address" id="address" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="phone" id="phoneno" id="phoneno" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="subject" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" placeholder="Write your message" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>