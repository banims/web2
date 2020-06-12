<?php
include "koneksi.php";
$judul = (isset($_POST['judul']));
$penulis = (isset($_POST['penulis']));
$lead = (isset($_POST['lead']));
$content = (isset($_POST['content']));
$waktu = date("d M Y, H:i");
$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$content);
$query = "INSERT INTO articles (judul,penulis,lead,content,waktu)
 values('$judul','$penulis','$lead','$content','$waktu')";
$result = mysqli_query($con, $query);
if($result){
 echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
 echo "<A href=\"13latihan03.php\">List</A>";
}else{
 echo "<h2 align=center>Proses penambahan artikel tidak berhasil</h2>";
}
?> 