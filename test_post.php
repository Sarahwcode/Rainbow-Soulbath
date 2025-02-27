<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "sarah_ward90@live.com"; // Replace with your email address
    $subject = "Form Data from test_email_post.php";
    $message = "Form Data:\n\n" . print_r($_POST, true); // Get the $_POST array as a string
    $headers = "From: webserver@localhost\r\n" .
               "Reply-To: webserver@localhost\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "This script only accepts POST requests.";
}
?>