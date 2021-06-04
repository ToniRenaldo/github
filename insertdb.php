<?php
include "koneksi.php";


$nama_pasien = $_POST['nama_pasien'];
$alamat = $_POST['alamat'];
$riwayat_perjalanan = $_POST['riwayat_perjalanan'];
$hasil_swab = $_POST['hasil_swab'];
$tanggal_swab = $_POST['tanggal_swab'];
$suhu = $_POST['suhu'];

if(!empty($nama_pasien) && !empty($alamat) && !empty($riwayat_perjalanan) && !empty($hasil_swab)
     && !empty($tanggal_swab) && !empty($suhu)){
    mysqli_query($con,"INSERT INTO 30_1tid_covid (nama_pasien_2055301139, alamat_2055301139,
    riwayat_perjalanan_2055301139, hasil_swab_2055301139, tanggal_swab_2055301139, suhu_2055301139)
    VALUES ('$nama_pasien','$alamat','$riwayat_perjalanan','$hasil_swab','$tanggal_swab','$suhu')");
    header('location:menupasien.php');
}else{
    echo "Input Gagal";
}

?>