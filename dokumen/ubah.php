<?php
include "koneksi.php";
$id_dokumen = $_GET['id_dokumen'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_dokumen WHERE id_dokumen='$id_dokumen'");
$data = mysqli_fetch_array($query);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Ubah Data Dokumen</h5>
                </div>
                <div class="card-body">
                    <form action="dokumen/proses_ubah.php" method="post">
                        <input type="hidden" name="id_dokumen" value="<?= $data['id_dokumen'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Jenis Dokumen</label>
                            <input type="text" name="nama_dokumen" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Dokumen" value="<?= $data['nama_dokumen'] ?>" />
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=dokumen/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>