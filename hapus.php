<?php
include 'lib/config.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM `mahasiswa` WHERE  id='$id'");

echo "<script>alert('Data Berhasil dihapus!.');</script><script>window.location = 'index.php';</script>";

?>