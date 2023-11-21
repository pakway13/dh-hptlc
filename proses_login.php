<?php
session_start();
$conn = mysqli_connect("localhost","root","","upload");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Melindungi dari serangan SQL Injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Mengecek data pengguna di database
    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION['email'] = $email;
        header("location: admin.php"); // Mengarahkan ke halaman selamat datang
    } else {
        // Login gagal
        header("location: login.php?error=1"); // Mengarahkan kembali ke halaman login dengan pesan error
    }
}

$conn->close();
?>
