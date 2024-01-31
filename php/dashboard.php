<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <div class="background-image"></div>
            <div class="logo-container">
                <img src="FinTek.png" alt="FinTek Logo" class="logo-img">
            </div>
            <div class="sidebar-item" onclick="loadScreen('DashboardScreen.php')">
                <img src="../assets/Dashboard.svg" alt="Dashboard" class="icon-img">
                <span class="item-name">Dashboard</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('TransactionDetails.php')">
                <img src="../assets/TransactionDetails.svg" alt="TransactionDetails" class="icon-img">
                <span class="item-name">Transaction Details</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('CreateAuction.php')">
                <img src="../assets/CreateAuction.svg" alt="CreateAuction" class="icon-img">
                <span class="item-name">Create Auction</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('GroupDetails.php')">
                <img src="../assets/GroupDetails.svg" alt="GroupDetails" class="icon-img">
                <span class="item-name">Group Details</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('BettingSection.php')">
                <img src="../assets/BettingSection.svg" alt="BettingSection" class="icon-img">
                <span class="item-name">Betting Section</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('AmountCollected.php')">
                <img src="../assets/AmountCollected.svg" alt="AmountCollected" class="icon-img">
                <span class="item-name">Amount Collected</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('PaymentMode.php')">
                <img src="../assets/PaymentMode.svg" alt="PaymentMode" class="icon-img">
                <span class="item-name">Payment Mode</span>
            </div>
            <div class="sidebar-item" onclick="loadScreen('Profile.php')">
                <img src="../assets/Profile.svg" alt="Profile" class="icon-img">
                <span class="item-name">Profile</span>
            </div>
        </div>

        <div class="main-content">
            <div class="dashboard-header">
                <h1 style="color: #0192E0;">Dashboard</h1>
                <div class="search-bar">
                    <img src="../assets/search.svg" alt="Search Icon" class="search-icon">
                    <input type="text" placeholder="Search..." onkeydown="search(event)">
                </div>
                <div class="icons">
                    <img src="../assets/notification.svg" alt="notification" onclick="loadScreen('notification.php')">
                    <img src="../assets/question.svg" alt="question" onclick="loadScreen('question.php')">
                    <img src="../assets/setting.svg" alt="setting" onclick="loadScreen('setting.php')">
                    <img src="../assets/profilenav.svg" alt="profile" onclick="loadScreen('profilenav.php')">
                </div>
            </div>

            <div class="content" id="dynamic-content">
                <p>Welcome to the dashboard!</p>
            </div>
        </div>
    </div>

    <script>
        function loadScreen(screen) {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('dynamic-content').innerHTML = xhr.responseText;
                }
            };
            xhr.open('GET', screen, true);
            xhr.send();
        }

        function search(event) {
            if (event.key === 'Enter') {
                alert('Search functionality to be implemented.');
            }
        }
    </script>
</body>
</html>
