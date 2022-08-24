<?php
include "../koneksi.php";
if ($_POST) {
    $nama_lokasi = $_POST['nama_lokasi'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_lokasi(nama_lokasi) 
    VALUES ('$nama_lokasi')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=lokasi/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=lokasi/tambah';</script>";
    }
}
