<?php
// Formdan gelen verileri alıyoruz
$user_email = $_POST['email'];
$user_sifre = $_POST['sifre'];

// Senin bilgilerine göre kontrol ediyoruz
$dogru_email = "b241210557@sakarya.edu.tr"; 
$dogru_sifre = "b241210557";

if ($user_email == $dogru_email && $user_sifre == $dogru_sifre) {
    // Bilgiler doğruysa bu mesajı basar
    echo "<div style='text-align:center; margin-top:100px; font-family:sans-serif;'>
            <h1>Hoşgeldiniz b241210557</h1>
            <p>Başarıyla giriş yaptınız.</p>
            <a href='index.html'>Ana Sayfaya Dön</a>
          </div>";
} else {
    // Bilgiler hatalıysa login sayfasına geri gönderir
    header("Location: login.html?hata=1");
    exit();
}
?>