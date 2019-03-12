<html>	
<head>

	<title>Variable dalam PHP</title>

<body>
<?php
//variable bertipe integer
$a="5";
//variable bertipe integer
$b="2.5";
$komentar="Selamat Datang di PHP";
echo ("Nilai variable a adalah = $a <br>");
//variable bertipe integer
echo ("Nilai variable b adalah = $b <br>");
//variable bertipe real
echo ("Nilai variable komentar adalah = $komentar <br>");
//variable bertipe stringer
$hasil=$a+$b;
echo ("Hasil jumlah a dan b adalah = $hasil <br>")
//variable bertipe dauble
$tgl = date ("d f y");
//variable bertipe tanggal
$nama = "Mabes TNI";
$garis = "=========================";
echo "<p>";
echo $garis. "<br>";
echo $komentar. "di Kelas Pemograman". $nama. "<br>Belajar dengan giat ya......<br>";
echo $garis. "<br>";
echo "Tanggal". $tgl;

?>