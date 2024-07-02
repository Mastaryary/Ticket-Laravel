<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiket_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_pemesanan = $_POST['kode_pemesanan'];
    $tujuan = $_POST['tujuan'];
    $penumpang = $_POST['penumpang'];
    $tanggal_berangkat = $_POST['tanggal_berangkat'];
    $action = $_POST['action'];

    $sql = "INSERT INTO transaksi_tiket (kode_pemesanan, tujuan, penumpang, tanggal_berangkat, action)
            VALUES ('$kode_pemesanan', '$tujuan', '$penumpang', '$tanggal_berangkat', '$action')";

    if ($conn->query($sql) === TRUE) {
        echo "Transaksi berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
