<?php
include "lib/config.php";

$id = mysqli_real_escape_string($koneksi,$_POST['id']);
$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$nim = mysqli_real_escape_string($koneksi,$_POST['nim']);
$email = mysqli_real_escape_string($koneksi,$_POST['email']);
$jk = mysqli_real_escape_string($koneksi,$_POST['jk']);
$prodi = mysqli_real_escape_string($koneksi,$_POST['prodi']);
$angkatan = mysqli_real_escape_string($koneksi,$_POST['angkatan']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);


mysqli_query($koneksi,"UPDATE `mahasiswa` SET `nama`='$nama',`nim`='$nim',`email`='$email',`jk`='$jk',`prodi`='$prodi',`angkatan`='$angkatan',`alamat`='$alamat' WHERE id='$id'");

echo "<script>alert('Data Berhasil diedit!.');</script><script>window.location = 'index.php';</script>";
?>