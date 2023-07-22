// * 

<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                        // Enable verbose debug output

$mail->isSMTP();                                // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  									// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = 'run.smart@mail.ru';          // ! <-- Your mail
$mail->Password = '4s,g$&L{BKmimE3';                           // ! <-- Your password
$mail->SMTPSecure = 'ssl';                      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                             	// TCP port to connect to
 
$mail->setFrom('run.smart@mail.ru', 'RunSmart');   // From whom is the letter
$mail->addAddress('run.smart@mail.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '<br>
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>