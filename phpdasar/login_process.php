<?php
// Menghubungkan ke database (gantilah dengan informasi koneksi database Anda)
$servername = "localhost";
$username = "username_db";
$password = "password_db";
$dbname = "nama_database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek keberadaan pengguna dengan username yang sesuai
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Username ditemukan, verifikasi password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        echo "Login berhasil!";
        // Lanjutkan ke halaman setelah login berhasil (misalnya, dashboard)
    } else {
        echo "Password salah.";
        // Redirect atau tampilkan pesan error pada form login
    }
} else {
    echo "Username tidak ditemukan.";
    // Redirect atau tampilkan pesan error pada form login
}

mysqli_close($conn);
?>
