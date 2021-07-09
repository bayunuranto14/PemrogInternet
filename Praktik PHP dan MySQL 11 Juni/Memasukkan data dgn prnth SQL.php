<?php
$host = “localhost”;
$pass = “ “;
$database = “dbguestbook“;
$konek = mysql_connect($host, $user, $pass)
or die (“koneksi gagal dilakukan : “ .mysql_error());
mysql_select_db($database)
or die (“Database tidak ada”);
$hasil = mysql_query(“INSERT INTO guestbook (nama, email, pesan) values (‘Rahma’,
‘rahma.gmail.com’, ‘situs ini sangat baik’)”)
or die (“Perintah salah”);
echo “data telah tersimpan”;
mysql_close($konek);
?>