<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'guilhermegoncalves1314@gmail.com';                     //SMTP username
        $mail->Password   = 'zchlimswmcqmvgov ';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $email = $_POST['email'];

        //Recipients
        $mail->setFrom('guilhermegoncalves1314@gmail.com', "Guilherme");
        $mail->addAddress('guilhermegoncalves1314@gmail.com', 'Guilherme');     //Add a recipient
        $mail->addReplyTo('guilhermegoncalves1314@gmail.com', 'Information');

        //Content
        $mail->isHTML(true);

        $nome = $_POST['nome'];
    
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        $mail->Subject = "$assunto";
        $mail->Body = "Mensagem enviada pelo portfolio:<br> 
                Nome: $nome<br>
                Email: $email<br> 
                Mensagem:<br> $mensagem            
    ";

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header("location: ../index.php");
        echo 'Email enviado com sucesso';

    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
}else {
    echo "Erro ao enviar email, acesso nao foi via formulario!";
}
