<!--Percabangan tentang Waktu -->
<?php
$waktu = date("H");

if ($waktu < "10") {
  echo "Selamat Pagi!";
} elseif ($waktu < "20") {
  echo "Selamat Siang!";
} else {
  echo "Selamat Malam!";
}
?>