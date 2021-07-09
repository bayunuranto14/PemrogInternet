<?
// swicth.php
$hari_ini=date("w");
Switch($hari_ini){
Case"0";
$hari="Minggu";
Break;
Case"1";
$hari="Senin";
Break;
Case"2";
$hari="Selasa";
Break;
Case"3";
$hari="Rabu";
Break;
Case"4";
$hari="Kamis";
Break;
Case"5";
$hari="Jumat";
Break;
Case"6";
$hari="Sabtu";
Break;
}
Echo" Hari ini adalah ".$hari;
?>