<?php
include "koneksi.php";
require('fpdf186/fpdf.php');

$data = mysqli_query($koneksi, "SELECT * FROM buku_tamu ORDER BY id DESC");

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN BUKU TAMU', 0, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 8, 'No', 1);
$pdf->Cell(40, 8, 'Nama', 1);
$pdf->Cell(60, 8, 'Email', 1);
$pdf->Cell(130, 8, 'Pesan', 1);
$pdf->Cell(40, 8, 'Tanggal', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$no = 1;

while ($row = mysqli_fetch_assoc($data)) {
    $pdf->Cell(10, 8, $no++, 1);
    $pdf->Cell(40, 8, $row['nama'], 1);
    $pdf->Cell(60, 8, $row['email'], 1);
    $pdf->Cell(130, 8, substr($row['pesan'], 0, 60), 1);
    $pdf->Cell(40, 8, $row['tanggal'], 1);
    $pdf->Ln();
}

$pdf->Output();
