<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

if (isset($_POST["send"])) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host         = 'smtp.gmail.com';
        $mail->SMTPAuth     = true;
        $mail->Username     = 'kishan.webfort@gmail.com'; // Gamil ID
        $mail->Password     = 'gkfdmebhtirimfya'; // Gmail app password
        $mail->SMTPSecure   = 'ssl';
        $mail->Port         = 465;

        //Recipients
        $mail->setFrom('kishan.webfort@gmail.com'); // Gmail ID
        $mail->addAddress($_POST["email"]);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["message"];

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}