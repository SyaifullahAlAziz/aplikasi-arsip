<?php
include "../koneksi.php";
$id_dokumen = $_GET['id_dokumen'];
$query = mysqli_query($koneksi, "DELETE FROM tb_dokumen WHERE id_dokumen ='$id_dokumen'");

if ($query) {
    echo "<script>alert('Data Berhasil Dihapus !!!');
    window.location.href='../index.php?page=dokumen/index';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus !!!');
    window.location.href='../index.php?page=dokumen/index';</script>";
}
