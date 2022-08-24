<?php
include "koneksi.php";
$id_lokasi = $_GET['id_lokasi'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_lokasi WHERE id_lokasi='$id_lokasi'");
$data = mysqli_fetch_array($query);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Ubah Data Lokasi</h5>
                </div>
                <div class="card-body">
                    <form action="lokasi/proses_ubah.php" method="post">
                        <input type="hidden" name="id_lokasi" value="<?= $data['id_lokasi'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Lokasi Gudang</label>
                            <input type="text" name="nama_lokasi" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Lokasi" value="<?= $data['nama_lokasi'] ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=lokasi/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>