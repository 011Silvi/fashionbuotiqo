<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Nilai Kupon');
$sheet->setCellValue('D1', 'Kode');
$sheet->setCellValue('E1', 'Batas');
$sheet->setCellValue('F1', 'Digunakan');



$koneksi = mysqli_connect("localhost", "root", "", "db_buotiqo");
$query = mysqli_query($koneksi, "SELECT * FROM coupons");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['coupon_title']);
    $sheet->setCellValue('C' . $i, $row['coupon_price']);
    $sheet->setCellValue('D' . $i, $row['coupon_code']);
    $sheet->setCellValue('E' . $i, $row['coupon_limit']);
    $sheet->setCellValue('F' . $i, $row['coupon_used']);
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
$writer->save('DATA KUPON.xlsx');
?>
