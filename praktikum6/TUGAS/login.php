<?php
// Cek apakah data sudah lengkap atau belum
if(isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
    // Jika data sudah lengkap, tampilkan informasi login
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timestamp = time();
    $hari = date("l", $timestamp);
    $tanggal = date("d M Y", $timestamp);
    $jam = date("H:i", $timestamp);
    echo "<h1>Selamat datang, $name!</h1>";
    echo "<p>Email anda: $email</p>";
    echo "<p>Anda login pada $hari, $tanggal, pukul $jam</p>";
} else {
    // Jika data belum lengkap, redirect ke halaman error.php
    header("Location: error.php");
    exit();
}
?>