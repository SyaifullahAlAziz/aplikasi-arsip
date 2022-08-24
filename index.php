<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    echo "<script>alert('Harap Login Terlebih Dahulu');
    window.location='login.php'
    </script>";
}

include "koneksi.php";
include "layout/header.php";
include "layout/sidebar.php";
include "content.php";
include "layout/footer.php";
