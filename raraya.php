<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tabungan_awal = $_POST['tabungan_awal'];

    // aturan otomatis
    $bunga = 0.05 * $tabungan_awal; // 5% dari tabungan awal
    $biaya_admin = 10000; // biaya tetap Rp10.000
    $tabungan_akhir = $tabungan_awal + $bunga - $biaya_admin;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Perhitungan Tabungan</title>
</head>
<body>
  <h2>Hasil Perhitungan Tabungan Bulanan</h2>
  <?php if (isset($tabungan_akhir)) : ?>
    <p>Tabungan Awal: Rp <?= number_format($tabungan_awal, 0, ',', '.') ?></p>
    <p>Bunga (5%): Rp <?= number_format($bunga, 0, ',', '.') ?></p>
    <p>Biaya Administrasi: Rp <?= number_format($biaya_admin, 0, ',', '.') ?></p>
    <hr>
    <p><strong>Tabungan Akhir: Rp <?= number_format($tabungan_akhir, 0, ',', '.') ?></strong></p>
  <?php else: ?>
    <p>Tidak ada data yang dihitung.</p>
  <?php endif; ?>
</body>
</html>