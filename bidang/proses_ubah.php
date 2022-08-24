<?php
include "../koneksi.php";
if ($_POST) {
    $id_bidang = $_POST['id_bidang'];
    $nama_bidang = $_POST['nama_bidang'];

    $query = mysqli_query($koneksi, "UPDATE tb_bidang SET nama_bidang='$nama_bidang' 
    WHERE id_bidang ='$id_bidang'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=bidang/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=bidang/ubah';</script>";
    }
}
