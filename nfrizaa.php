<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hari = $_POST['hari'];
    $lembur1 = $_POST['lembur1'];
    $lembur2 = $_POST['lembur2'];

    $gaji_normal = 50000 * $hari; // 50 ribu per 7 jam kerja
    $gaji_lembur = ($lembur1 + $lembur2) * 20000; // 20 ribu per jam lembur
    $total = $gaji_normal + $gaji_lembur;

    echo "<h2>Hasil Perhitungan Gaji</h2>";
    echo "Hari kerja: $hari hari <br>";
    echo "Gaji normal: Rp $gaji_normal <br>";
    echo "Jam lembur total: " . ($lembur1 + $lembur2) . " jam <br>";
    echo "Gaji lembur: Rp $gaji_lembur <br>";
    echo "Total Gaji Mingguan = <b>Rp $total</b>";
}
?>