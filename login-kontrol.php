<?php
session_start();

$dogruKullanici = "b2412100091@sakarya.edu.tr";
$dogruSifre = "b2412100091";

$kullanici = $_POST['username'] ?? '';
$sifre = $_POST['password'] ?? '';

if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    $_SESSION['kullanici'] = explode("@", $kullanici)[0];
    $kisaKullanici = $_SESSION['kullanici'];
    echo "
    <html>
    <head>
      <meta http-equiv='refresh' content='3;url=index.html'>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body class='login-success'>

      <h2>Hoş geldiniz <strong>$kisaKullanici</strong> 👑</h2>
      <p class='text-muted'>3 saniye içinde ana sayfaya yönlendiriliyorsunuz...</p>
      <div class='loader'></div>

    </body>
    </html>
    ";
} else {
    header("Location: login.html");
    exit();
}
?>

