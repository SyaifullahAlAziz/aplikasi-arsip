<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Nomor</title>
</head>

<body>
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

    include "../koneksi.php";
    $id_berkas = $_GET['id_berkas'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_berkas WHERE id_berkas='$id_berkas'");
    $data = mysqli_fetch_array($query);

    ?>

    <b>
        <p style="font-size: 20px; position:relative; left:200px; top:70px;">Nomor Box</p>
    </b>
    <center>
        <div style="margin-top:100px; border-style:solid; border-radius:15px; width:750px;">
            <h1><?= $data['no_box'] ?> / ISP - <?= bulan($data['bulan_periode']) ?> / <?= $data['tahun_periode'] ?></h1>
        </div>
    </center>

    <b>
        <p style="font-size: 20px; position:relative; left:200px; top:70px;">Nomor File Map</p>
    </b>
    <center>
        <div style="margin-top:100px; border-style: solid; border-radius:15px; width:750px;">
            <h1><?= $data['no_box'] ?> / <?= $data['no_file'] ?> - ISP - <?= bulan($data['bulan_periode']) ?> / <?= $data['tahun_periode'] ?></h1>
        </div>
    </center>

    <script>
        window.print()
    </script>
</body>

</html>