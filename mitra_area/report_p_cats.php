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
$query = mysqli_query($koneksi, "SELECT * FROM product_categories");
$html = '<center><h3>Daftar Products Categories</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
    </tr>';

$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $html .= "<tr>
        <td>".$no."</td>
        <td>".$row['p_cat_title']."</td>
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
$dompdf->stream('DAFTAR PRODUCTS CATEGORIES.pdf');
?>
