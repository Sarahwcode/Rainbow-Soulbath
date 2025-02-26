<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST["Full Name"];
    $emailAddress = $_POST["email Address"];
    $sessions = $_POST["sessions"];
    $gain = $_POST["What are you hoping to gain from this sound meditation?"];
    $howHeard = $_POST["How did you hear about Rainbow sound bath meditation?"];
    $soundBathExperience = $_POST["Have you done a sound bath session before?"];
    $experienceDetails = $_POST["If the answer yes, Could you tell me a bit about your expereience?"];
    $terms = isset($_POST["terms_and_conditions"]) ? "Agreed" : "Not Agreed";

    // Build the email message
    $to = "sarah_ward90@live.com";
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
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your booking request! We will be in touch soon.";
    } else {
        echo "Sorry, there was an error sending your request. Please try again later.";
    }
} else {
    // Display the HTML form
    echo '<section class="text-center">
        <h2>Book a session</h2>
        <form method="post" class="booking-form">
            <div>
                <label for="full name">Enter your full name:</label>
            </div>
            <div>
                <input type="text" name="Full Name" title="Enter your full name:" placeholder="Enter your full name..." required />
            </div>
            <div>
                <label for="Email Address">Email Address: </label>
            </div>
            <div>
                <input type="text" name="email Address" title="Email" placeholder="Enter your Email..." required />
            </div>
            <div>
                <label for="">Choose the session you wish to book: </label>
            </div>
            <div>
                <select name="sessions" id="sessions">
                    <option value="">Please Select...</option>
                    <option value="Not sure">Not sure</option>
                    <option value="Vibrant Healing & Exploration">Vibrant Healing & Exploration</option>
                    <option value="Transformative Experience">Transformative Experience</option>
                    <option value="Book Session">Book Session</option>
                    <option value="The Power of Sound">The Power of Sound</option>
                </select>
            </div>
            <div>
                <label>What are you hoping to gain from this sound meditation?</label>
            </div>
            <div>
                <textarea name="What are you hoping to gain from this sound meditation?" class="long-answer" type="text" title="text" placeholder="Enter your answer here .." required></textarea>
            </div>
            <div>
                <label>How did you hear about Rainbow sound bath meditation?</label>
            </div>
            <div>
                <textarea name="How did you hear about Rainbow sound bath meditation?" class="long-answer" type="text" title="text" placeholder="Enter your answer here .." required></textarea>
            </div>
            <div>
                <label> Have you done a sound bath session before? </label>
            </div>
            <div>
                <select name="Have you done a sound bath session before?" id="yes-no">
                    <option value="">Please Select...</option>
                    <option value="Not sure">Not sure</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div>
                <label>If the answer yes, Could you tell me a bit about your expereience?</label>
            </div>
            <div>
                <textarea name="If the answer yes, Could you tell me a bit about your expereience?" class="long-answer" type="text" title="text" placeholder="Enter your answer here .." ></textarea>
            </div>
            <div>
                <label for="terms_and_conditions">If you agree to the terms and conditions please tick the box.</label>
                <input type="checkbox" name="terms_and_conditions" required />
            </div>
            <div>
                <input type="submit" title="Submit your booking request" required value="Submit your booking request" />
            </div>
        </form>
    </section>';
}
?>