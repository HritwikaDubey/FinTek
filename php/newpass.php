<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newpass.css">
    <title>Forget Password</title>
</head>
<body>
    <div class="logo-container">
        <img src="FinTek.png" alt="Logo" class="logo-img">
    </div>
    <div class="password-container">
        <h2 style="color: black; font-size: 25px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Reset Password</h2>
        <p style="color: #6F6F6F; font-size: 15px; font-family: Roboto; font-weight: 300; line-height: 24px; word-wrap: break-word">Enter your new password and confirm it</p>
        <div class="input-group">
            <input type="password" class="password-icon" id="newPassword" placeholder="New Password">
            <span class="error-msg" id="newPassword-error"></span>
        </div>
        <div class="input-group">
            <input type="password" class="password-icon" id="confirmPassword" placeholder="Confirm New Password">
            <span class="error-msg" id="confirmPassword-error"></span>
        </div>
        <button class="submit-btn">Continue</button>
    </div>
</body>
</html>
