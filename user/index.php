<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div style="background-color:#696cff; height:50px;" class="card-header">
            <h4 style="color:white; position:absolute; top:12px;">Data User</h4>
        </div>
        <h5 class="card-header">
            <a class="btn btn-md btn-primary" href="index.php?page=user/tambah">Tambah Data</a>
        </h5>
        <div class="table-responsive text-nowrap container">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>No.Hp</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_user ORDER BY id_user DESC");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_lengkap'] ?></td>
                            <td><?= $data['username'] ?></td>
                            <td><?= $data['password'] ?></td>
                            <td><?= $data['no_hp'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['level_user'] ?></td>
                            <td>
                                <a href="index.php?page=user/ubah&id_user=<?= $data['id_user'] ?>" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                <a href="user/hapus.php?id_user=<?= $data['id_user'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>