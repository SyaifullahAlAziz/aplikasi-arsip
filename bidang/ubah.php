<?php
include "koneksi.php";
$id_bidang = $_GET['id_bidang'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_bidang WHERE id_bidang='$id_bidang'");
$data = mysqli_fetch_array($query);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Ubah Data Bidang</h5>
                </div>
                <div class="card-body">
                    <form action="bidang/proses_ubah.php" method="post">
                        <input type="hidden" name="id_bidang" value="<?= $data['id_bidang'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama Bidang</label>
                            <input type="text" name="nama_bidang" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Bidang" value="<?= $data['nama_bidang'] ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=bidang/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>