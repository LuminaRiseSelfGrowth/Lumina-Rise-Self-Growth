<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set email recipient (your email)
    $to = "Luminariseselfgrowth@gmail.com"; // This is your email from the contact info section
    
    // Set email subject
    $subject = "New Contact Form Submission from $name";
    
    // Build email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Set email headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect back to the thank you page
        header("Location: index.html?message=success#contact");
    } else {
        // Redirect back with error
        header("Location: index.html?message=error#contact");
    }
    exit;
}
?>
