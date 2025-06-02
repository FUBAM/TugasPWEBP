<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        include 'koneksi.php';

        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $prodi_mahasiswa = $_POST['prodi_mahasiswa'];
        $semester_mahasiswa = $_POST['semester_mahasiswa'];

        $query = "INSERT INTO tb_mahasiswa (nama_mahasiswa, prodi_mahasiswa, semester_mahasiswa) 
        VALUES ('$nama_mahasiswa', '$prodi_mahasiswa', '$semester_mahasiswa')";

        mysqli_query($koneksi, $query);

        if (mysqli_affected_rows($koneksi) > 0) {
            echo "Data berhasil disimpan.";
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        }
        ?>
        
        <br><br>
        <a href="index.php">Kembali ke Halaman Utama</a>
</body>

</html>