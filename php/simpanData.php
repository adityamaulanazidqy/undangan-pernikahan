<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include_once 'koneksi.php';

// Periksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui formulir
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];
    $konfirmasi = $_POST['konfirmasi'];
    $pembuatan = $_POST['tanggalPembuatan'];

    // Persiapkan query untuk menyimpan data tamu
    $query = "INSERT INTO tamu (nama, ucapan, konfirmasi, tanggal_Pembuatan) VALUES ('$nama', '$ucapan', '$konfirmasi', '$pembuatan')";

    // Eksekusi query untuk menyimpan data
    if (mysqli_query($koneksi, $query)) {
        echo "Data tamu berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Tutup koneksi database
    mysqli_close($koneksi);
}
