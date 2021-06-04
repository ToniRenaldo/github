<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
$riwayat_perjalanan = $_POST['riwayat_perjalanan'];
$hasil_swab = $_POST['hasil_swab'];
$tanggal_swab = $_POST['tanggal_swab'];
$suhu = $_POST['suhu'];

if (!empty($id) && !empty($nama_pasien) && !empty($alamat) && !empty($riwayat_perjalanan)
     && !empty($hasil_swab) && !empty($tanggal_swab) && !empty($suhu)) {
    mysqli_query($con, "UPDATE 30_1tid_covid SET nama_pasien_2055301139='$nama_pasien',alamat_2055301139='$alamat',
    riwayat_perjalanan_2055301139='$riwayat_perjalanan', hasil_swab_2055301139='$hasil_swab', 
    tanggal_swab_2055301139='$tanggal_swab', suhu_2055301139='$suhu'
    WHERE id_2055301139 = '$id'");

    header('location:menupasien.php');
} else {
    echo "Update Gagal";
}