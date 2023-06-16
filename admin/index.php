<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

$admin_session = $_SESSION['admin_email'];

$get_admin = "select * from admins  where admin_email='$admin_session'";

$run_admin = mysqli_query($con,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_country = $row_admin['admin_country'];

$admin_job = $row_admin['admin_job'];

$admin_contact = $row_admin['admin_contact'];

$admin_about = $row_admin['admin_about'];


$get_products = "SELECT * FROM products";
$run_products = mysqli_query($con,$get_products);
$count_products = mysqli_num_rows($run_products);

$get_customers = "SELECT * FROM customers";
$run_customers = mysqli_query($con,$get_customers);
$count_customers = mysqli_num_rows($run_customers);

$get_p_categories = "SELECT * FROM product_categories";
$run_p_categories = mysqli_query($con,$get_p_categories);
$count_p_categories = mysqli_num_rows($run_p_categories);


$get_total_orders = "SELECT * FROM customer_orders";
$run_total_orders = mysqli_query($con,$get_total_orders);
$count_total_orders = mysqli_num_rows($run_total_orders);


$get_pending_orders = "SELECT * FROM customer_orders WHERE order_status='pending'";
$run_pending_orders = mysqli_query($con,$get_pending_orders);
$count_pending_orders = mysqli_num_rows($run_pending_orders);

$get_completed_orders = "SELECT * FROM customer_orders WHERE order_status='Complete'";
$run_completed_orders = mysqli_query($con,$get_completed_orders);
$count_completed_orders = mysqli_num_rows($run_completed_orders);


$get_total_earnings = "SELECT SUM( due_amount) as Total FROM customer_orders WHERE order_status = 'Complete'";
$run_total_earnings = mysqli_query($con, $get_total_earnings);
$row = mysqli_fetch_assoc($run_total_earnings);                       
$count_total_earnings = $row['Total'];


$get_coupons = "SELECT * FROM coupons";
$run_coupons = mysqli_query($con,$get_coupons);
$count_coupons = mysqli_num_rows($run_coupons);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url(download (1).jpeg);
        background-repeat: no-repeat;
        background-size: cover;
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
        <a href="logout.php" class="dropdown__link">Logout</a>
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
        <div class="card">
    <h3>Mitra Terpopuler</h3>
    <div class="chart-container">
        <canvas id="partnersChart"></canvas>
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
                labels: ['Jaket Denim Bergaris', 'Mantel Bulu Tanpa Lengan', 'Kemeja Polo Lengan Panjang untuk Pria', 'Sepatu Adidas Ultraboost Edisi 21', 'Kemeja Polo Ultra Gildan'],
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
        // Grafik banyaknya mitra
var partnersChart = new Chart(document.getElementById('partnersChart'), {
    type: 'doughnut',
    data: {
        labels: ['Mitra A', 'Mitra B', 'Mitra C', 'Mitra D', 'Mitra E'],
        datasets: [{
            label: 'Product Terjual',
            data: [20, 30, 25, 15, 10],
            backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)', 'rgba(255, 206, 86, 0.5)', 'rgba(75, 192, 192, 0.5)', 'rgba(153, 102, 255, 0.5)'],
            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});

    </script>
</body>
</html>


</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->
<!-- Include library Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>
