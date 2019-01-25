<?php
$a = "5";
$b = "2.5";

$komentar = "Selamat Datang di PHP";

echo ("Nilai variabel a adalah = $a <br>");
//variabel bertipe Integer
echo ("Nilai variabel b adalah = $b <br>");
//variabel bertipe real

$hasil = $a + $b;
echo ("Hasil jumlah a dan b adalah = $hasil <br>");
//variable bertipe double

$tgl = date("d F Y");
//variabel bertipe tanggal

$nama = "TASS Telkom University";
$garis = "============================";

echo "<p>";
echo $garis. "<br>";
echo $komentar."Di Lab".$nama."<br> Selamat Belajar...<br>";
echo $garis. "<br>";
echo "Tanggal".$tgl;
echo "<br>";
//Dengan for
echo "Ini perulangan menggunakan For <br>";
for ($i=0; $i < 5; $i++){
	echo "$i"."<br>";

}

//Dengan While
echo "Ini perulangan menggunakan While <br>";
$j = 0;
while ( $j<= 5) {
	echo "$j"."<br>";

	$j++;
}

//Dengan Do While
echo "Ini perulangan menggunakan Do While <br>";
$k = 0;
do {
	echo "$k";
	$k++;
} while ( $k < 5);

?>