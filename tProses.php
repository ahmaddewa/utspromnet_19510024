<?php
include('lib/config.php');


$nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
$nim = mysqli_real_escape_string($koneksi,$_POST['nim']);
$jk = mysqli_real_escape_string($koneksi,$_POST['jk']);
$prodi = mysqli_real_escape_string($koneksi,$_POST['prodi']);
$angkatan = mysqli_real_escape_string($koneksi,$_POST['angkatan']);
$alamat = mysqli_real_escape_string($koneksi,$_POST['alamat']);
$online = mysqli_real_escape_string($koneksi,$_POST['online']);
$email = mysqli_real_escape_string($koneksi,$_POST['email']);


mysqli_query($koneksi,"INSERT INTO `mahasiswa`(`id`, `nama`, `nim`, `jk`, `prodi`, `angkatan`, `alamat`, `online`, `email`) VALUES ('','$nama','$nim','$jk','$prodi','$angkatan','$alamat','f','$email')");
echo "<script>alert('Data Berhasil ditambahkan!.');</script><script>window.location = 'index.php';</script>";
?>