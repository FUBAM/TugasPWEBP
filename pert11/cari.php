<?php
include 'koneksi.php';
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$sql = "SELECT * FROM tb_mahasiswa WHERE nama_mahasiswa LIKE '%$nama_mahasiswa%'";
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) {
    echo "<h1>Hasil Pencarian Mahasiswa</h1>";
    while ($data = mysqli_fetch_array($hasil)) {
        echo "NPM: " . $data['npm'] . "<br>";
        echo "Nama Mahasiswa: " . $data['nama_mahasiswa'] . "<br>";
        echo "Jurusan: " . $data['prodi_mahasiswa'] . "<br>";
        echo "Semester: " . $data['semester_mahasiswa'] . "<br><br>";
    }
} else {
    echo "Tidak ada data yang ditemukan untuk nama: $nama_mahasiswa";
}

?>
<br>
<a href="index.php">Kembali ke Halaman Utama</a>