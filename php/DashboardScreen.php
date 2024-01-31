<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container-grid {
            display: grid;
            grid-template-columns: 6fr 4fr;
            grid-template-rows: auto auto auto;
            grid-gap: 20px;
            padding: 20px;
            box-sizing: border-box;
            margin-bottom: -60px;
        }

        .container {
            padding: 20px;
            text-align: center;
            color: #000;
            border-radius: 10px;
            transform-origin: 0 0;
            background: #ECECEC;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin: 0;
        }

        .container1 {
            height: 300px;
            grid-column: span 1;
        }

        .container2 {
            height: 300px;
            grid-column: span 1;
        }

        .container-grid-special {
            display: grid;
            grid-template-columns: 4fr 6fr;
            grid-template-rows: auto auto;
            grid-gap: 20px;
            padding: 20px;
            box-sizing: border-box;
        }

        .container3 {
            height: 100px;
            grid-column: span 1;
        }

        .container4 {
            grid-row: span 2;
            height: 260px;
            grid-column: span 1 / span 2;
        }

        .container5 {
            height: 100px;
            grid-column: span 1;
        }

        #transactionChartContainer {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }

        #transactionChart {
            width: 100%;
        }
    </style>

    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container-grid">
        <div class="container container1">
            <!-- Chart content starts here -->
            <div id="transactionChartContainer">
                <canvas id="transactionChart"></canvas>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var labels = ['January', 'February', 'March', 'April', 'May'];
                    var data = [1200, 900, 1500, 800, 1200];

                    var ctx = document.getElementById('transactionChart').getContext('2d');

                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Transaction Data',
                                data: data,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>
            <!-- Chart content ends here -->
        </div>

        <div class="container container2">
            <!-- Inside container2 -->
<div class="developer-groups">
    <h2>Developer Group</h2>
    <!-- Sample Group 1 -->
    <div class="group">
        <img src="group1-icon.png" alt="Group 1 Icon" class="group-icon">
        <div class="group-details">
            <h3>Group 1</h3>
            <p>Sub-paragraph about Group 1.</p>
        </div>
        <span class="transaction-amount">$500</span>\
        <a href="group1-page.html" class="group-link"></a>
    </div>

    <!-- Sample Group 2 -->
    <div class="group">
        <img src="group2-icon.png" alt="Group 2 Icon" class="group-icon">
        <div class="group-details">
            <h3>Group 2</h3>
            <p>Sub-paragraph about Group 2.</p>
        </div>
        <span class="transaction-amount">$700</span>
        <a href="group2-page.html" class="group-link"></a>
    </div>

    <!-- Sample Group 3 -->
    <div class="group">
        <img src="group3-icon.png" alt="Group 3 Icon" class="group-icon">
        <div class="group-details">
            <h3>Group 3</h3>
            <p>Sub-paragraph about Group 3.</p>
        </div>
        <span class="transaction-amount">$300</span>
        <a href="group3-page.html" class="group-link"></a>
    </div>
</div>

        </div>
    </div>

    <div class="container-grid-special">
        <div class="container container3">
            <h2>Container 3</h2>
            <p>This is the content for Container 3.</p>
        </div>

        <div class="container container4">
            <h2>Container 4</h2>
            <p>This is the content for Container 4.</p>
        </div>

        <div class="container container5">
            <h2>Container 5</h2>
            <p>This is the content for Container 5.</p>
        </div>
    </div>
</body>
</html>
