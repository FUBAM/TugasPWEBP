<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
    form label {
        display: inline-block;
        width: 130px;
        margin-bottom: 5px;
    }
</style>
</head>

<body>
    <?php   
    include 'koneksi.php';
    
    $hasil = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa");

    echo "<h1>Data Mahasiswa</h1>";

    while ($data = mysqli_fetch_array($hasil)) {
        echo "Nama Mahasiswa: " . $data['nama_mahasiswa'] . "<br>";
        echo "Program Studi: " . $data['prodi_mahasiswa'] . "<br>";
        echo "Semester: " . $data['semester_mahasiswa'] . "<br><br>";
    }
    ?>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah.php" method="post">
        <label for="nama">Nama Mahasiswa :</label>
        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required><br>

        <label for="prodi_mahasiswa">Program Studi :</label>
        <select name="prodi_mahasiswa" id="prodi_mahasiswa" required>
            <option value="" selected disabled>Pilih Program Studi...</option>
            <option value="AKT">Akuntansi</option>
            <option value="MNJ">Manajemen</option>
            <option value="TI">Teknik Informasi</option>
            <option value="SI">Sistem Informasi</option>
            <option value="BING">Bahasa Inggris</option>
            <option value="BJEP">Bahasa Jepang</option>
            <option value="PSI">Psikologi</option>
            <option value="SK">Sistem Komputer</option>
            <option value="TS">Teknik Sipil</option>
            <option value="TIND">Teknik Industri</option>
            <option value="ARS">Arsitektur</option>
            <option value="TE">Teknik Elektro</option>
            <option value="BK">Bimbingan dan Konseling</option>
            <option value="PBING">Pendidikan Bahasa Inggris</option>
            <option value="PTI">Pendidikan Teknik Informatika</option>
        </select><br>

        <label for="semester">Semester :</label>
        <input type="number" id="semester_mahasiswa" name="semester_mahasiswa" required><br>

        <input type="submit" value="Tambah Data">
        <input type="reset" value="Reset">
    </form>

    <br>
    <h3>Cari Nama Mahasiswa</h3>
    <form action="cari.php" method="POST">
        <label for="nama">Nama Mahasiswa :</label>
        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required>
        <input type="submit" value="Cari Data">
        <input type="reset" value="Reset">
    </form>

    <br>
    <h3>Hapus Data Mahasiswa</h3>
    <form action="hapus.php" method="POST">
        <label for="npm">NPM :</label>
        <input type="number" id="npm" name="npm" required>
        <input type="submit" value="Hapus Data">
        <input type="reset" value="Reset">
    </form>

    <br>
    <h3>Update Data Mahasiswa</h3>
    <form action="update.php" method="POST">
        <label for="npm">NPM :</label>
        <input type="number" id="npm" name="npm" required>
        <input type="submit" value="Update">
        <input type="reset" value="Reset">
    </form>

</body>
</html>