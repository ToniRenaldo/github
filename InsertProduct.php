<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
</head>
<body>
    <div class ="container">
    <h1 class ="text-center">Pasien Tambahan</h1>
    <hr>
        <form action ="insertdb.php"method ="POST">
            <input type="text"name="nama_pasien"class="form-control" placeholder="Nama Pasien">
            <br>
            <input type="text"name="alamat"class="form-control" placeholder="Alamat">
            <br>
            <input type="text"name="riwayat_perjalanan"class="form-control" placeholder="Riwayat Perjalanan">
            <br>
            <input type="text"name="hasil_swab"class="form-control" placeholder="Hasil SWAB">
            <br>
            <input type="date"name="tanggal_swab"class="form-control" placeholder="Tanggal SWAB">
            <br>
            <input type="number"name="suhu"class="form-control" placeholder="Suhu">
            <br>
            <input type="submit"name="submit" value="Tambah" class= "btn btn-succsess">
            </hr>
        </form>
    
    </div>
    
</body>
</html>