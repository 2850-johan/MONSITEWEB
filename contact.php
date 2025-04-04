<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Config SMTP (exemple avec Gmail)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'penthiumchristian@gmail.com';      // ⚠️ Remplace par ton email
        $mail->Password   = 'uyqn jrrb melg holn';           // mot de passe genere par google
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Infos du message
        $mail->setFrom($email, $name);
        $mail->addAddress('penthiumchristian@gmail.com', 'Johan Christian'); // ⚠️ Email de destination

        $mail->isHTML(true);
        $mail->Subject = "Nouveau message de $name";
        $mail->Body    = "<strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";

        $mail->send();
        echo 'Message envoyé avec succès.';
    } catch (Exception $e) {
        echo "Erreur : le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
    }
}
