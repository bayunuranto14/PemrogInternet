<?php
$host=“localhost”;
$user=“ “;
$password=“ “;
$database =“db_guestbook”;
$konek=mysql_connect($host, $user, $pass) or die(“Koneksi gagal dilakukan : “ .mysql_error());
if(mysql_create_db($database))
{
echo “Database $database telah terbuat”;
}
else
{
echo “Tidak ada database bernama $database \n”.mysql_error();
}
mysql_close($konek);
?>
</body>
</html>