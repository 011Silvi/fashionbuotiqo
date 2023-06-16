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
$query = mysqli_query($koneksi, "SELECT * FROM coupons");
$html = '<center><h3>Daftar Products Categories</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Nama </th>
        <th>Nilai Kupon</th>
        <th>Kode</th>
        <th>Batas Pemakaian</th>
        <th>Digunakan </th>
    </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$row['coupon_title']."</td>
        <td>".$row['coupon_price']."</td>
        <td>".$row['coupon_code']."</td>
        <td>".$row['coupon_limit']."</td>
        <td>".$row['coupon_use']."</td>
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
$dompdf->stream('DAFTAR KUPON.pdf');
?>
