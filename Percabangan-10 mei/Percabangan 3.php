<?
// ifelseif.php
$nama = “ardi";
$nilai = 86 ;
If($nilai >= 85){
$predikat="Sangat Memuaskan";
}elseif($nilai>= 70){
$predikat="Memuaskan";
}elseif($nilai>=60){
$predikat="Cukup";
}elseif($nilai>=50){
$predikat="Kurang";
}else{
$predikat="Sangat Kurang";
}
Echo"<br> Nama Siswa : <b>$nama</b><br>Nilai angka
<b>$nilai</b> dengan predikat <b>$predikat</b>";
?>