<?php
include('config.php');
$barang = $_POST['barangmainan'];
$harga = $_POST['harga'];
mysqli_query($connect, "INSERT INTO barangmainan (nama,harga) VALUES('$barang','$harga')");
header('location:index.php')
?>