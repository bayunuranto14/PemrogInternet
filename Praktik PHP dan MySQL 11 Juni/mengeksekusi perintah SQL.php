<?php
$host = “localhost”;
$pass = “ “;
$database = “dbguestbook“;
$konek = mysql_connect($host, $user, $pass)
or die (“koneksi gagal dilakukan : “ .mysql_error());
mysql_select_db($database)
or die (“Database tidk ada”);
$hasil = mysql_query(“CREATE TABLE guestbook (id_guest INT (3) NOT NULL AUTO
INCREMENT, nama VARCHAR (35) NOT NULL, email VARCAHR (35) NOT NULL,
pesan VARCHAR (100) NOT NULL, PRIMARY KEY (id_guest))”)
or die (“Perintah Salah”);
echo “tabel telah terbuat”;
mysql_close ($konek);
?>