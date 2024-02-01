<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if (empty($name) || empty($email) || empty($message)) {
        echo '<p class="error-message">Please fill in all fields.</p>';
    } else {

        $to = 'cimetteròlamiamail@email.com';
        $subject = 'New Contact Form Submission';
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $message_body = "
            <html>
            <body>
                <h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong><br>$message</p>
            </body>
            </html>
        ";

        $success = mail($to, $subject, $message_body, $headers);

        if ($success) {
            echo '<p class="success-message">Message sent successfully!</p>';
        } else {
            echo '<p class="error-message">Error sending message. Please try again later.</p>';
            echo '<p class="error-message">' . error_get_last()['message'] . '</p>';
        }
    }
}
