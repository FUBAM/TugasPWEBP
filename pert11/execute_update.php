<?php
include 'koneksi.php';

if (isset($_POST['npm'], $_POST['nama_mahasiswa'], $_POST['prodi_mahasiswa'], $_POST['semester_mahasiswa'])) {

    $npm = $_POST['npm'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $prodi_mahasiswa = $_POST['prodi_mahasiswa'];
    $semester_mahasiswa = $_POST['semester_mahasiswa'];

    $query = "UPDATE tb_mahasiswa
              SET nama_mahasiswa = '$nama_mahasiswa', semester_mahasiswa = '$semester_mahasiswa', prodi_mahasiswa = '$prodi_mahasiswa'
              WHERE npm = '$npm'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data mahasiswa dengan NPM " . $npm . " berhasil diubah.<br>";
    } else {
        echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
} else {
    echo "Gagal mengubah data. Pastikan semua field terisi .<br>";
}
?>
<br>
<a href="index.php">Kembali ke Halaman Utama</a>