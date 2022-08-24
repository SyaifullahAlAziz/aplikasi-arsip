<?php
include "../koneksi.php";
$id_lokasi = $_GET['id_lokasi'];
$query = mysqli_query($koneksi, "DELETE FROM tb_lokasi WHERE id_lokasi ='$id_lokasi'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=lokasi/index';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=lokasi/index';</script>";
}
