<html>
    <head></head>
    <body>
<?php
function perkenalan($nama, $salam="salam="Selamat Pagi){
    echo $salam.",";
    echo "Perkenalkan nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan("Fandi","Assalamualaikum wr.wb");

echo "<hr>";

$saya = "Ahmad";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya);
?>
    </body>
</html>