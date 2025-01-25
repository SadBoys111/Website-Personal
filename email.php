<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Alamat email tujuan
    $to = "iryantorisman924@gmail.com";  // Ganti dengan alamat email Anda
    $subject = "Pesan Baru dari $name";
    
    // Isi email
    $email_content = "Nama: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Pesan:\n$message";
    
    // Set email header
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Kirim email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Pesan Anda telah terkirim!";
    } else {
        echo "Ada kesalahan, pesan gagal dikirim.";
    }
} else {
    echo "Formulir tidak diisi dengan benar.";
}
?>
