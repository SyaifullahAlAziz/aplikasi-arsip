<?php
include "../koneksi.php";
if ($_POST) {
    $id_lokasi = $_POST['id_lokasi'];
    $id_dokumen = $_POST['id_dokumen'];
    $id_bidang = $_POST['id_bidang'];
    $no_box = $_POST['no_box'];
    $no_file = $_POST['no_file'];
    $bulan_periode = $_POST['bulan_periode'];
    $tahun_periode = $_POST['tahun_periode'];
    $keterangan = $_POST['keterangan'];

    // ambil data file
    $berkas = $_FILES['berkas']['name'];
    $namaSementara = $_FILES['berkas']['tmp_name'];
    // pindahkan file
    $terupload = move_uploaded_file($namaSementara, '../assets/berkas/' . $berkas);

    $query = mysqli_query($koneksi, "INSERT INTO tb_berkas(id_lokasi, id_dokumen, id_bidang, no_box, no_file, bulan_periode, tahun_periode, keterangan, berkas) 
    VALUES ('$id_lokasi', '$id_dokumen', '$id_bidang', '$no_box', '$no_file', '$bulan_periode', '$tahun_periode', '$keterangan', '$berkas')");

    if ($query) {
        echo "<script>alert('Data Berhasil Ditambahkan !!!');
        window.location.href='../index.php?page=data_entry/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan !!!');
        window.location.href='../index.php?page=data_entry/tambah';</script>";
    }
}
