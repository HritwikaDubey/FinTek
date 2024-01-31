<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="otp.css">
    <title>Verify OTP</title>
    <script>
        function handleInput(currentInput, nextInput, prevInput) {
            if (currentInput.value.length === 1) {
                nextInput && nextInput.focus();
            }
        }

        function handleBackspace(currentInput, prevInput) {
            if (currentInput.value.length === 0) {
                prevInput && prevInput.focus();
            } else if (!currentInput.value && prevInput) {
                prevInput.focus();
            }
        }
    </script>
</head>
<body>
    <div class="logo-container">
        <img src="FinTek.png" alt="Logo" class="logo-img">
    </div>
    <div class="verification-container">
        <h2 style="color: black; font-size: 25px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Verify Your OTP</h2>
        <p style="color: #6F6F6F; font-size: 15px; font-family: Roboto; font-weight: 300; line-height: 24px; word-wrap: break-word">Enter the OTP sent to your phone number</p>
        <div class="otp-boxes">
            <input type="text" class="otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, ''); handleInput(this, document.getElementById('otp-input-2'), null)" onkeydown="event.keyCode === 8 && handleBackspace(this, null)">
            <input type="text" class="otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp-input-2" oninput="this.value = this.value.replace(/[^0-9]/g, ''); handleInput(this, document.getElementById('otp-input-3'), document.getElementById('otp-input-1'))" onkeydown="event.keyCode === 8 && handleBackspace(this, document.getElementById('otp-input-1'))">
            <input type="text" class="otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp-input-3" oninput="this.value = this.value.replace(/[^0-9]/g, ''); handleInput(this, document.getElementById('otp-input-4'), document.getElementById('otp-input-2'))" onkeydown="event.keyCode === 8 && handleBackspace(this, document.getElementById('otp-input-2'))">
            <input type="text" class="otp-input" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otp-input-4" oninput="this.value = this.value.replace(/[^0-9]/g, ''); handleInput(this, null, document.getElementById('otp-input-3'))" onkeydown="event.keyCode === 8 && handleBackspace(this, document.getElementById('otp-input-3'))">
        </div>
        <span class="error-msg" id="otp-error"></span>
        <button class="verify-btn">Verify OTP</button>
        <p><a href="#" class="login-link">Resend OTP</a></p>
    </div>
</body>
</html>
