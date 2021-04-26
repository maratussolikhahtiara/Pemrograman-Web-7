<?php
include 'koneksi.php';
$id 			= $_POST['id'];
$nama			= $_POST['nama'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];
$email			= $_POST['email'];
$alamat			=$_POST['alamat'];
$kota			=$_POST['kota'];
$pesan			=$_POST['pesan'];
$query = "INSERT INTO user SET id='$id', nama='$nama',  jekel='$jenis_kelamin', email='$email', alamat='$alamat' , kota='$kota' , pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan halaman ke index.php
header ("location:tampilkankontak.php");
?>