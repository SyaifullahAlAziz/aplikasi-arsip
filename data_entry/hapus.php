<?php
include "../koneksi.php";
$id_berkas = $_GET['id_berkas'];
$query = mysqli_query($koneksi, "DELETE FROM tb_berkas WHERE id_berkas ='$id_berkas'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=berkas/index';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=berkas/index';</script>";
}
