<?php
	// Cek apakah data sudah lengkap atau belum
	if(isset($_POST['nama']) && isset($_POST['umur']) && isset($_POST['alamat']) && isset($_POST['hobi']) && isset($_POST['email']) && isset($_POST['telepon']) && !empty($_POST['nama']) && !empty($_POST['umur']) && !empty($_POST['alamat']) && !empty($_POST['hobi']) && !empty($_POST['email']) && !empty($_POST['telepon'])) {
	    // Jika data sudah lengkap, tampilkan informasi biodata
	    $nama = $_POST['nama'];
	    $umur = $_POST['umur'];
	    $alamat = $_POST['alamat'];
	    $hobi = $_POST['hobi'];
	    $email = $_POST['email'];
	    $telepon = $_POST['telepon'];
	    
	    // Tambahkan informasi waktu
        date_default_timezone_set('Asia/Jakarta');
	    $waktu = date('Y-m-d H:i:s');
	    
	    echo "<h1>Biodata</h1>";
	    echo "<p>Nama: $nama</p>";
	    echo "<p>Umur: $umur tahun</p>";
	    echo "<p>Alamat: $alamat</p>";
	    echo "<p>Hobi: $hobi</p>";
	    echo "<p>Email: $email</p>";
	    echo "<p>Telepon: $telepon</p>";
	    echo "<p>Waktu dikirim: $waktu</p>";
	} else {
	    // Jika data belum lengkap, redirect ke halaman error
	    header("Location: error.php");
	    exit();
	}
	?>