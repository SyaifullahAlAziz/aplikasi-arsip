<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Form Tambah Data User</h5>
                </div>
                <div class="card-body">
                    <form action="user/proses_tambah.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" id="basic-default-fullname" placeholder="Masukkan Nama Lengkap" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Username</label>
                                    <input type="text" name="username" class="form-control" id="basic-default-fullname" placeholder="Masukkan Username" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Password</label>
                                    <input type="password" name="password" class="form-control" id="id_password" placeholder="Masukkan Password" required />
                                    <i style="position:absolute; left:430px; top:280px;" class="bx bx-hide" id="togglePassword" style="cursor: pointer;"></i>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">No.Handphone</label>
                                    <input type="number" name="no_hp" class="form-control" id="basic-default-fullname" placeholder="Masukkan No.Handphone" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Email</label>
                                    <input type="email" name="email" class="form-control" id="basic-default-fullname" placeholder="Contoh : user@gmail.com" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Alamat</label> <br>
                                    <textarea class="form-control" name="alamat" id="" placeholder="Masukkan Alamat" cols="60" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Status</label>
                                    <select style="width:200px;" class="form-control" name="level_user" id="">
                                        <option value="">Pilih Status</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
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