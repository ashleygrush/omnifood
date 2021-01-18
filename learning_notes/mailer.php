<?php
    // Code below used to submit for data to email. 

    // Gets the form fields, name, email and message and removes HTML tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Checks for incomplete data. If name or message is missing or email is invalid. Redirects to homepage.
    // "success-1 = presents error message when redirecting back to form on the homepage.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_SANTIZE_EMAIL)) {
        header("Location: <Domain_name/url/index.php?success=-1#form");
        exit;
    }

    // Set recipient email address. Update to YOUR desired email.
    $recipient = "hello@<domain_name>.com";
        
    // Set email subject.
    $subject = "New contact from $name";
    
    // Build email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build email headers.
    $email_headers = "From: $name <$email>";

    // Sends email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to index.html page w/ success code.
    // "success-1 = presents success message when redirecting back to form on the homepage.
    header("Location: <Domain_name/url/index.php?success=1#form");
?>