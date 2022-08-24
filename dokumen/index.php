<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div style="background-color:#696cff; height:50px;" class="card-header">
            <h4 style="color:white; position:absolute; top:12px;">Data Dokumen</h4>
        </div>
        <h5 class="card-header">
            <a class="btn btn-md btn-primary" href="index.php?page=dokumen/tambah">Tambah Data</a>
        </h5>
        <div class="table-responsive text-nowrap container">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Dokumen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_dokumen ORDER BY id_dokumen DESC");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_dokumen'] ?></td>
                            <td>
                                <a href="index.php?page=dokumen/ubah&id_dokumen=<?= $data['id_dokumen'] ?>" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                <a href="dokumen/hapus.php?id_dokumen=<?= $data['id_dokumen'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>