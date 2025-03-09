<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $emailAddress = $_POST["emailAddress"];
    $session = $_POST["sessions"];
    $gain = $_POST["gain"];
    $howHeard = $_POST["howHeard"];
    $soundBathExperience = $_POST["soundBathExperience"];
    $experienceDetails = $_POST["experienceDetails"];
    $allergiesDetails = $_POST["allergiesDetails"];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output if needed
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sarahw181090@gmail.com'; // Replace with your Gmail address
        $mail->Password   = 'febr qaqb rpzz siod'; // Replace with your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('sarahw181090@gmail.com', 'Rainbow Soulbath'); // Replace with your Gmail address and name
        $mail->addAddress('sarahw181090@gmail.com'); // Replace with your email address where you want to receive the booking requests

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Booking Request from Rainbow Soulbath';
        $mail->Body    = "New Booking Request:\n\n" .
                         "Full Name: $fullName\n" .
                         "Email Address: $emailAddress\n" .
                         "Session: $session\n" .
                         "What they hope to gain: $gain\n" .
                         "How they heard about Rainbow Soulbath: $howHeard\n" .
                         "Sound Bath Experience: $soundBathExperience\n" .
                         "Experience Details: $experienceDetails\n" .
                         "Allergies Details: $allergiesDetails";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "This script only accepts POST requests.";
}

?>
