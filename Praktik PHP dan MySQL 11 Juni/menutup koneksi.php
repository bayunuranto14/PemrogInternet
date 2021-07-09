<html>
<head>
<title>Menggunakan MySQL Connect</title>
</head>
<body>
<?php

$host = “localhost”;
$user = “ “;
$pass = “ “;
$konek = mysql_connect($host, $user, $pass)
or die(“Koneksi gagal dilakukan : “. mysql_error());
echo “Koneksi sukses”;

mysql_close($konek);

?>
</body>
</html>