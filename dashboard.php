<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php");
    exit();
}

// Simulasi data tabungan (Nanti bisa diambil dari database)
$target_dana = 10000000; // 10 Juta
$terkumpul = 2500000;    // 2.5 Juta
$persentase = ($terkumpul / $target_dana) * 100;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Tabungan Traveling</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2 style="text-align: center;">✈️ Tabungan Traveling</h2>
        <p style="text-align: center; margin-bottom: 20px;">Halo, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>! Semangat menabung untuk liburan.</p>

        <div class="savings-card">
            <span>Dana Terkumpul</span>
            <div class="savings-amount">Rp <?php echo number_format($terkumpul, 0, ',', '.'); ?></div>
            <small>Target: Rp <?php echo number_format($target_dana, 0, ',', '.'); ?></small>
            
            <div class="progress-container">
                <div class="progress-bar" style="width: <?php echo $persentase; ?>%;"></div>
            </div>
            <p style="margin-top: 5px; font-size: 0.8rem;"><?php echo $persentase; ?>% tercapai</p>
        </div>

        <form action="" method="POST">
            <div class="input-group">
                <label for="nominal">Tambah Tabungan (Rp)</label>
                <input type="number" id="nominal" name="nominal" placeholder="Contoh: 50000">
            </div>
            <button type="button" onclick="alert('Fitur simpan ke database belum aktif di demo ini!')">Simpan Tabungan</button>
        </form>

        <div style="margin-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 20px;">
            <a href="logout.php">
                <button class="btn-logout">Logout</button>
            </a>
        </div>
    </div>
</body>
</html>