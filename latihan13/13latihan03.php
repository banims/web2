<?php
echo "Halaman Admin Panel Berita";
include "koneksi.php";
$perintah="SELECT * FROM articles ORDER BY articleID DESC";
$hasil=mysqli_query($con, $perintah);
echo("
<h2>List Artikel</h2>
<br><UL>
");
while ($row=mysqli_fetch_array($hasil))
{
echo("
<LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a
href=\"13latihan04.php?articleID=$row[0]\">Edit</a>
&nbsp;<a
href=\"13latihan06.php?articleID=$row[0]\">Hapus</a></LI><br>");
}echo("</table>");
echo "<br><a href=\"13latihan01.php\">Tambah</a>";
?>