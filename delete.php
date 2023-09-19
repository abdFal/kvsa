<?php
include('config.php');
$Id = $_GET['Id'];
mysqli_query($connect,"DELETE FROM barangmainan WHERE Id=$Id");
header('location:index.php')
?>