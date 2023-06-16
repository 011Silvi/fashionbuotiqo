<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            margin: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .card {
            background-color: #f4f4f4;
            border-radius: 4px;
            padding: 20px;
            text-align: center;
        }
        
        .card h3 {
            margin: 0;
        }
        
        .card p {
            margin: 10px 0;
            color: #777;
        }
        
       .navbar {
        background-color: #f8f9fa;
        padding: 10px;
        display: flex;
        justify-content: center;
    }

    .navbar a {
        color: #333;
        text-decoration: none;
        margin: 0 10px;
        font-weight: bold;
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #007bff;
    }

        
        .chart-container {
            position: relative;
            height: 300px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
    </div>
    
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Laporan Penjualan</a>
        <a href="#">Grafik Penjualan</a>
        <a href="#">Produk Terpopuler</a>
        <a href="#">Grafik Kunjungan</a>
    </div>
    
    <div class="container">
        
        <div class="card">
            <h3>Grafik Penjualan</h3>
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
        <div class="card">
            <h3>Grafik Produk Terpopuler</h3>
            <div class="chart-container">
                <canvas id="popularProductsChart"></canvas>
            </div>
        </div>
        <div class="card">
            <h3>Grafik Kunjungan</h3>
            <div class="chart-container">
                <canvas id="visitsChart"></canvas>
            </div>
        </div>
    </div>
    
    <!-- Include library Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        // Grafik Penjualan
        var salesChart = new Chart(document.getElementById('salesChart'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [5000, 7000, 5500, 6000, 8000, 6500],
                    backgroundColor: '#36a2eb'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Grafik Produk Terpopuler
        var popularProductsChart = new Chart(document.getElementById('popularProductsChart'), {
            type: 'pie',
            data: {
                labels: ['Product A', 'Product B', 'Product C', 'Product D', 'Product E'],
                datasets: [{
                    label: 'Popularity',
                    data: [50, 80, 60, 90, 70],
                    backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
        
        // Grafik Kunjungan
        var visitsChart = new Chart(document.getElementById('visitsChart'), {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Visits',
                    data: [100, 120, 80, 90, 110, 100, 130],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
