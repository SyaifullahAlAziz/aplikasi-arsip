<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Tambah Data Lokasi</h5>
                </div>
                <div class="card-body">
                    <form action="lokasi/proses_tambah.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Lokasi Gudang</label>
                            <input type="text" name="nama_lokasi" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Lokasi" />
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=lokasi/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>