<?php
include "../koneksi.php";
$id_bidang = $_GET['id_bidang'];
$query = mysqli_query($koneksi, "DELETE FROM tb_bidang WHERE id_bidang ='$id_bidang'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=bidang/index';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=bidang/index';</script>";
}
