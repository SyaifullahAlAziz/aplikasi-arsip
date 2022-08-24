<?php
include "koneksi.php";
$id_berkas = $_GET['id_berkas'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berkas WHERE id_berkas='$id_berkas'");
$data = mysqli_fetch_array($query);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Ubah Data</h5>
                </div>
                <div class="card-body">
                    <form action="data_entry/proses_ubah.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_berkas" value="<?= $data['id_berkas'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Lokasi Gudang</label>
                                    <select class="form-control" name="id_lokasi" id="">
                                        <option value="">Pilih Lokasi Gudang</option>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_lokasi");
                                        while ($lokasi = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $lokasi['id_lokasi'] ?>" <?= $lokasi['id_lokasi'] == $data['id_lokasi'] ? 'selected' : '' ?>>
                                                <?= $lokasi['nama_lokasi'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nomor Box Arsip</label>
                                    <input type="number" name="no_box" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nomor Box Arsip" value="<?= $data['no_box'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nomor File Map</label>
                                    <input type="number" name="no_file" class="form-control" id="id_password" placeholder="Masukkan Nomor File Map" value="<?= $data['no_file'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Bulan Periode</label>
                                    <input type="number" name="bulan_periode" class="form-control" id="basic-default-fullname" placeholder="Masukkan Bulan Periode" value="<?= $data['bulan_periode'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Tahun Periode</label>
                                    <input type="number" name="tahun_periode" class="form-control" id="basic-default-fullname" placeholder="Masukkan Tahun Periode" value="<?= $data['tahun_periode'] ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Jenis Dokumen</label>
                                    <select class="form-control" name="id_dokumen" id="">
                                        <option value="">Pilih Jenis Dokumen</option>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_dokumen");
                                        while ($dokumen = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $dokumen['id_dokumen'] ?>" <?= $dokumen['id_dokumen'] == $data['id_dokumen'] ? 'selected' : '' ?>>
                                                <?= $dokumen['nama_dokumen'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Bidang</label>
                                    <select class="form-control" name="id_bidang" id="">
                                        <option value="">Pilih Nama Bidang</option>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM tb_bidang");
                                        while ($bidang = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $bidang['id_bidang'] ?>" <?= $bidang['id_bidang'] == $data['id_bidang'] ? 'selected' : '' ?>>
                                                <?= $bidang['nama_bidang'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" id="" placeholder="Masukkan Keterangan" cols="48" rows="3" required><?= $data['keterangan'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Berkas</label> <br>
                                    <img src="assets/berkas/<?= $data['berkas'] ?>" width="100px" alt="">
                                    <input class="form-control" type="file" name="berkas">
                                    <input type="hidden" name="berkas_lama" value="<?= $data['berkas'] ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=data_entry/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>