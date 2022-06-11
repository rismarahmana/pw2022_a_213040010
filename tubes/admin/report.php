<?php
include('../database.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($connect,"select * from produk");
$html = '<center><h3>Daftar Produk</h3></center><hr/><br/><br>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Kode Barang</th>
 <th>Nama Barang</th>
 <th>Merk Barang</th>
 <th>Jenis Barang</th>
 <th>Harga Barang</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['id_produk']."</td>
 <td>".$row['nama_produk']."</td>
 <td>".$row['merk_produk']."</td>
 <td>".$row['jenis_produk']."</td>
 <td>".$row['harga_produk']."</td>
 <td>".$row['deskripsi_produk']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('produk_report.pdf');
?>