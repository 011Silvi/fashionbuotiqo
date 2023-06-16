<?php
$host = "localhost"; // Ganti dengan nama host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "db_buotiqo"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT co.*, c.customer_email FROM customer_orders co JOIN customers c ON co.customer_id = c.customer_id");
$html = '<center><h3>Daftar Order</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Customer</th>
        <th>Invoice</th>
        <th>Produk</th>
        <th>Qty</th>
        <th>Ukuran</th>
        <th>Tanggal Pesan</th>
        <th>Jumlah Total</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>';

$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$row['customer_email']."</td>
        <td>".$row['invoice_no']."</td>
        <td>".$row['product_id']."</td>
        <td>".$row['qty']."</td>
        <td>".$row['size']."</td>
        <td>".$row['order_date']."</td>
        <td>".$row['due_amount']."</td>
        <td>".$row['order_status']."</td>
        <td>".$row['order_id']."</td>
    </tr>";
    $no++;
}

$html .= "</table>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file ke PDF
$dompdf->stream('DAFTAR ORDER.pdf');
?>
