<?php
include "koneksi.php";
$id_user = $_GET['id_user'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id_user'");
$data = mysqli_fetch_array($query);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Ubah Data User</h5>
                </div>
                <div class="card-body">
                    <form action="user/proses_ubah.php" method="post">
                        <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Lengkap" value="<?= $data['nama_lengkap'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Username</label>
                                    <input type="text" name="username" class="form-control" id="basic-default-fullname" placeholder="Masukkan Username" value="<?= $data['username'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Password</label>
                                    <input type="password" name="password" class="form-control" id="id_password" placeholder="Masukkan Password" value="<?= $data['password'] ?>" required />
                                    <i style="position:absolute; left:430px; top:280px;" class="bx bx-hide" id="togglePassword" style="cursor: pointer;"></i>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">No.Handphone</label>
                                    <input type="number" name="no_hp" class="form-control" id="basic-default-fullname" placeholder="Masukkan No.Handphone" value="<?= $data['no_hp'] ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Email</label>
                                    <input type="email" name="email" class="form-control" id="basic-default-fullname" placeholder="Contoh : user@gmail.com" value="<?= $data['email'] ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Alamat</label> <br>
                                    <textarea class="form-control" name="alamat" id="" placeholder="Masukkan Alamat" cols="60" rows="3" required><?= $data['alamat'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Status</label>
                                    <select style="width:200px;" class="form-control" name="level_user" id="">
                                        <option value="">Pilih Status</option>
                                        <option value="admin" <?= $data['level_user'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        <option value="user" <?= $data['level_user'] == 'user' ? 'selected' : '' ?>>User</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-dark" href="index.php?page=user/index">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>