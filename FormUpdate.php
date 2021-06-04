<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Tambah Data Pasien</title>

</head>
<body>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM `30_1tid_covid` WHERE id_2055301139 = '$id'");
    $m = mysqli_fetch_object($query);
    ?>
    <div class="container">
        <h1 class="text-center">Update Pasien</h1>
        <hr>
        <form action="updatedb.php" method="post">
            <input type="hidden" value="<?= $m->id_2055301139 ?>" name="id">
            <input type="text" name="nama_pasien" class="form-control" value="<?= $m->nama_pasien_2055301139 ?>" 
            placeholder="Nama Pasien">
            <br>
            <input type="text" name="alamat" class="form-control" value="<?= $m->alamat_2055301139?>" 
            placeholder="Alamat">
            <br>
            <input type="text" name="riwayat_perjalanan" class="form-control" value="<?= $m->riwayat_perjalanan_2055301139?>" 
            placeholder="Riwayat Perjalanan">
            <br>
            <input type="text" name="hasil_swab" class="form-control" value="<?= $m->hasil_swab_2055301139?>" 
            placeholder="Hasil Swab">
            <br>
            <input type="date" name="tanggal_swab" class="form-control" value="<?= $m->tanggal_swab_2055301139?>" 
            placeholder="Tanggal SWAB">
            <br>
            <input type="text" name="suhu" class="form-control" value="<?= $m->suhu_2055301139?>" placeholder="Suhu">
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-success">
        </form>
    </div>
</body>
</html>