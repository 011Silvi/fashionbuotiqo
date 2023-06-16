<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama Produk');
$sheet->setCellValue('C1', 'Harga');
$sheet->setCellValue('D1', 'Tanggal');
$sheet->setCellValue('E1', 'Kata Kunci');

$koneksi = mysqli_connect("localhost", "root", "", "db_buotiqo");
$query = mysqli_query($koneksi, "SELECT * FROM products");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['product_title']);
    $sheet->setCellValue('C' . $i, $row['product_price']);
    $sheet->setCellValue('D' . $i, $row['date']);
    $sheet->setCellValue('E' . $i, $row['product_keywords']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$sheet->getStyle('A1:E1' . ($i - 1))->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('DATA PRODUK.xlsx');
?>
