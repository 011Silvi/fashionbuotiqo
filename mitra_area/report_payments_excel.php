<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'No.Invoice');
$sheet->setCellValue('C1', 'Jumlah Bayar');
$sheet->setCellValue('D1', 'Metode Pembayaran');
$sheet->setCellValue('E1', 'No.Referensi');
$sheet->setCellValue('F1', 'Kode Pembayaran');
$sheet->setCellValue('G1', 'Tanggal Pembayaran');


$koneksi = mysqli_connect("localhost", "root", "", "db_buotiqo");
$query = mysqli_query($koneksi, "SELECT * FROM payments");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['invoice_no']);
    $sheet->setCellValue('C' . $i, $row['amount']);
    $sheet->setCellValue('D' . $i, $row['payment_mode']);
    $sheet->setCellValue('E' . $i, $row['ref_no']);
    $sheet->setCellValue('F' . $i, $row['code']);
    $sheet->setCellValue('G' . $i, $row['payment_date']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$sheet->getStyle('A1:G1' . ($i - 1))->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('DATA PEMBAYARAN.xlsx');
?>
