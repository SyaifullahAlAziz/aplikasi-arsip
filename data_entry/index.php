<?php
function bulan($bulan)
{
    if ($bulan == '1') {
        echo "I";
    } elseif ($bulan == '2') {
        echo "II";
    } elseif ($bulan == '3') {
        echo "III";
    } elseif ($bulan == '4') {
        echo "IV";
    } elseif ($bulan == '5') {
        echo "V";
    } elseif ($bulan == '6') {
        echo "VI";
    } elseif ($bulan == '7') {
        echo "VII";
    } elseif ($bulan == '8') {
        echo "VIII";
    } elseif ($bulan == '9') {
        echo "IX";
    } elseif ($bulan == '10') {
        echo "X";
    } elseif ($bulan == '11') {
        echo "XI";
    } elseif ($bulan == '12') {
        echo "XII";
    }
}
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div style="background-color:#696cff; height:50px;" class="card-header">
            <h4 style="color:white; position:absolute; top:12px;">Data Entry</h4>
        </div>
        <h5 class="card-header">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label style="color:white;" for="">.</label> <br>
                        <a style="font-size: 17px;" class="btn btn-sm btn-primary" href="index.php?page=data_entry/tambah">Tambah Data</a>
                    </div>
                    <div class="col-md-2">
                        <label style="color:white;" for="">.</label>
                        <select class="form-control" name="bulan" id="">
                            <option value="">Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label style="color:white;" for="">.</label>
                        <select class="form-control" name="tahun" id="">
                            <option value="">Pilih Tahun</option>
                            <?php
                            $y = 2020;
                            for ($i = $y; $i < date('Y') + 5; $i++) :
                            ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>

                        </select>
                    </div>
                    <div class="col-md-2">
                        <label style="color:white;" for="">.</label>
                        <select class="form-control" name="id_dokumen" id="">
                            <option value="">Dokumen</option>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM tb_dokumen");
                            while ($dokumen = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $dokumen['id_dokumen'] ?>">
                                    <?= $dokumen['nama_dokumen'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label style="color:white;" for="">.</label> <br>
                        <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>
        </h5>
        <div class="table-responsive text-nowrap container">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi Gudang</th>
                        <th>Nomor Box Arsip</th>
                        <th>Nomor File Map</th>
                        <th>Bulan Periode</th>
                        <th>Tahun Periode</th>
                        <th>Jenis Dokumen</th>
                        <th>Bidang</th>
                        <th>Keterangan</th>
                        <th>Berkas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php
                    $no = 1;
                    if (isset($_POST['filter'])) {
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berkas 
                        JOIN tb_lokasi ON tb_berkas.id_lokasi=tb_lokasi.id_lokasi
                        JOIN tb_dokumen ON tb_berkas.id_dokumen=tb_dokumen.id_dokumen
                        JOIN tb_bidang ON tb_berkas.id_bidang=tb_bidang.id_bidang
                        WHERE tb_berkas.bulan_periode='$_POST[bulan]' 
                        AND tb_berkas.tahun_periode='$_POST[tahun]' 
                        AND tb_berkas.id_dokumen='$_POST[id_dokumen]'
                        ORDER BY id_berkas DESC");
                    } else {
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_berkas 
                        JOIN tb_lokasi ON tb_berkas.id_lokasi=tb_lokasi.id_lokasi
                        JOIN tb_dokumen ON tb_berkas.id_dokumen=tb_dokumen.id_dokumen
                        JOIN tb_bidang ON tb_berkas.id_bidang=tb_bidang.id_bidang
                        ORDER BY id_berkas DESC");
                    }
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_lokasi'] ?></td>
                            <td><?= $data['no_box'] ?></td>
                            <td><?= $data['no_file'] ?></td>
                            <td><?= bulan($data['bulan_periode']) ?></td>
                            <td><?= $data['tahun_periode'] ?></td>
                            <td><?= $data['nama_dokumen'] ?></td>
                            <td><?= $data['nama_bidang'] ?></td>
                            <td><?= $data['keterangan'] ?></td>
                            <td><a href="assets/berkas/<?= $data['berkas'] ?>"><?= $data['berkas'] ?> </a></td>
                            <td>
                                <a target="_blank" href="data_entry/cetak.php?id_berkas=<?= $data['id_berkas'] ?>" class="btn btn-sm btn-info"><i class="bx bx-printer"></i></a>
                                <a href="index.php?page=data_entry/ubah&id_berkas=<?= $data['id_berkas'] ?>" class="btn btn-sm btn-success"><i class="bx bx-edit"></i></a>
                                <a href="data_entry/hapus.php?id_berkas=<?= $data['id_berkas'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data?')" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>