<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    if (isset($_POST["email"], $_POST["name"], $_POST["subject"], $_POST["message"])) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'draynnakamura@gmail.com';
            $mail->Password   = 'chlfqqsjlualbtza';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom($_POST["email"], $_POST["name"]);
            $mail->addAddress('draynnakamura@gmail.com');
            $mail->addReplyTo($_POST["email"], $_POST["name"]);

            $mail->isHTML(true);
            $mail->Subject = $_POST["subject"];
            $mail->Body    = $_POST["message"];

            $mail->send();

            // Redirect after success
            header('Location: v_home.php?status=success');
            // exit;
        } catch (Exception $e) {
            // Store error in session and redirect
            session_start();
            $_SESSION['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header('Location: v_home.php?status=error');
            // exit;
        }
    } else {
        // Store missing fields in session and redirect
        session_start();
        $missingFields = [];
        if (!isset($_POST["email"])) $missingFields[] = "email";
        if (!isset($_POST["name"])) $missingFields[] = "name";
        if (!isset($_POST["subject"])) $missingFields[] = "subject";
        if (!isset($_POST["message"])) $missingFields[] = "message";

        $_SESSION['error'] = "Required fields are missing: " . implode(", ", $missingFields);
        header('Location: v_home.php?status=error');
        // exit;
    }
}
