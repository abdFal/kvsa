<?php
    include('config.php');
    $Id = $_POST['Id'];
    $Barang = $_POST['barangmainan'];
    $Harga = $_POST['harga'];
    $update = mysqli_query($connect, "UPDATE barangmainan SET nama='$Barang',harga='$Harga' WHERE Id='$Id'");
    if($update){
        header('location:index.php');
    }else{
        echo 'Update Fail';
    }
?>