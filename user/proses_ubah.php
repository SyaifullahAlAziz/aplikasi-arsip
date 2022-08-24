<?php
include "../koneksi.php";
if ($_POST) {
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $level_user = $_POST['level_user'];

    $query = mysqli_query($koneksi, "UPDATE tb_user SET nama_lengkap='$nama_lengkap', username='$username',
    password='$password', no_hp='$no_hp', email='$email', alamat='$alamat', level_user='$level_user' 
    WHERE id_user ='$id_user'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=user/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=user/ubah';</script>";
    }
}
