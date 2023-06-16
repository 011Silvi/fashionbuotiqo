<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_store";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<?php
// Melakukan SQL query
$query = "SELECT cat_id, COUNT(*) AS jumlah_produk FROM products GROUP BY cat_id";
$result = mysqli_query($conn, $query);

// Membuat array untuk menyimpan data dari query
$labels = array();
$data = array();

// Mengambil data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['cat_id'];
    $data[] = $row['jumlah_produk'];
}

// Mengubah data ke format JSON
$labels = json_encode($labels);
$data = json_encode($data);

// Membebaskan hasil query
mysqli_free_result($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Grafik dari SQL Query menggunakan PHP dan Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <?php
    // Kode koneksi dan query sebelumnya

    // Kode untuk menampilkan grafik
    ?>
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
