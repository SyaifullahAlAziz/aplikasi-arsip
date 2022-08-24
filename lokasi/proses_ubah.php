<?php
include "../koneksi.php";
if ($_POST) {
    $id_lokasi = $_POST['id_lokasi'];
    $nama_lokasi = $_POST['nama_lokasi'];

    $query = mysqli_query($koneksi, "UPDATE tb_lokasi SET nama_lokasi='$nama_lokasi' 
    WHERE id_lokasi ='$id_lokasi'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=lokasi/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=lokasi/ubah';</script>";
    }
}
