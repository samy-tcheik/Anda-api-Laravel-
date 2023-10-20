<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email Address</title>
</head>
<body>
<p>Hello, {{ $user->name }},</p>

<p>Thank you for registering with our application. To complete your registration, please verify your email address by clicking the following link:</p>

<a href="{{ $verificationLink }}">Verify Email Address</a>

<p>If you didn't register, you can safely ignore this email.</p>

<p>Best regards,</p>
<p>Your Application Team</p>
</body>
</html>
