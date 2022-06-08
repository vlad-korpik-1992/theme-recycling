<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './phpmailer/Exception.php';
    require './phpmailer/PHPMailer.php';
    require './phpmailer/SMTP.php';
    
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    
    $title = "Application from the site (recycling.by)";
     
    $mail = new PHPMailer();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->isSMTP(); 
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    //$mail->SMTPDebug = 2;
    $mail->Username = 'username@yandex.ru';
    $mail->Password = 'pass';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $title;
    $mail->setFrom('email', 'recycling');
    
    $mail->msgHTML("
    <h2>Application data</h2>
    <b>Full name:</b> $fullname<br>
    <b>Phone:</b> $phone<br>
    <b>E-mail:</b> $email<br>
    <b>Question:</b> $question<br/>
    ");
    $mail->addAddress('email');
    if(!$mail->send()) {
        echo 'Сообщение не может быть отправлено.';
        echo 'Ошибка: ' . $mail->ErrorInfo;
        exit;
    }
    else{
        echo 'Сообщение отправлено.';
    }
?>