
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Setup PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = ''; // Your Gmail address
        $mail->Password = ''; // Use App Password if 2FA is enabled
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom(''); // Sender email and name
        $mail->addAddress('bajwamursal@gmail.com'); // Your email to receive the message

        // Email Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "New Message from Gajistics Contact Form";
        $mail->Body = "
            <h2>New Message Received</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send email
        $mail->send();

        // Redirect on success

        header("Location: ContactUs.php?sent=true");
        exit();

    } catch (Exception $e) {
        // Redirect on failure

        header("Location: ContactUs.php?sent=false");
        exit();
    }
}
?>