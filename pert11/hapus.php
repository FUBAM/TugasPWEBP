<?php
include 'koneksi.php';

$npm = $_POST['npm'];

$query = "DELETE FROM tb_mahasiswa WHERE npm = '$npm'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "Data dengan NPM $npm berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}

header("Location: index.php");
?>