<?php
session_start();
$kullanici = $_SESSION['kullanici'] ?? null;
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Ana Sayfa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5 text-center">
  <h1>Web Siteme Hoş Geldiniz</h1>

  <?php if ($kullanici): ?>
    <p class="mt-3 fs-4 text-success">Hoş geldiniz <strong><?= htmlspecialchars($kullanici) ?></strong> 🎉</p>
  <?php else: ?>
    <p class="mt-3 text-danger">Yetkisiz giriş. Lütfen önce <a href="login.html">giriş yapın</a>.</p>
  <?php endif; ?>
</div>

</body>
</html>
