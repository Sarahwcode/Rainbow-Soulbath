<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["fullName"];
    $emailAddress = $_POST["emailAddress"];
    $sessions = $_POST["sessions"];
    $gain = $_POST["gain"];
    $howHeard = $_POST["howHeard"];
    $soundBathExperience = $_POST["soundBathExperience"];
    $experienceDetails = $_POST["experienceDetails"];
    $terms = isset($_POST["terms_and_conditions"]) ? "Agreed" : "Not Agreed";

    // Build the email message
    $to = "sarahwardog@live.com";
    $subject = "Booking Request from Website";
    $message = "Full Name: " . $fullName . "\n" .
               "Email Address: " . $emailAddress . "\n" .
               "Session Choice: " . $sessions . "\n" .
               "Hoping to Gain: " . $gain . "\n" .
               "How Heard: " . $howHeard . "\n" .
               "Previous Sound Bath: " . $soundBathExperience . "\n" .
               "Experience Details: " . $experienceDetails . "\n" .
               "Terms and Conditions: " . $terms;

    $headers = "From: " . $emailAddress . "\r\n" .
               "Reply-To: " . $emailAddress . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);

    echo "Thank you for your booking!"; // Optional confirmation
}
?>