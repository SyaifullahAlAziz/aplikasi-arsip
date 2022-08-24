<?php
include "../koneksi.php";
if ($_POST) {
    $nama_dokumen = $_POST['nama_dokumen'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_dokumen(nama_dokumen) 
    VALUES ('$nama_dokumen')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=dokumen/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=dokumen/tambah';</script>";
    }
}
