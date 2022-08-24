<?php
include "../koneksi.php";
if ($_POST) {
    $id_dokumen = $_POST['id_dokumen'];
    $nama_dokumen = $_POST['nama_dokumen'];

    $query = mysqli_query($koneksi, "UPDATE tb_dokumen SET nama_dokumen='$nama_dokumen' 
    WHERE id_dokumen ='$id_dokumen'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=dokumen/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=dokumen/ubah';</script>";
    }
}
