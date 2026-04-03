<?php
if (!isset($_POST['kirim'])){
    return;
}
if ($_POST['kiri'] == "" || $_POST['kanan'] == ""){
    echo "Harap Isi";
    return;
}
$kiri = (float)$_POST['kiri'];
$kanan = (float)$_POST['kanan'];
$operasi = $_POST['operasi'];

function Operasi($Operasitemp, $kiritemp, $kanantemp){
    switch ($Operasitemp){
        case "+":
            return $kiritemp + $kanantemp;
        case "-":
            return $kiritemp - $kanantemp;
        case "*":
            return $kiritemp * $kanantemp;
        case "/":
            return ($kanantemp == 0) ? "tidak bisa di bagi dengan nol" : $kiritemp / $kanantemp;
        default:
            return "Operasi Tidaj Valid!";
    }
}
$hasil = Operasi($operasi, $kiri, $kanan);
echo "<h3>Hasil: $hasil</h3>";
?>