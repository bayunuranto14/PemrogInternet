<?
// for.php
Echo"Pengulangan dengan menggunakan for<br><form
method=\"POST\" action=\"kirim.php\">Beri nilai Anda:<br>";
For($a=10;$a<=100;$a+=10){
Echo"<input type=\"radio\" value=\"$a\"
name=\"R1\">$a<br>";
}
?>
<input type="submit" value="PILIH" name="pilih"></form>