<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['save_email']))
{ 
    $Fullname=$_POST['FName'];
    $Email=$_POST['email'];
    $Message=$_POST['Message'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'gatadeprathamesh999@gmail.com';      //SMTP username
    $mail->Password   = 'qyss rpbe obdp ajjt';               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //ENCRYPTION_SMTPS-port:465-Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($Email , $Fullname); // Dynamic sender
    $mail->addAddress('gatadeprathamesh999@gmail.com', 'Prathamesh Gatade');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '
              <h3>Fullname: '. $Fullname.' </h3>   
              <h3>Email: '.$Email.' </h3>      
              <h3>Message: '.$Message.' </h3>   

    ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         if($mail->send()){
            $_SESSION['status']="Thank you";
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit(0);
         }else{
            $_SESSION['status']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header("Location:{$_SERVER["HTTP_REFERER"]}");
            exit(0);
         }
        //  $mail->send(); //pass if condition
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}else
{
    header('Location:contact.php');
    exit(0);
}