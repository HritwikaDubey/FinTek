<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #transactionChartContainer {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }

        #transactionChart {
            width: 100%;
        }
    </style>
</head>
<body>

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

</body>
</html>
