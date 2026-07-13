<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isim = htmlspecialchars($_POST['isim']);
    $soyisim = htmlspecialchars($_POST['soyisim']);
    $email = htmlspecialchars($_POST['email']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $mesaj = htmlspecialchars($_POST['mesaj']);

    $icerik = "Tarih: " . date('Y-m-d H:i:s') . "\n";
    $icerik .= "İsim: $isim $soyisim\n";
    $icerik .= "E-Mail: $email\n";
    $icerik .= "Telefon: $telefon\n";
    $icerik .= "Mesaj: $mesaj\n";
    $icerik .= "---\n";

    file_put_contents(__DIR__ . '/mesajlar.txt', $icerik, FILE_APPEND);

    header('Location: contact_us.php?durum=basarili');
    exit;
} else {
    header('Location: contact_us.php');
    exit;
}
?>
