<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require '/Users/deBauch_Casanova/Downloads/modified_newfile/PHPMailer-master/src/Exception.php';
require '/Users/deBauch_Casanova/Downloads/modified_newfile/PHPMailer-master/src/PHPMailer.php';
require '/Users/deBauch_Casanova/Downloads/modified_newfile/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Retrieve form data
    $senderName = $_POST['name'] ?? 'Anonymous';
    $senderEmail = $_POST['email'] ?? 'no-reply@example.com';
    $message = $_POST['message'] ?? '';

    // Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'varunk0816101@gmail.com'; // SMTP username
    $mail->Password = 'xsmvkslwchjfxjxu'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to

    // Set the sender and recipient
    $mail->setFrom('sujithkumar2003k@gmail.com', $senderName);
    $mail->addReplyTo($senderEmail, $senderName);
    $mail->addAddress('sujithkumar2003k@gmail.com', 'Sujith Kumar'); // Send to this address

    // Prepare email content
    $emailContentHtml = "<b>Name:</b> $senderName<br>" .
                        "<b>Email:</b> $senderEmail<br>" .
                        "<b>Message:</b> " . nl2br($message);

    $emailContentPlain = "Name: $senderName\n" .
                         "Email: $senderEmail\n" .
                         "Message: $message";

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Message from ' . $senderName;
    $mail->Body    = $emailContentHtml;
    $mail->AltBody = $emailContentPlain;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>