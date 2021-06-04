<?php
// Mengkoneksikan Database 
include "koneksi.php";

$id = $_GET['id'];

if(!empty($id)) {
mysqli_query ($con, "DELETE FROM 30_1tid_covid WHERE id_2055301139 ='$id'");

header('location:menupasien.php');
}
else {
header('location:menupasien.php');    
}
?>