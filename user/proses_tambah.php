<?php
include "../koneksi.php";
if ($_POST) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $level_user = $_POST['level_user'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_user(nama_lengkap, username, password, no_hp, email, alamat, level_user) 
    VALUES ('$nama_lengkap', '$username', '$password', '$no_hp', '$email', '$alamat', '$level_user')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=user/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=user/tambah';</script>";
    }
}
