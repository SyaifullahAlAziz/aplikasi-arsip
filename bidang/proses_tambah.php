<?php
include "../koneksi.php";
if ($_POST) {
    $nama_bidang = $_POST['nama_bidang'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_bidang(nama_bidang) 
    VALUES ('$nama_bidang')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=bidang/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=bidang/tambah';</script>";
    }
}
