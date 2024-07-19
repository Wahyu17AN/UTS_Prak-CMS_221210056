<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Link</title>
</head>
<body>
    <h2>Password Reset Link</h2>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <p>
        Click <a href="{{ $resetLink }}">here</a> to reset your password.
    </p>
    <p>If you did not request a password reset, no further action is required.</p>
</body>
</html>
