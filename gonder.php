<?php
// Formun POST yöntemiyle gönderilip gönderilmediğini kontrol ediyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verileri güvenli bir şekilde alıyoruz
    $ad = htmlspecialchars($_POST['ad']);
    $soyad = htmlspecialchars($_POST['soyad']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['tel']);
    $konu = htmlspecialchars($_POST['konu']);
    $cinsiyet = htmlspecialchars($_POST['cinsiyet']);
    $mesaj = htmlspecialchars($_POST['mesaj']);
    $kvkk = isset($_POST['kvkk']) ? "Kabul Edildi" : "Kabul Edilmedi";

    // Ekrana yazdırma tasarımı
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Gönderim Sonucu</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light p-5'>
        <div class='container card shadow p-4 rounded-4'>
            <h2 class='text-success border-bottom pb-2'>Form Başarıyla Gönderildi</h2>
            <div class='mt-4'>
                <p><strong>Ad:</strong> $ad</p>
                <p><strong>Soyad:</strong> $soyad</p>
                <p><strong>E-posta:</strong> $email</p>
                <p><strong>Telefon:</strong> $tel</p>
                <p><strong>Konu:</strong> $konu</p>
                <p><strong>Cinsiyet:</strong> $cinsiyet</p>
                <p><strong>Mesaj:</strong> $mesaj</p>
                <p><strong>KVKK Durumu:</strong> $kvkk</p>
            </div>
            <a href='iletisim.html' class='btn btn-primary mt-3'>Geri Dön</a>
        </div>
    </body>
    </html>";
} else {
    // Doğrudan bu sayfaya girişi engellemek için
    echo "Hata: Lütfen formu kullanarak veri gönderin.";
}
?>