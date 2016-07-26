<?php
    // maybe this will help
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");

    // Build email
    $recipient = "ak722@cornell.edu";
    $subject = "test from $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    $email_headers = "From: $name <$email>";

    // Send email
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "swag swag";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "disaster";
    }
?>