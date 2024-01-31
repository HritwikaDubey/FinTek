<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>FinTek</title>
    <script src="index.js" defer></script>
</head>

<body>
    <div class="container">
        <div class="left-container">
            <div class="logo">
                <img src="FinTek.png" alt="Logo">
            </div>

            <div class="content">
                <h1>Your Financial Freedom Awaits!</h1>
                <p>Experience a user-friendly interface, transparent transactions, and a<br>
                    collaborative financial ecosystem. Fintek where your financial
                    aspirations take flight.

                    <br><br>Ready to embark on a journey of financial empowerment?<br> Sign in now
                    and redefine your financial future with Fintek.</p>
            </div>
        </div>
        <div class="right-container">
            <div class="login">
                <p style="color: black; font-size: 26px; font-family: Roboto; font-weight: 500; word-wrap: break-word">USER LOGIN</p>

                <div class="input-group">
                    <input type="text" class="user-icon" placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="text" class="phone-icon" id="phone" placeholder="Phone">
                    <span class="error-msg" id="phone-error"></span> <!-- Error message span -->
                </div>
                <div class="input-group">
                    <input type="password" class="lock-icon" placeholder="Password">
                </div>

                <a href="#" class="forgot-password">Forgot password?</a>
                <button class="login-button">Log In</button>

                <p>or with</p>
                <div class="image-group">
                    <a href="https://www.google.com" target="_blank">
                        <img src="google.svg" alt="Google">
                    </a>
                    <a href="https://www.facebook.com" target="_blank" class="image2-container">
                        <img src="facebook.svg" alt="Facebook">
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="twitter.svg" alt="Twitter">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');

    phoneInput.addEventListener('input', function() {

        const phoneValue = this.value.replace(/\D/g, '');

        const truncatedValue = phoneValue.slice(0, 10);

        const isValidPhone = /^\d{10}$/.test(truncatedValue);
        
        if (!isValidPhone) {
            phoneError.textContent = 'Phone number must be exactly 10 digits';
            phoneInput.classList.add('error');
        } else {
            phoneError.textContent = '';
            phoneInput.classList.remove('error');
        }

        this.value = truncatedValue;
    });
});

</script>
</body>

</html>
