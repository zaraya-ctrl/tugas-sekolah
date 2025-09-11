<?php
// Tangkap data dari form
$nama = $_POST['nama'];
$lama_sewa = $_POST['lama_sewa'];

// Harga tetap
$harga_mobil_per_hari = 300000;
$harga_sopir_per_hari = 150000;
$biaya_asuransi = 50000;

// Hitung total
$total_biaya = ($harga_mobil_per_hari + $harga_sopir_per_hari) * $lama_sewa + $biaya_asuransi;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan Biaya</title>
</head>
<body>
    <h2>Detail Penyewaan</h2>
    <p>Nama Penyewa: <strong><?php echo htmlspecialchars($nama); ?></strong></p>
    <p>Lama Sewa: <strong><?php echo $lama_sewa; ?> hari</strong></p>
    <p>Biaya Sewa Mobil: Rp<?php echo number_format($harga_mobil_per_hari, 0, ',', '.'); ?>/hari</p>
    <p>Biaya Sopir: Rp<?php echo number_format($harga_sopir_per_hari, 0, ',', '.'); ?>/hari</p>
    <p>Biaya Asuransi: Rp<?php echo number_format($biaya_asuransi, 0, ',', '.'); ?> (per sewa)</p>
    <hr>
    <h3>Total Biaya: Rp<?php echo number_format($total_biaya, 0, ',', '.'); ?></h3>
</body>
</html>