<?php
// Koneksi dan simpan data seperti biasa
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pemesanan";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$kota = $_POST['kota'];
$bi = $_POST['bi'];
$sumber = $_POST['sumber'];

$sql = "INSERT INTO formulir (nama, no_hp, kota, bi_checking, sumber) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nama, $no_hp, $kota, $bi, $sumber);

if ($stmt->execute()) {
    header("Location: index.php?status=sukses");
} else {
    header("Location: index.php?status=gagal");
}

$stmt->close();
$conn->close();
exit;
?>
