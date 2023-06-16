<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Email');
$sheet->setCellValue('D1', 'Negara');
$sheet->setCellValue('E1', 'Kota');
$sheet->setCellValue('F1', 'No.Telp');

$koneksi = mysqli_connect("localhost", "root", "", "db_buotiqo");
$query = mysqli_query($koneksi, "SELECT * FROM customers");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['customer_name']);
    $sheet->setCellValue('C' . $i, $row['customer_email']);
    $sheet->setCellValue('D' . $i, $row['customer_country']);
    $sheet->setCellValue('E' . $i, $row['customer_city']);
    $sheet->setCellValue('F' . $i, $row['customer_address']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$sheet->getStyle('A1:F1' . ($i - 1))->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('DATA CUSTOMER.xlsx');
?>
