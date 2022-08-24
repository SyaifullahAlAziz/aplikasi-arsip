<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div style="background-color:#696cff; height:50px;" class="card-header">
            <h4 style="color:white; position:absolute; top:12px;">Data Bidang</h4>
        </div>
        <h5 class="card-header">
            <a class="btn btn-md btn-primary" href="index.php?page=bidang/tambah">Tambah Data</a>
        </h5>
        <div class="table-responsive text-nowrap container">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Bidang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_bidang ORDER BY id_bidang DESC");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_bidang'] ?></td>
                            <td>
                                <a href="index.php?page=bidang/ubah&id_bidang=<?= $data['id_bidang'] ?>" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                <a href="bidang/hapus.php?id_bidang=<?= $data['id_bidang'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>