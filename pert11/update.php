<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <style>
        form label {
            display: inline-block;
            width: 150px;
            margin-bottom: 5px;
        }
        .readonly-npm {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>Update Data Mahasiswa</h2>

    <?php
    include 'koneksi.php';

    if (isset($_POST['npm'])) {
        $npm_update = $_POST['npm'];
        
        $query = "SELECT * FROM tb_mahasiswa WHERE npm = '$npm_update'";
        $result = mysqli_query($koneksi, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
    ?>
            <form action="execute_update.php" method="post">
                <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
                
                <label for="npm_display">NPM :</label>
                <input type="text" id="npm_display" name="npm_display" value="<?php echo $data['npm']; ?>" readonly class="readonly-npm"><br>

                <label for="nama_mahasiswa">Nama Mahasiswa :</label>
                <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa']; ?>" required><br>

                <label for="prodi_mahasiswa">Program Studi :</label>
                <select name="prodi_mahasiswa" id="prodi_mahasiswa" required>
                    <option value="" selected disabled><?php echo $data['prodi_mahasiswa'] ?></option>
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

                <label for="semester_mahasiswa">Semester :</label>
                <input type="number" id="semester_mahasiswa" name="semester_mahasiswa" value="<?php echo $data['semester_mahasiswa']; ?>" required><br>

                <input type="submit" value="Ubah Data">
                <input type="reset" value="Reset Form">
            </form>
    <?php
        } else {
            echo "Data mahasiswa dengan NPM " . $npm_update . " tidak ditemukan.<br>";
        }
    } else {
        echo "NPM tidak diterima. Silakan kembali ke halaman utama dan pilih data yang ingin diupdate.";
    }
    ?>
    <br>
    <a href="index.php">Kembali ke Halaman Utama</a>
</body>
</html>