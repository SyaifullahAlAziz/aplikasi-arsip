<?php
include "../koneksi.php";
if ($_POST) {
    $id_berkas = $_POST['id_berkas'];
    $id_lokasi = $_POST['id_lokasi'];
    $id_dokumen = $_POST['id_dokumen'];
    $id_bidang = $_POST['id_bidang'];
    $no_box = $_POST['no_box'];
    $no_file = $_POST['no_file'];
    $bulan_periode = $_POST['bulan_periode'];
    $tahun_periode = $_POST['tahun_periode'];
    $keterangan = $_POST['keterangan'];

    if ($_FILES['berkas']['name'] == '') {
        //jika berkas kosong
        $berkas = $_POST['berkas_lama'];
    } else {
        //jika berkas diganti (berkas baru)
        // pindahkan file
        $berkas = $_FILES['berkas']['name'];
        $namaSementara = $_FILES['berkas']['tmp_name'];

        //hapus berkas lama
        unlink('../assets/berkas/' . $_POST['berkas_lama']);
        //pindahkan berkas baru
        $terupload = move_uploaded_file($namaSementara, '../assets/berkas/' . $berkas);
    }

    $query = mysqli_query($koneksi, "UPDATE tb_berkas SET id_lokasi='$id_lokasi', id_dokumen='$id_dokumen',
    id_bidang='$id_bidang', no_box='$no_box', no_file='$no_file', bulan_periode='$bulan_periode', tahun_periode='$tahun_periode', keterangan='$keterangan', berkas='$berkas' 
    WHERE id_berkas ='$id_berkas'");


    if ($query) {
        echo "<script>alert('Data Berhasil Diubah !!!');
    window.location.href='../index.php?page=data_entry/index';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah !!!');
    window.location.href='../index.php?page=data_entry/ubah';</script>";
    }
}
