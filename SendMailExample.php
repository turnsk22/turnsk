<?PHP
//Файл будет работать только на сервере. На сервере у тебя должен лежать в одной папке этот файл SendMailExample.php и обязательно в этой же папке должна быть папка PHPMailer с файлами (готовый инструментарий для отправки почты). Команда require подключает эти файлы.  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

$body = 'Привет! Александр';
$mail = new PHPMailer(true);
//Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vorobyevgennadiy1979@gmail.com';//'andrey.sibirtsev.74@mail.ru';                     // SMTP username
    $mail->Password   = 'Rg768jdHT78DR8kg';//'cb,bhwtd.xlsy$48hdR';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
	$mail->SMTPSecure = 'ssl';
    //Recipients
    $mail->setFrom('vorobyevgennadiy1979@gmail.com', 'from ofice');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress("andreyfamilliya@gmail.com", 'для АГ');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "результат сеанса обновления";;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; } else { echo "Сообщение передано!"; }
    echo 'Message has been sent';
?>	
	