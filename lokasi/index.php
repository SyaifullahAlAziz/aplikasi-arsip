<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div style="background-color:#696cff; height:50px;" class="card-header">
            <h4 style="color:white; position:absolute; top:12px;">Data Lokasi</h4>
        </div>
        <h5 class="card-header">
            <a class="btn btn-md btn-primary" href="index.php?page=lokasi/tambah">Tambah Data</a>
        </h5>
        <div class="table-responsive text-nowrap container">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi Gudang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_lokasi ORDER BY id_lokasi DESC");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_lokasi'] ?></td>
                            <td>
                                <a href="index.php?page=lokasi/ubah&id_lokasi=<?= $data['id_lokasi'] ?>" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                <a href="lokasi/hapus.php?id_lokasi=<?= $data['id_lokasi'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>