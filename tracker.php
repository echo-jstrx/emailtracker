<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <p>Dear [NAME],</p>
    <p>Please verify your email by clicking the link below:</p>
    <a href="https://yourdomain.com/verify.php?token=[TOKEN]">Verify Email</a>
    <img src="https://yourdomain.com/track_open.php?email=[EMAIL]" alt="" width="1" height="1" style="display:none;">
</body>
</html>


// track_open.php
<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    // Log the open in your database
    logEmailOpen($email);
    // Return a 1x1 pixel transparent image
    header('Content-Type: image/gif');
    echo base64_decode('R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==');
    exit;
}

function logEmailOpen($email) {
    // Implement your logging logic here
    // Example: INSERT INTO email_opens (email, opened_at) VALUES (?, NOW())
}
?>
